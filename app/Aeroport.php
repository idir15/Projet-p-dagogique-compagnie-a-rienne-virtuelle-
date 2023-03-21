<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeroport extends Model
{
    protected $primaryKey = 'code_aeroport';
    public $incrementing = false;
    protected $keyType = 'string';

//relation avec vol  many to many 'escaleeee'
public function vols3()
{
    return $this->belongsToMany('App\Vol','escales','code_aeroport_depart','id_vol');
  
} 
//relation avec vol many to many 'escal '
public function vols4()
{
    return $this->belongsToMany('App\Vol','escales','code_aeroport_arriver','id_vol');
  
}


//relation avec terminal

public function terminals()
{
   return $this->hasMany('App\Terminal','code_aeroport','code_aeroport');


}
//relation avec vol avec code_aeroport_depart
public function vols()
{
   return $this->hasMany('App\Vol','code_aeroport_depart','code_aeroport');


}

//relation avec vol avec code_aeroport_arriver

public function vols1()
{
   return $this->hasMany('App\Vol','code_aeroport_arriver','code_aeroport');


}

//relation avec villes
public function villes()
{
   return $this->belongsTo('App\Ville','id_ville','id_ville');


}

}  
