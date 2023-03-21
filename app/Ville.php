<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    //declaration de la cle primaire
    protected $primaryKey = 'id_ville';
//relation avc vol avc num_ville_depart
    public function vols()
    {
       return $this->hasMany('App\Vol','num_ville_depart','code_postal_ville');
    }
//relation avec vol avc num_ville_arriver
public function vols1()
    {
       return $this->hasMany('App\Vol','num_ville_arriver','code_postal_ville');
    }
//relation avec aeroport
    public function aeroports()
    {
        return $this->hasMany('App\Aeroport','code_postal_ville','code_postal_ville');
    }






}
