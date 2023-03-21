<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    /**
     * une fonction qui affiche les avions
     */
    
    public static function afficherAvion(){
    

    $avions = Avion::all();

foreach ($avions as $avion) {
    echo $avion->num_avion;
}
    
}

//relation avec classe avec la table classe_avion 

public function classes()
    {
       return $this->belongsToMany('App\Classe','classe_avions','num_classe','id_avion');


       
    }

//relation avec vol
public function vols()
{
   return $this->hasMany('App\Vol','id_avion','id');


}
//relation avec siege 
public function sieges()
{
    return $this->hasMany('App\Siege','id_avion');


}
public static function  get_nombre_siege($num_classe,$id_avion)
{
  $siege=Avion::find($id_avion)->sieges()->where('num_classe','=',$num_classe)->count();
return $siege;
  





}











}