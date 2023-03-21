<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation_client extends Model
{
    /**
     * fonction qui insert a la table reservation client
     */

public static function insert_reservation_client($num_client,$num_reservation)
{
Reservation_client::insert([
    'num_client'=> $num_client,
    'num_reservation'=>$num_reservation,
    ]);
}



}
