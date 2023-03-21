<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siege extends Model
{
    //relation avec enregistrement 

    // public function enregistrement()
    // {
    //     return $this->hasOne('App\Enregistrement','num_enregistrement');
    // }

//relation avec avion 
public function avion()
{
    return  $this->belongsTo('App\Avion','id_avion','id');
}
//relation avec enregisrement n-n
public function enregistrements()
{
   return $this->belongsToMany('App\Enregistrement','enregistrement_sieges','num_siege','num_enregistrement');


}







}
