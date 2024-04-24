<?php

namespace App\Http\Controllers;

use App\Models\Ouvrage;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function ligues()
    {
        return view('visiteurs.ligues');
    }

    public function planning()
    {
        return view('visiteurs.evenements');
    }

    public function contact()
    {
        return view('visiteurs.contact');
    }

    public function evenements()
    {
        return view('visiteurs.evenements');
    }

    public function genre($type)
    {
        if($type == "tous"){
            $ouvrages = Ouvrage::all();
        }
        else{
            $ouvrages = Ouvrage::where('type', $type)->get();
        }

        $tous_les_types = Ouvrage::distinct()->pluck('type');

        return view('visiteurs.ouvrages', ["types" => $tous_les_types , "livres" => $ouvrages]);

    }
}
