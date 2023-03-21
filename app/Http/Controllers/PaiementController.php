<?php

namespace App\Http\Controllers;

use App\Bagage;
use App\Paiement;
use Stripe\Charge;
use Stripe\Stripe;
use App\Reservation;
use Omnipay\Omnipay;
use App\Enregistrement;
use Illuminate\Http\Request;
use App\Enregistrement_siege;

class PaiementController extends Controller
{
    public function stripe(){
        
    }
    
    public function carte(){

        if (isset($_POST['stripeToken'])) {
            
        Stripe::setApiKey('sk_test_7r61GdQnmF7l45pmmgq9qkfM00c6qX2stx');
        $changeRate = 0.00084;
        $amount = round(($changeRate * request('amount')) *100 );
            $token_id = $_POST['stripeToken'];
            //dd($token_id);
            //$amount = 10000;
            try{
                
                $charge = Charge::create([
                    
                    'source' => $token_id,
                    'amount' => $amount,
                    'currency' => 'usd',
                    ]);
                    //dd($charge);
                   
                    
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
                            }



        $listeEnregistre = session()->get('listeEnregistre');
        $billet = session()->get('billet');
        $reservation = session()->get('reservation');
        $vol =session()->get('vol');
        $idVol=session()->get('idVol');
        $mesSiege =session()->get('mesSiege');
       
        //si il a payer
        for($i=0;$i<count($listeEnregistre);$i++){
           
            $enregistrement=Enregistrement::where([
                'num_client'=>$listeEnregistre[$i]->num_client,
                'id_vol'=>$idVol,
                
            ])->update(['statut'=>1]);
            $enreg=Enregistrement::where([
                'num_client'=>$listeEnregistre[$i]->num_client,
                'id_vol'=>$idVol,
                'statut'=>1,
                
            ])->get()->first();
             
          Enregistrement_siege::insert(['num_enregistrement'=>$enreg->num_enregistrement,'num_siege'=>$mesSiege[$i]]);
              
        }
        
       //dd($listeEnregistre);
       $email = Reservation::find($reservation->num_reservation)->contact()->first()->email_client;
       foreach ($listeEnregistre as $client) {
           app('App\Http\Controllers\MacarteController')->Imprimer($client->num_client, $client->nom_client, $client->prenom_client, $email);
       }
        return view('enregistrement.carte_embarquement',['listeEnregistre'=>$listeEnregistre,'billet'=>$billet,'reservation'=>$reservation,'vol'=>$vol]); 
    }

    /*
    public function charge(Request $request)
    {
        if ($request->input('stripeToken')) {
  
            $gateway = Omnipay::create('Stripe');
            $gateway->setApiKey(env('STRIPE_SECRET_KEY'));
          
            $token = $request->input('stripeToken');
          
            $response = $gateway->purchase([
                'amount' => $request->input('amount'),
                'currency' => env('STRIPE_CURRENCY'),
                'token' => $token,
            ])->send();
          
            if ($response->isSuccessful()) {
                // payment was successful: insert transaction data into the database
                $arr_payment_data = $response->getData();
                 
                $isPaymentExist = Paiement::where('payment_id', $arr_payment_data['id'])->first();
          
                if(!$isPaymentExist)
                {
                    $payment = new Paiement;
                    $payment->payment_id = $arr_payment_data['id'];
                    $payment->payer_email = $request->input('email');
                    $payment->amount = $arr_payment_data['amount']/100;
                    $payment->currency = env('STRIPE_CURRENCY');
                    $payment->payment_status = $arr_payment_data['status'];
                    $payment->save();
                }
 
                return "Payment is successful ";
            } else {
                // payment failed: display message to customer
                return $response->getMessage();
            }
        }
    }
    */
}
