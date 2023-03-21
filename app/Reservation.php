<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //declaration de la cle primaire 
    protected $primaryKey = 'num_reservation';

//         //tester si la reference existe dejaaaa//
//    //  }
    public static  function insert_res($prix_reservation,$type_reservation, $nombre_place_reserver, $num_classe)
    {
      $alphanum = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
      $bobop = substr(str_shuffle($alphanum), 0, 6);
      $ref_res = $bobop . 'FA';
      
      while (Reservation::where('reference_reservation', '=', $ref_res)->exists()) {     
          $bobop = substr(str_shuffle($alphanum), 0, 6);
          $ref_res = $bobop . 'FA';
      }
      //ici pour remplir la table reservation
      //   $reservation = new Reservation();
      //   $ref_res = $reservation->reference_reservation;
      //   while ($ref_res!= $res)
      //    {
            Reservation::insert([
                "reference_reservation"=>$ref_res,
                "date_reservation" => now(),
                "prix_reservation" => $prix_reservation,
                "type_reservation" => $type_reservation,
                // "etat_reservation"=>'1',
                "nombre_place_reserver" => $nombre_place_reserver,
                "num_classe" => $num_classe,
            ]);

            return Reservation::where('reference_reservation' , "=", $ref_res)->get()->first()->num_reservation;
            }
    //relation avec client
    public function clients()
    {
        // return $this->belongsToMany('App\Client');
        return $this->belongsToMany('App\Client', 'reservation_clients', 'num_reservation', 'num_client');

    }

    //relation avec vols 1-n permet de retourne le vol de reservation_vol
    public function vols()
    {
        return $this->belongsToMany('App\Vol', 'reservation_vols', 'num_reservation', 'id_vol');

    }
    //relation avec billet permet de retourner le billet de reservation
    public function billets()
    {
        return $this->hasMany('App\Billet','num_reservation','num_reservation');
    }
    

    public function contact(){
        return $this->hasOne('App\Contact','num_reservation');
    }
// public static function delete()
// {
//    Reservation::delete('reference_reservation','JY3QUAFA');



// }
/**
 * fonction qui va controller est c qui retourne les reservation 
 */
public static function retourne_reservation($reference_reservation)
{
$reservation = Reservation::where([
   ['reference_reservation', '=',$reference_reservation]
   ])->get()->first();
return $reservation;

}
}