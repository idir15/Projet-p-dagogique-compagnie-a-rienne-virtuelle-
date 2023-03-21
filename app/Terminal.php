<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    //relation avec aeroport 

    public function aeroport()
    {
        return  $this->belongsTo('App\Aeroport','code_aeroport');
    }
//relation avec vol
public function vols1()
{
   return $this->hasMany('App\Vol','id','id');


}
public function vols2()
{
   return $this->hasMany('App\Vol','id','id');

}


}
