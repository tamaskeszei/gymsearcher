@extends('layout')

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('gyms.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="box">
        <h2>Konditerem feltöltése</h2>

        <div class="boxSub">
            <label for="name">A konditerem neve</label>
            <input class="inputfield" type="text" name="name" id="name" required>
        </div>
        <div class="boxSub">
            <label for="address">Konditerem címe</label>
            <input class="inputfield" type="text" name="address" id="address" required>
        </div>
        <div class="boxSub">
            <label for="phone">Telefonszám</label>
            <input class="inputfield" type="text" name="phone" id="phone" required>
        </div>
        <div class="boxSub">
            <label for="email">Email</label>
            <input class="inputfield" type="email" name="email" id="email" required>
        </div>
        <div class="boxSub">
            <label for="website_link">Weboldal címe</label>
            <input class="inputfield" type="text" name="website_link" id="website_link" required>
        </div>
        <div class="boxSub">
            <label for="image">Kép kiválasztása:</label>
            <input class="file-input" type="file" name="image" id="image">
        </div>
        <div class="boxSub">
            <label for="napijegy">Napijegy ára</label>
            <input class="inputfield" type="number" name="napijegy" id="napijegy" required>
        </div>
        <div class="boxSub">
            <label for="tizalkalmas_b">Tízalkalmas bérlet ára</label>
            <input class="inputfield" type="number" name="tizalkalmas_b" id="tizalkalmas_b" required>
        </div>
        <div class="boxSub">
            <label for="diak_b">Diák bérlet ára</label>
            <input class="inputfield" type="number" name="diak_b" id="diak_b" required>
        </div>
        <div class="boxSub">
            <label for="felnott_b">Felnőtt bérlet ára</label>
            <input class="inputfield" type="number" name="felnott_b" id="felnott_b" required>
        </div>

        <div class="boxSub">
            <label for="services">Szolgáltatások</label>
            <select class="select-input" name="services[]" id="services" multiple>
                @foreach ($services as $service)
                    <option value="{{$service->id}}">{{$service->name}}</option>
                @endforeach
            </select>
        </div>

        {{-- <div class="boxSub">
            <label for="kep">Kép(ek) kiválasztása:</label>
            <input class="inputfield" type="file" name="kep[]" id="kep" multiple required>
        </div> --}}
        <button class="sendBtn" type="submit">Mentés</button>
    </div>
    
</form>

@endsection