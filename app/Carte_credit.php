<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carte_credit extends Model
{
    //relation  avec paiement 

    public function paiements()
{
   return $this->hasMany('App\Paiement','num_carte_credit','id');


}

}
