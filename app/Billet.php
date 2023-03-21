<?php

namespace App;

use App\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


class Billet extends Model
{
  //declaration de cle primaire 
  protected $primaryKey = 'num_billet';

  //relation avec le client 
  public  function client()
  {
    return  $this->belongsTo('App\Client', 'num_client');
  }
  //reltion avec reservation
  public function reservation()
  {
    return  $this->belongsTo('App\Reservation', 'num_reservation', 'num_reservation');
  }
  /**
   *recuperer les billets qui  ont la mm reference reservation  chek controller 52
   *
   * @param [type] $num_res
   * @return void
   */
  public static function getBillets($num_res)
  {
    return Reservation::find($num_res)->billets()->get();
  }

  ///function insert_billet 
  public static function insert_billet($ref_res, $num_client)
  {


    //generation de numero billet
    $numerique = "0123456789";
    $bobop = substr(str_shuffle($numerique), 0, 6);
    $num_b = '21319' . $bobop;
    while (Self::where('num_billet', '=',$num_b )->exists()) {     
      $bobop = substr(str_shuffle($numerique), 0, 6);
    $num_b = '21319' . $bobop;
    
  }
    //inserer a la table billet avec le num_billet q on generer 
    Billet::insert([
      'num_billet' => $num_b,
      'num_reservation' => $ref_res,
      'num_client' => $num_client,

    ]);
  }

  /**recuperation des billets a partir de num reservation  
   *check controller 52
   */

  // public static function recuperer_billet( $num_res)
  // {
  // //  Billet::where([
  // //   ['num_reservation', '=',  $num_res],
  // Billet::reservation()->found($num_res);

  // // ])->get();

  //  }


























  //chercher les billets qui ont tous le méme num_reservation

  public static function afficherBillet($num_res)
  {

    // $num_res=$reservation->num_reservation; 
    $billets = Billet::where('num_reservation', $num_res)->get();
    return $billets;
  }
}
