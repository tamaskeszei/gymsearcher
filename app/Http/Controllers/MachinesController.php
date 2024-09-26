<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachinesController extends Controller
{
    public function index()
    {
        return view('machine.index');
    }
}
