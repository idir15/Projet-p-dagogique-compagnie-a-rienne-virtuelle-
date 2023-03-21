<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bagage extends Model
{
    //declaration de cle primaire num_bagage
    protected $primaryKey ='num_bagage';
    //relation avec enregistrement 

    public function enregistrement()
    {
        return $this->hasOne('App\Enregistrement','num_enregistrement');
    }
    

/**
 * fonction qui insert a la table bagage 
 * 
 */
//     public static function insererBagage($nb_bagage_soute,$num_client)
// {
//         $prix_bagage_soute=200;
//         $bagage= Bagage::insert(['num_client'=>$num_client,
//         'nb_bagage_main'=>1,
//         'nb_bagage_accessoir'=>1
//         ,'nb_bagage_soute' => $nb_bagage_soute
//         ,'prix_bagage_soute'=> $prix_bagage_soute*$nb_bagage_soute]);
//  $bagage->save();
// }
//relation avec client
public function client()
{
    return  $this->belongsTo('App\Client','num_client','num_client');
}
/**
 * fonction qui insert a la table bagage bagage controller 54 
 *
 * @param [type] $num_client
 * @param [type] $nb_bagage_soute
 * @param [type] $prix
 * @return void
 */
public function inserer_bagage($num_client,$nb_bagage_soute,$prix)
{
$bagage= Bagage::insert(['num_client'=>$num_client,
'nb_bagage_main'=>1,
'nb_bagage_accessoir'=>1,
'nb_bagage_soute' => $nb_bagage_soute,
'prix_bagage_soute'=> $prix]);

}
/**
 * afficher les bagages des clients
 *
 * @param [type] $num_client
 * @return void
 */
// public function retourner_bagage($num_client)
// {
// $num_bagage = Bagage::where('num_client','=',$num_client)->get()->first();
// return  $num_bagage;
// }


public static function getBagages($num_client) {
    return Client::find($num_client)->bagages()->get();

}


}













