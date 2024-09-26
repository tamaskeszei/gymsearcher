<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Gymimages;
use Illuminate\Http\Request;
use App\Models\Gyms;
use App\Models\Prices;
use App\Models\Services;

class GymsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // $gyms = Gyms::with('gymimages')->get();
        // $prices = Gyms::with('prices')->get();
        // $services= Services::all();
        // return view('gyms.index', compact('gyms', 'prices', 'services'));

    public function index(Request $request)
    {
        $request->validate(
            ['price' => 'nullable|numeric|min:1', 'name' => 'nullable|min:3' ],
            ['price.min' => 'Az ár nullánál nagyobb legyen', 
            'name.min' => 'A konditerem neve legalább 3 karakter legyen']
        );

        $query = Gyms::with(['gymimages', 'prices', 'services']);

         if ($request->has('name')) {
            $searchedName=$request->input('name');
            $query->where('name', 'like', '%' . $request->input('name') . '%');
         }

        // Felhasználó által választott jegyár nevének lekérése a keresőmezőből

         //Szűrés a konditermek között a választott jegyár alapján
         if ($request->has('price-category') && $request->has('price')) {
            $selectedPriceCategory = $request->input('price-category');
            
            if ($selectedPriceCategory && $request->input('price')>0) {
                  $query->whereHas('prices', function ($query) use ($selectedPriceCategory, $request) {
                    $query->where("prices.$selectedPriceCategory", '<=', $request->input('price'));
                });
            } 
        }
        
        if ($request->has('service')) {
            $selectedService = $request->input('service');
            if ($selectedService) {
                $query->whereHas('services', function ($query) use ($selectedService) {
                    $query->where('services.id', $selectedService);
                });
            }
        }

        $gyms = $query->get();
        $services = Services::all(); 
        $prices= Prices::all();

        return view('gyms.index', compact('gyms', 'services','prices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services= Services::all();

        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            if($usertype=='admin')
            {
                return view('gyms.create', compact('services'));
            }
            else
            {
                // return redirect()->back();
                abort(401);
            }
        }
        // return view('gyms.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'website_link' => 'required|string',
            'image' => 'required|image',
            'napijegy'=> 'numeric',
            'tizalkalmas_b'=> 'numeric',
            'diak_b'=> 'numeric',
            'felnott_b'=> 'numeric',
       ]);

        $gym = new Gyms;
        $gym->name = $request->input('name');
        $gym->address = $request->input('address');
        $gym->phone = $request->input('phone');
        $gym->email = $request->input('email');
        $gym->website_link = $request->input('website_link');
        $gym->save();
        if ($gym->id) {
            $gym->services()->attach($request->services);
        } 
        // $gym->services()->attach($request->services);
        

        // Képfeltöltés kezelése
        if ($request->hasFile('image')) {
            $image = new Gymimages;
            $destination_path = 'public/gym_images';
            $kep = $request->file('image');
            $image_name = $kep->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
            $image->gym_id = $gym->id;
            $image->image = $image_name;
            $image->save();
        }

        // Árak mentése
        $price = new Prices;
        $price->gym_id = $gym->id;
        $price->napijegy = $request->input('napijegy');
        $price->tizalkalmas_b = $request->input('tizalkalmas_b');
        $price->diak_b = $request->input('diak_b');
        $price->felnott_b = $request->input('felnott_b');
        $price->save();

        return redirect()->route('gyms.index')->with('success', 'A Konditerem sikeresen hozzáadva.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
