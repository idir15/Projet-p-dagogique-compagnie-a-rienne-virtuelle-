<?php

namespace App\Http\Controllers;

use App\Vol;
use App\Ville;
use App\Aeroport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{
    public function index(){

        $vols = Vol::whereRaw('num_ville_depart = 51 and num_ville_arriver = 1 and date_depart="2020-01-15"')->get();
        return view('catalogue',[
            "vols" => $vols,
        ]);
    }

    public function test(){
        
dd(Ville::all());
        echo "<?php <br>";
        echo "return [ <br>";
        foreach (Ville::all() as $ville) {
            echo "'".$ville->nom_ville."' =>  ' ' ,<br>";
        }
        echo "];";
dd();
        $test = Vol::first();
        dd(now('Europe/Paris'));
            dd($test->ville()->first());
/*
        $aeroports = Aeroport::all();
        return view('test',[
            "aeroports" => $aeroports,
        ]);
        */
    }
}
