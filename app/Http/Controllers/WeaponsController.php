<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeaponsController extends Controller
{
    public function index()
    {
        return view('ref.weapons.index');
    }
}
