<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjouterBagageController extends Controller
{
    public function ajouterBagage(int $num_client, string $nom_client, string $prenom_client){
        
        return view('/enregistrement.ajouterDesBagages', ['num_client' => $num_client,'nom_client' => $nom_client,'prenom_client' => $prenom_client]);
    }
}
