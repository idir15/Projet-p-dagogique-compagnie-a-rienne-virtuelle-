<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //declaration de la cle primaire 
    protected $primaryKey = 'num_categorie';
     /**relation avec client */
    public function clients()
    {
       return $this->hasMany('App\Client','num_categorie','num_categorie');


    }













}
