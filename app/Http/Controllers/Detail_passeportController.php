<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class Detail_passeportController extends Controller
{

    public function afficherClient(int $num_client, string $nom_client, string $prenom_client)
    {
        // $requete = Client::where('num_client', $num_client)->get('date_naissance_client')->first();
        // $dateNaissance = $requete->date_naissance_client;
        return view('/enregistrement.detail_passeport', ['num_client' => $num_client, 'nom_client' => $nom_client, 'prenom_client' => $prenom_client]);
    }

    public function insertToClient(int $num_client, string $nom_client, string $prenom_client)
    {
        request()->validate([
            'nationalite' => 'required|alpha',
            'numero_passeport' => 'required|numeric',
            'confirmer_numero_passeport' => 'required|numeric|same:numero_passeport',
            'date_expiration_passeport' => 'required|date|after_or_equal:today',
        ],[
            'nationalite.required' => 'veuillez saisir votre nationalité .',
            'numero_passeport.required' => 'veuillez saisir votre numéro de passeport .',
            // 'numero_passeport.numeric' => 'Votre numéro de passeport ne doit contenir que des chiffres .', 
            'numero_passeport.size' => 'Votre numéro de passeport doit contenir :size chiffres .',
            'confirmer_numero_passeport.required' => 'Veuillez confirmer votre numéro de passeport .',
            'confirmer_numero_passeport.same' => 'Votre numéro de passeport ne correspond pas .',
            'date_expiration_passeport.required' => "Veuillez saisir la date d'expération de votre passeport  .",
            'date_expiration_passeport.after_or_equal' => "Votre passeport à une date expérée, veuillez vérifier SVP! ",
        ]);

        //ajouter les informations du client
        $insert = Client::where('num_client', $num_client)->update(['nationalite_client' => request('nationalite'), 'num_passeport_client' => request('numero_passeport'), 'date_expiration_passeport' => request('date_expiration_passeport'), 'statut' => true]);

        if($insert){
            
            
            $billet = session()->get('billet');
            $listeDesClients = [];
           
            foreach ($billet as $num_client) {
                $client = Client::where([
                    ['num_client', '=', $num_client->num_client],

                ])->get();
                array_push($listeDesClients, $client[0]);

            }
            session()->put('listeDesClients', $listeDesClients);
            
            return redirect()->action('CheckController@retour');

            }else{
            $error = "veuillez vérifier vos informations !!";
            return back()->with('error', $error);
        }

    }


}