<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TravelBox;

class TravelBoxController extends Controller
{
    //
    public function index()
    {

        $travels = TravelBox::all();
        return view('travel', compact('travels'));
    }
}
