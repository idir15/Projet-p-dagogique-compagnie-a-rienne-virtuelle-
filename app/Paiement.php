<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model

{
    protected $primaryKey ='id';
    //realtion avec carte credit 


    public function carte_credit()
    {
        return  $this->belongsTo('App\Carte_credit','id');
    
    
    }
    //relation avec enregistrement 

    public function enregistrements()
{
   return $this->hasMany('App\Enregistrement','num_paiement','id');


}




}
