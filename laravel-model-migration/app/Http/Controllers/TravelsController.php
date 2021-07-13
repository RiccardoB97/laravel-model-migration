<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelsController extends Controller
{
    //
    public function index()
    {

        $travels = Travel::all();
        ddd($travels);
        return view('travel', compact('travels'));
    }
}
