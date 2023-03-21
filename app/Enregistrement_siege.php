<?php


namespace App;
use App\Siege;
use Illuminate\Database\Eloquent\Model;

class Enregistrement_siege extends Model
{
    //
public static  function retourner_siegeOccLibr ()
{
//   $siege_occuper=App\Siege:: 

$enregist=Enregistrement_siege::first()->get('num_siege');


$sieges_occ=Siege::where('id','=',$enregist) ;
// $siege_libre=[];
return $sieges_occ;



}




}
