<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BilletElectronique extends Model
{
    public static function getReference(){
        $alphanum = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $ref = substr(str_shuffle($alphanum), 0, 6);
        while (self::where('reference_billet_electronique', '=', $ref)->exists()) {     
            $ref = substr(str_shuffle($alphanum), 0, 6);
        }
        return $ref;
    }
}
