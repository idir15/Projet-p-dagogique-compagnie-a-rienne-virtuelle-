<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bagage;
use App\Client;
use App\Enregistrement;
use App\Reservation_vol;
use App\Vol;

class BagageController extends Controller
{
    public function afficherBagage()
    { $reservation = session()->get('reservation');
      $idVol=session()->get('idVol');
      $vol=Vol::where('id','=', $idVol)->get()->first();
      session()->put('vol', $vol); 
       
        $listeEnregistre = [];
        $listeClient = session()->get('listeDesClients');
      
        foreach ($listeClient as $key) {
            if($key->statut == true){
                $client = Client::where([
                    ['num_client', '=', $key->num_client],

                ])->get();
                array_push($listeEnregistre, $client[0]);
                
                $enregistrement = Enregistrement::where([
                    'num_client'=>$key->num_client,
                    'id_vol'=>$idVol,
                    'statut'=> null,
                   
                ])->get()->first();
                $MonBagage=Bagage::where([
                    'num_enregistrement'=>$enregistrement->num_enregistrement,
                ])->get()->first();
                
                if($MonBagage == null){
                $bagage= Bagage::insert(['num_enregistrement'=>$enregistrement->num_enregistrement,'nb_bagage_main'=>1,'nb_bagage_accessoir'=>1,'nb_bagage_soute' => 0,'prix_bagage_soute'=> 0]);
                }
            }
            
        }
    
        session()->put('listeEnregistre', $listeEnregistre);
        
        return view('/enregistrement.bagage', ['listeEnregistre' => $listeEnregistre]);

    }

    public function storeBagage()
    { //recuper le vol
        $reservation = session()->get('reservation');
        $idVol=session()->get('idVol');
        $vol=session()->get('vol');
      

        $nb_bagage_soute = request('nb_bagage_soute');
        if($nb_bagage_soute<=9 && $nb_bagage_soute>=0){
$prix = $nb_bagage_soute*$vol->prix_bagage_sup;

        $num_client = request('num_client');

 
        

//insert into table bagage nbr de bagage
        //insert into table enregistrement num table bagage et num client
 $enregistrement = Enregistrement::where([
     'num_client'=>$num_client,
     'id_vol'=>$idVol,
     'statut'=> null,
 ])->get()->first();
 $bagage= Bagage::where('num_enregistrement',$enregistrement->num_enregistrement)->update(['nb_bagage_soute' => $nb_bagage_soute,'prix_bagage_soute'=> $prix]);
 

 $client_exist = session()->get('client_exist');    
 $bagage_exist = session()->get('bagage_exist');
 $listeEnregistre = session()->get('listeEnregistre');
        return view('/enregistrement/bagage', ['listeEnregistre' => $listeEnregistre]);
        }else{
            $error = "veuillez vérifier vos informations !!";
            return back()->with( ['error' => $error]);
        }
    }

}
