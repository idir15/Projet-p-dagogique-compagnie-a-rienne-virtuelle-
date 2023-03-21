<?php

namespace App\Http\Controllers;

use App\Billet;
use App\Client;
use App\Enregistrement;
use App\Reservation;
use App\Reservation_vol;
use App\Vol;
use Illuminate\Http\Request;

class CheckController extends Controller
{

    public function check()
    {
        return view('enregistrement.check');

    }

    public function store()
    {

        

//voir si les donnée existe dans la bdd
        $reservation = Reservation::where([
            ['reference_reservation', '=', request('reference_reservation')],

        ])->get()->first();
        session()->put('reservation', $reservation);
        $exist_nom = Client::where([
            ['nom_client', '=', request('nom_client')],

        ])->get()->first();

     
        
        
        

        if ($reservation !== null && $exist_nom !== null) {

//chercher les billets qui ont tous le méme num_reservation
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
                       /* $idvol=Reservation_vol::where('num_reservation','=',$reservation->num_reservation)->get();
                       foreach($idvol as $key){array_push($tab, $key->id_vol);}*/
                       
                        //for($i=0;$i<count($tab);$i++){
                            //$voll=Vol::where('id','=',$tab[0])->get();
                            $voll = Reservation::find($reservation->num_reservation)->vols()->get()->sortBy('date_depart');
                            //if($voll[$i]->date_depart >= $date ){
                                //dd(now('Africa/Algiers')->diffInMinutes($notreVol->getDateHeurDepart()));

                            $nombresDeVols = Reservation::find($reservation->num_reservation)->vols()->count();

                            if ($nombresDeVols == 1 ) {
                                $notreVol = $voll->first();
                            }else {
                                $vol_un = $voll->first();
                                $vol_deux = $voll->last();

                                if ( now('Africa/Algiers')->diffInMinutes($vol_un->date_depart,false) >= 0 &&  now('Africa/Algiers')->diffInMinutes($vol_deux->date_depart,false) >= 0 ) {
                                    $notreVol = now('Africa/Algiers')->diffInMinutes($vol_un->date_depart,false) < now('Africa/Algiers')->diffInMinutes($vol_deux->date_depart,false) ? $vol_un : $vol_deux;
                                }else {
                                    if (now('Africa/Algiers')->diffInMinutes($vol_un->date_depart,false) < 0 ) {
                                       $notreVol = $vol_deux;
                                    }else{
                                        $notreVol = $vol_un;
                                    }
                                }
                            }

                            //dd(now('Africa/Algiers')->diffInMinutes($notreVol->getDateHeurDepart(), false));
             
                            //dd($notreVol);
                            
                            if( now('Africa/Algiers')->diffInMinutes($notreVol->getDateHeurDepart(), false) <= 1800 && now('Africa/Algiers')->diffInMinutes($notreVol->getDateHeurDepart(), false) >= 180 ){
                                session()->put('idVol', $notreVol->id);
                                session()->put('prixBagageSup', $notreVol->prix_bagage_sup);
                                $enregistrement=Enregistrement::where([
                                    'num_client'=>$num_client->num_client,
                                    'id_vol'=>$notreVol->id,
                                    'statut'=>1,
                                ])->get()->first(); 
                                    
                                if($enregistrement != null){
                                    $error = "vous étes déja enregistrer !";
                                   return view('enregistrement.check', ['error' => $error]);
                                }else{
                                   
                                 
                                        $enregistrement=Enregistrement::insert(['date_enregistrement'=>$datetime,'num_client'=>$num_client->num_client,'id_vol'=>$notreVol->id]);
                                      
                                    }
                                
                            }else{
                                
                                //dd($voll);
                                //dd($notreVol->getDateHeurDepart());
                                //dd(now('Africa/Algiers')->diffInMinutes($notreVol->getDateHeurDepart(), false));
                                
                                $error = "Vous ne pouvez pas vous enregistrer qu'entre 3 et 30 heurs avant le vol !";
                               
                                   return view('enregistrement.check', ['error' => $error]);  
                            
                        }
                        //}  






               
      
              
            }
 
            session()->put('listeDesClients', $listeDesClients);
            

            return view('enregistrement.information', ['listeClient' => $listeDesClients]);

        } else {
            $error = "veuillez vérifier vos informations !!";
            return view('enregistrement.check', ['error' => $error]);
        }

    }



    
    public function retour()
    {
        $listeClient = session()->get('listeDesClients');

        return view('/enregistrement.information', ['listeClient' => $listeClient]);

    }

}
