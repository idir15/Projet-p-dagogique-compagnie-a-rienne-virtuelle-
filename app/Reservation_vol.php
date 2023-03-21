<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation_vol extends Model
{
    //
public static function recuperer_vol($num_reservation)
{
    $idvol=Reservation_vol::where('num_reservation','=',$num_reservation)->get()->first();
    return $idvol;



}



public static function inserer_reservationVol($num_reservation,$idvol)
{
Reservation_vol::insert(['num_reservation'=>$num_reservation,'id_vol'=>$idvol]);


}
}