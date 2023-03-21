<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $primaryKey = 'num_client';

    //relation avec categorie
    public function categorie()
    {
        return $this->belongsTo('App\Categorie', 'num_categorie');

    }
//relaion avec reservation
    public function reservations()
    {
        return $this->belongsToMany('App\Reservation', 'reservation_clients', 'num_reservation', 'num_client');

    }
//relation avec billet 1-n

    public function billets()
    {
        return $this->hasMany('App\Billet', 'num_client', 'num_client');

    }
//relation avec enregistremnt
    public function enregistrements()
    {
        return $this->hasMany('App\Enregistrement','num_client','num_client');

    }
/**
 * Undocumented function enregistrement
 *
 * @param [type] $nom_client
 * @param [type] $prenom_client
 * @param [type] $email_client
 * @param [type] $civilite_client
 * @param [type] $date_naissance_client
 * @param [type] $num_telephone_client
 * @param [type] $num_passeport_client
 * @param [type] $nationalite_client
 * @param [type] $pays_client
 * @param [type] $num_categorie
 * @param [type] $code_postal_client
 * @param [type] $date_expiration_client
 * @param [type] $statut
 * @return void
 */
    public static function insererClient($nom_client, $prenom_client, $email_client, $civilite_client, $date_naissance_client, $num_telephone_client, $num_passeport_client, $nationalite_client, $pays_client, $num_categorie, $code_postal_client, $date_expiration_client, $statut)
    {
//  $client=App\Client;
        $client = Client::insert([
            'nom_client' => $nom_client,
            'prenom_client' => $prenom_client,
            'email_client' => $email_client,
            'civilite_client' => $civilite_client,
            'date_naissance_client' => $date_naissance_client,
            'num_telephone_client' => $num_telephone_client,
            'num_passeport_client' => $num_passeport_client,
            'nationalite_client' => $nationalite_client,
            'pays_client' => $pays_client,
            'num_categorie' => $num_categorie,
            'code_postal_client' => $code_postal_client,
            'date_expiration_passeport' => $date_expiration_client,
            'statut' => $statut,
        ]);
        $client->save();
    }
    /**
     * Une fonctoion retourne client
     *
     *
     */
    public static function retourner_client($nom_client)
    {
        $exist_nom = Client::where([
            ['nom_client', '=', $nom_client],

        ])->get()->first();
        return $exist_nom;

    }
//
//recuperer les clients qui  ont la mm reference reservation
    public static function getClients($num_client)
    {
        return Client::find($num_client)->billets()->get();
    }
    //completer les informations du 
    
    /**
     * mise a jour de la table client 
     *
     * @param [type] $num_client
     * @param [type] $nationalite_client
     * @param [type] $num_passeport_client
     * @param [type] $date_expiration_clien
     * @return void
     */
    public static function modifier_client($num_client, $nationalite_client, $num_passeport_client, $date_expiration_passeport)
    {
        $insert = Client::where('num_client', $num_client)->update(['nationalite_client' => $nationalite_client, 'num_passeport_client' => $num_passeport_client, 'date_expiration_passeport' => $date_expiration_passeport, 'statut' => true]);
        return $insert;
    }

    /**
     * fonction qui insert a la table client reservation 
     * 
     */
    public static function inserer_client($civilite_client,$nom_client,$prenom_client,$num_telephone_client,$date_naissance_client,$num_passeport_client,$code_postal_client,$nationalite_client,$pays_client,$num_categorie,$email_client)
    {
            $client = Client::insert([
                'nom_client' => $nom_client,
                'prenom_client' => $prenom_client,
                'email_client' => $email_client,
                'civilite_client' => $civilite_client,
                'date_naissance_client' => $date_naissance_client,
                'num_telephone_client' => $num_telephone_client,
                'num_passeport_client' => $num_passeport_client,
                'nationalite_client' => $nationalite_client,
                'pays_client' => $pays_client,
                'num_categorie' => $num_categorie,
                'code_postal_client' => $code_postal_client,
                
            ]);
            $client->save();

            }
    //relation avec bagage 
    public  function bagages()
    {
        return $this->hasMany('App\Bagage','num_client','num_client');
    }





}
