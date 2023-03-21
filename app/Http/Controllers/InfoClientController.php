<?php

namespace App\Http\Controllers;

use App\Vol;
use App\Billet;
use App\Client;
use App\Contact;
use Stripe\Charge;
use Stripe\Stripe;
//use Barryvdh\DomPDF\PDF;
use App\Reservation;
use App\Reservation_vol;
use App\Mail\HelloMailGun;
use App\BilletElectronique;
use App\Classe;
use App\Reservation_client;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class InfoClientController extends Controller
{
    public function preStore(Request $info){   
        $clients = [];
        for($i=1 ; $i<=session('nb_adultes') ; $i++){

            $clientExists = Client::where([['nom_client', '=', request('adultes.adulte'.$i.'.nom')], ['prenom_client', '=', request('adultes.adulte'.$i.'.prenom')], ['date_naissance_client', '=', request('adultes.adulte'.$i.'.date_de_naissance')]])->exists();

            if($clientExists){
                $client = Client::where([['nom_client', '=', request('adultes.adulte'.$i.'.nom')], ['prenom_client', '=', request('adultes.adulte'.$i.'.prenom')], ['date_naissance_client', '=', request('adultes.adulte'.$i.'.date_de_naissance')]])->first();
                array_push($clients, $client);
            }else{

                $client=new Client();
                $client->nom_client=request('adultes.adulte'.$i.'.nom');
                $client->civilite_client=request('adultes.adulte'.$i.'.civilite');
                $client->num_categorie = 4;
                $client->prenom_client=request('adultes.adulte'.$i.'.prenom');
                $client->date_naissance_client=request('adultes.adulte'.$i.'.date_de_naissance');
                //$client->save();
                array_push($clients, $client);
            }
               
        }


            
            for($i=1 ; $i<=session('nb_enfants') ; $i++){

                $clientExists = Client::where([['nom_client', '=', request('enfants.enfant'.$i.'.nom')], ['prenom_client', '=', request('enfants.enfant'.$i.'.prenom')], ['date_naissance_client', '=', request('enfants.enfant'.$i.'.date_de_naissance')]])->exists();
                
                if($clientExists){
                    $client = Client::where([['nom_client', '=', request('enfants.enfant'.$i.'.nom')], ['prenom_client', '=', request('enfants.enfant'.$i.'.prenom')], ['date_naissance_client', '=', request('enfants.enfant'.$i.'.date_de_naissance')]])->first();
                    array_push($clients, $client);
                }else{

                    $client=new Client();
                    $client->num_categorie = 5;    
                    $client->nom_client=request('enfants.enfant'.$i.'.nom');
                    $client->prenom_client=request('enfants.enfant'.$i.'.prenom');
                    $client->date_naissance_client=request('enfants.enfant'.$i.'.date_de_naissance');
                    //$client->save();
                    array_push($clients, $client );
                }
            }
            
            for($i=1 ; $i<=session('nb_bebes') ; $i++){

                $clientExists = Client::where([['nom_client', '=', request('bebes.bebe'.$i.'.nom')], ['prenom_client', '=', request('bebes.bebe'.$i.'.prenom')], ['date_naissance_client', '=', request('bebes.bebe'.$i.'.date_de_naissance')]])->exists();
                
                if($clientExists){
                    $client = Client::where([['nom_client', '=', request('bebes.bebe'.$i.'.nom')], ['prenom_client', '=', request('bebes.bebe'.$i.'.prenom')], ['date_naissance_client', '=', request('bebes.bebe'.$i.'.date_de_naissance')]])->first();
                    array_push($clients, $client);
                }else{

                    $client=new Client();
                    $client->num_categorie = 3;
                    $client->nom_client=request('bebes.bebe'.$i.'.nom');
                    $client->prenom_client=request('bebes.bebe'.$i.'.prenom');
                    $client->date_naissance_client=request('bebes.bebe'.$i.'.date_de_naissance');
                    //$client->save();
                    array_push($clients, $client );
                }
                 
            }


            //dd($clients[0]->num_client);
            // foreach($adultes_tableau as $value )
            // {
           
            $type_reservation=session('type_vol');
            //   dd($type_reservation);
            $nombre_place_reserver=session('nb_adultes')+session('nb_enfants')+session('nb_bebes');
           
           
            $num_classe = Classe::where('nom_classe', '=', strtolower(session('class')))->first()->num_classe;
           
          

            
                $contact=new Contact();
                $contact->num_telephone_client=request('phone');
                $contact->email_client=request('email');

                $vols = [];

                $vols['aller'] =  Vol::find(session('vol_aller'));
                $prix_aller = $vols['aller']->getPrix($num_classe, session('nb_adultes'), session('nb_enfants'), session('nb_bebes'));
                $prix_total = $prix_aller;
                
                if (session()->has('vol_retour')) {
                    $vols['retour'] = Vol::find(session('vol_retour'));
                    $prix_retour = $vols['retour']->getPrix($num_classe, session('nb_adultes'), session('nb_enfants'), session('nb_bebes'));
                    $prix_total = $prix_total + $prix_retour;

                }
                
                

                


                session()->put('clients', $clients);
                session()->put('num_classe', $num_classe);
                session()->put('contact', $contact);
                session()->put('vols', $vols);
                session()->put('prix_aller', $prix_aller);
                if(session()->has('vol_retour')){
                    session()->put('prix_retour', $prix_retour);
                }
                session()->put('prix_total', $prix_total);

                return view('facture');
                
               
    }
        /*
        $validator = Validator::make($info->all(),[
    
            'adultes.*.prenom'=>'required|alpha|max:30|min:3',
            'adultes.*.nom'=>'required|alpha|max:30|min:3',
            'adultes.*.date_de_naissance'=>'required|date|before:31-12-2001|after_or_equal:31-12-1850',
            'enfants.*.prenom'=>'required|alpha|max:30|min:3',
            'enfants.*.nom'=>'required|alpha|max:30|min:3',
            'enfants.*.date_de_naissance'=>'required|date|before:31-12-2017|after_or_equal:31-12-2001',
            'bebes.*.prenom'=>'required|alpha|max:30|min:3',
            'bebes.*.nom'=>'required|alpha|max:30|min:3',
            'bebes.*.date_de_naissance'=>'required|date|before:today|after_or_equal:31-12-2017',
            'email'=>'required|email',
            'email_confrimation'=>'required|same:email',
            'phone'=>'required|numeric',
        ]);
        
        if ($validator->fails()){
            return redirect('/informations')
                ->withErrors($validator)
                ->withInput(request()->input());
        }
        */

        public function store(){
            
            Stripe::setApiKey('sk_test_7r61GdQnmF7l45pmmgq9qkfM00c6qX2stx');
        
            $token_id = $_POST['stripeToken'];
            //dd($token_id);
            $changeRate = 0.00084;
            $amount = round((session('prix_total') * $changeRate) * 100);
            
            
            try{
                
                $charge = Charge::create([
                    
                    'source' => $token_id,
                    'amount' => $amount,
                    'currency' => 'usd',
                    ]);
                   
      
        } catch(\Stripe\Exception\CardException $e) {
            // Since it's a decline, \Stripe\Exception\CardException will be caught
            //dd('hi payement controller');
            return view('payementDenied',[
                'e' => $e,
            ]);
        } catch (\Stripe\Exception\RateLimitException $e) {
                return view('payementDenied',[
                    'e' => $e,
                ]);
                echo 'Message is:' . $e->getError()->message . '<br>';
                // Too many requests made to the API too quickly
            } catch (\Stripe\Exception\InvalidRequestException $e) {
                            return view('payementDenied',[
                                'e' => $e,
                            ]);
                            echo 'Message is:' . $e->getError()->message . '<br>';
                            // Invalid parameters were supplied to Stripe's API
                        } catch (\Stripe\Exception\AuthenticationException $e) {
                                        return view('payementDenied',[
                                            'e' => $e,
                                        ]);
                                        echo 'Message is:' . $e->getError()->message . '<br>';
                                        // Authentication with Stripe's API failed
                                        // (maybe you changed API keys recently)
                                    } catch (\Stripe\Exception\ApiConnectionException $e) {
                                                        return view('payementDenied',[
                                                            'e' => $e,
                                                        ]);
                                                        echo 'Message is:' . $e->getError()->message . '<br>';
                                                        // Network communication with Stripe failed
                                                    } catch (\Stripe\Exception\ApiErrorException $e) {
                                                                    return view('payementDenied',[
                                                                        'e' => $e,
                                                                    ]);
                                                                    echo 'Message is:' . $e->getError()->message . '<br>';
                                                                    // Display a very generic error to the user, and maybe send
                                                                    // yourself an email
                                                                } catch (Exception $e) {
                                                                                    return view('payementDenied',[
                                                                                        'e' => $e,
                                                                                    ]);
                                                                                    echo 'Message is:' . $e->getError()->message . '<br>';
                                                                                    // Something else happened, completely unrelated to Stripe
                                                                                }
                                                                                                
  #####                     FIN VERIFICATION DU MOYEN DE PAYEMENT   ########


            foreach (session('clients') as $client) {
                if (Client::where([['nom_client', '=', $client->nom_client],['prenom_client', '=', $client->prenom_client], ['date_naissance_client', '=', $client->date_naissance_client]])->doesntExist()) {
                    $client->save();
                }
            }
            //dd($clients[0]->num_client);
            // foreach($adultes_tableau as $value )
            // {
                
            $reservation=new Reservation();
            $prix_reservation= round(session('prix_total'));
            $type_reservation=session('type_vol');
            //   dd($type_reservation);
            $nombre_place_reserver=session('nb_adultes')+session('nb_enfants')+session('nb_bebes');
           
            if(session()->has('Affaires')){
                $num_classe=3;
            }
            elseif(session()->has('Economique')){
                $num_classe=1;
            }
            else{
                $num_classe=2;
            }
            
          

            $tabReservation = [];
                $reservation_id = $reservation->insert_res($prix_reservation,$type_reservation, $nombre_place_reserver, $num_classe);  
                array_push($tabReservation,$reservation_id);
                $contact= session('contact');
                $contact->num_reservation=$reservation_id;
                $contact->save();
                foreach (session('clients') as $client) {
                    //Reservation_client::insert_reservation_client($client->num_client,$reservation_id);    
                    Billet::insert_billet($reservation_id, $client->num_client);
                }           
                if( session()->has('vol_retour') ){
                    Reservation_vol::inserer_reservationVol( $reservation_id, session('vol_retour'));
                }
                
                //dd(session('vol_aller'));
                    
               
                Reservation_vol::inserer_reservationVol( $reservation_id, session('vol_aller'));
                //$reservationPourLeBillet = Reservation::find($reservation_id);
                
                
                $billetElectronique = new BilletElectronique();
                $billetElectronique->reference_billet_electronique = BilletElectronique::getReference();
                    $billetElectronique->path = "pdf/".$billetElectronique->reference_billet_electronique.".pdf";
                $billetElectronique->created_at = now();
                $billetElectronique->updated_at = now();
                $billetElectronique->save();
                
                $vol_aller = Vol::find( session('vol_aller') );
                $vol_retour = Vol::find( session('vol_retour') );
                $reservationNew = Reservation::find($reservation_id);
                $pdf = PDF::loadView('billet',[
                    'reservation' => $reservationNew,
                    'reference_billet_electronique' => $billetElectronique->reference_billet_electronique,
                    'vol_aller' => $vol_aller,
                    'vol_retour' => $vol_retour,
                    'amount' => $amount,
                    'clients' => session('clients')
                ]);
                Storage::disk('pdf')->put("reservation_".$billetElectronique->reference_billet_electronique.".pdf" ,$pdf->output());
                //Storage::disk('pdf')->download("reservation_".$billetElectronique->reference_billet_electronique.'.pdf');
                 //$pdf->download("reservation_".$billetElectronique->reference_billet_electronique.'.pdf');
                 Mail::to($reservationNew->contact()->first()->email_client)->send(new HelloMailGun($billetElectronique->reference_billet_electronique, "reservation"));
                return view('bravo',[
                    'path' => "reservation_".$billetElectronique->reference_billet_electronique.".pdf",
                ]);
               // return "it works :D ";
                //return redirect('billet/'.$reservation_id);
            //}
    }
} 
           
 