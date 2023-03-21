<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
   //declaration de la cle primaire
    protected $primaryKey = 'num_classe';
//relation avec avion avec une classe d association classe_avion
    public function avions()
    {
       return $this->belongsToMany('App\Avion','classe_avions','num_classe','id_avion');


    }
    //relation avec reservation
    public function reservations()
    {
       return $this->hasMany('App\Reservation','num_classe','num_classe');
    
    
    }
    //relation avec sieges
    public function sieges()
    {
       return $this->hasMany('App\Siege','num_classe','num_classe');
    
    
    }












}
