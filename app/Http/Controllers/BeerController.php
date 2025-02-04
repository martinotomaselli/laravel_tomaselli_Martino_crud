<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function beerForm(){
        return view("beer.beer-form");
    }
}
