<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enregistrement extends Model
{
    //
    protected $primaryKey = 'num_enregistrement';

//relation avec le client 
    public function client()
    {
        return  $this->belongsTo('App\Client','num_client');
    
    
    }

//relation avec siege 
    public function siege()
    {
        return $this->hasOne('App\Siege','id');
    }
//relation avec bagage 
    public function bagages()
    {
        return $this->hasOne('App\Bagage','num_bagage');
    }
//relation avec vol
    public function vol()
    {
        return  $this->belongsTo('App\Vol','id_vol','id');
    
    
    }

    //relation avec paiement

    public function paiement()
    {
        return  $this->belongsTo('App\Paiement','num_paiement','id');
    
    
    }
/**
 * fonction qui insert a la table enregistrement
 * 58 bagage controller
 */

 public function inserer_enregistrement($datetime,$num_client,$num_bagage,$idvol)
 {
    $enregistrement=Enregistrement::insert(['date_enregistrement'=>$datetime,'num_client'=>$num_client,'num_bagage' => $num_bagage->num_bagage,'id_vol'=>$idvol->id]);
 }
    
//relation avec siege n-n

public  function sieges()
{
   return $this->belongsToMany('App\Siege','enregistrement_sieges','num_enregistrement','num_siege');


}

public static  function retourner_siegeOcc ($num_avion)
{
  $siege=Enregistrement::first()->sieges()->get();
 
  foreach($siege as $sg)
  {
    $siege_occ=[$sg->num_siege];
    if($num_avion==$sg->id_avion)
    {
        foreach ($siege_occ as $value) 
        {
            echo $value;
        }
        // for ($i=0; $i <1 ; $i++) 
        // { 
            // echo $siege_occ[0];  
        // }
        // 
    }
}
//      echo $sg;
 }

public static  function retourner_siegeLib ($num_avion)
{
    $siege=Enregistrement::first()->sieges()->get();
    foreach($siege as $sg)
    {
      $siege_occ=[$sg->num_siege];
      if($num_avion==$sg->id_avion)
      {
          foreach ($siege_occ as $value) 
          {
              $occuper= [$value];
          }
    //retourner les num de siege des avions donnee 
    $s=Siege::where('id_avion','=',$num_avion)->get('num_siege');
    // $s_numSiege=[$s->num_siege];
    
        foreach ($s as $s_numS) 
        {
            foreach ($occuper as $oc) 
            {
           if ($s_numS !=$oc) 
           {
               echo $s_numS."</br>"; 

           }
        }
    }
 }

}
}
}