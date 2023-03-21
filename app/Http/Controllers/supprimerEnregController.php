<?php

namespace App\Http\Controllers;

use App\Bagage;
use App\Billet;
use App\Client;
use App\Enregistrement;
use App\Enregistrement_siege;
use App\reservation;
use App\Reservation_vol;
use App\Vol;
use Illuminate\Http\Request;

class supprimerEnregController extends Controller
{
    public function PageSupprimer(){
        return view('/enregistrement.supprimerEnreg');
        
    }
    public function Supprimer(){
        request()->validate([
            'reference_reservation' => 'required|alpha_num',
            'nom_client' => 'required|max:20|min:3|alpha_spaces',
        ],[
            'reference_reservation.required' =>'Veuillez saisir votre référence de réservation',
            'reference_reservation.alpha_num' =>'Veuillez vérifier votre code ex: NRDDZ9',
            'nom_client.required' =>'Veuillez saisir votre nom ',
            'nom_client.alpha' =>'Vérifier votre nom. ',
            'nom_client.max' =>'Votre nom doit contenir au plus :max caractères. ', 
            'nom_client.min' =>'Votre nom doit contenir au moins :min caractères. ',
        ]);


        //voir si les donnée existe dans la bdd
        $reservation = Reservation::where([
            ['reference_reservation', '=', request('reference_reservation')],

        ])->get()->first();
        session()->put('reservation', $reservation);
        $exist_nom = Client::where([
            ['nom_client', '=', request('nom_client')],

        ])->get()->first();

        if ($reservation !== null && $exist_nom !== null) {
            $billet = Billet::where([
                ['num_reservation', '=', $reservation->num_reservation],

            ])->get();

            session()->put('billet', $billet);
//chercher les client qui appartient a la méme reservation

        
        
            $listeDesClients = [];
            $nb=false;
            $datetime = date("Y-m-d H:i:s");
           
            foreach ($billet as $num_client) {
                $client = Client::where([
                    ['num_client', '=', $num_client->num_client],

                ])->get();
                array_push($listeDesClients, $client[0]);


                $tab=[];
                $date = date("Y-m-d");
                        $idvol=Reservation_vol::where('num_reservation','=',$reservation->num_reservation)->get();
                       foreach($idvol as $key){array_push($tab, $key->id_vol);}
                        
                        for($i=0;$i<count($tab);$i++){
                            $voll=Vol::where('id','=',$tab[$i])->get();
                            
                            if($voll[$i]->date_depart >= $date ){
                                
                                session()->put('idVol', $voll[$i]->id);
                                $enregistrement=Enregistrement::where([
                                    'num_client'=>$num_client->num_client,
                                    'id_vol'=>$voll[$i]->id,
                                    'statut'=>1,
                                ])->get()->first(); 
                                }else{
                                     
                                if(count($voll) == 2)
                            {
                                    session()->put('idVol', $voll[$i+1]->id);
                                    $enregistrement=Enregistrement::where([
                                        'num_client'=>$num_client->num_client,
                                        'id_vol'=>$voll[$i+1]->id,
                                        'statut'=>1,
                                    ])->get()->first();  
                                }else{
                                    $error = "date d'enregistrement expirée .";
                                    return view('enregistrement.check', ['error' => $error]); 
                                }
                            }
                            }


                if($enregistrement != null){
                     
                $delete_Enreg_Siege=Enregistrement_siege::where('num_enregistrement',$enregistrement->num_enregistrement)->delete();
                
                
             
                $delete_bagage=Bagage::where('num_enregistrement',$enregistrement->num_enregistrement)->delete();
               
                $delete_Enreg=Enregistrement::where('num_enregistrement',$enregistrement->num_enregistrement)->delete();
                    
                if($delete_Enreg_Siege || $delete_bagage || $delete_Enreg){
                    $nb=true;
                   }
                }
                
                
                
            }
            if($nb == true){
                $error = "Votre enregistrement a bien été supprimer .";
                return view('enregistrement.check', ['error' => $error]);
            }else{
                $error = "Enregistrement n'existe pas !!";
                return view('enregistrement.check', ['error' => $error]);
            }
            

        }else{
            $error = "Enregistrement n'existe pas !!";
            return view('enregistrement.check', ['error' => $error]); 
        }
        
    }
}
