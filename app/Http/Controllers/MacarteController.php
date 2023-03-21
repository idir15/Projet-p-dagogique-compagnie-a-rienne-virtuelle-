<?php

namespace App\Http\Controllers;

use PDF;
use App\Siege;
use App\Client;
use App\Enregistrement;
use App\Mail\HelloMailGun;
use Illuminate\Http\Request;
use App\Enregistrement_siege;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


class MacarteController extends Controller
{
    //
     public function Imprimer(int $num_client, string $nom_client, string $prenom_client, string $email)
    {
      
      $requete = Client::where('num_client', $num_client)->get('date_naissance_client')->first();
    $dateNaissance = $requete->date_naissance_client;
    $billet = session()->get('billet');
    $siegeClient = session()->get('siegeClient');
    $vol =session()->get('vol');
    $idVol=session()->get('idVol');
    
  
      $enregistrement=Enregistrement::where([
                'num_client'=>$num_client,
                'id_vol'=>$idVol,
                'statut'=>1,
               
            ])->get()->first();
    // récupérer les siège 
    $enregistrement_Siege=Enregistrement_siege::where('num_enregistrement',$enregistrement->num_enregistrement)->get()->first();
     $siege=Siege::where('id',$enregistrement_Siege->num_siege)->get()->first();
  

    $reservation = session()->get('reservation');
    $vol =session()->get('vol');

    $numbillet = $enregistrement->id_vol.$enregistrement->num_client;
    $pdf = PDF::loadView('/enregistrement.cartePDF', [
        'num_client' => $num_client,
        'nom_client' => $nom_client,
        'prenom_client' => $prenom_client,
        'dateNaissance'=>$dateNaissance,
        'num_billet'=>$numbillet,
        'reservation'=>$reservation,
        'vol'=>$vol,
        'siege'=>$siege->num_siege,
        'num_passeport_client' => Client::where( 'num_client', '=', $num_client)->first()->num_passeport_client,
        ]);
        $pdf->setPaper([0, 0, 260,750], 'landscape');
        Storage::disk('pdf')->put("embarquement_".$numbillet.".pdf" ,$pdf->output());
        
        Mail::to($email)->send(new HelloMailGun($numbillet, "embarquement"));
        
        //return   Storage::disk('pdf')->download("embarquement_".$numbillet.".pdf");
      
        
    }


    public function download($idVol, $num_client){

      return  Storage::disk('pdf')->download("embarquement_".$idVol.$num_client.".pdf");
        
    }
}
