<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function beerForm(){
        return view("beer.beer-form");
    }
        //metodo per inserire dati della birra nel database creando un oggetto
        public function beerStore(Request $request){
        //    dd($request->all());
              $beer = Beer::create(
                [
                    "name" => $request->name,
                    "type" => $request->type,
                    "cl" => $request->cl,
                    "naz" =>$request->naz,
                    "descrizione" =>$request->descrizione,
                    "img" => $request->file("img")->store("cover-beer", "public"),
                ]
              );

              return redirect()->route("beer.index");
        } 

        public function beerIndex(){
            $beers = Beer::all();
            return view("beer.beer-index", ["beers"=> $beers]);
        }


}
