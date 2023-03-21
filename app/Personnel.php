<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    //relation avec vol 
    public function vols()
    {
       return $this->belongsToMany('App\Vol','personnel_vols','id_personnel','id_vol');


    }


}
