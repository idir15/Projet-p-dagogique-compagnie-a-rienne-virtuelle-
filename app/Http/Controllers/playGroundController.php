<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class playGroundController extends Controller
{
    public function index(){
       //dd( App::getLocale() ); 
       return view('languageTest');
    }

    public function lang(){
        App::setLocale( request('lang') );
        return view('languageTest');
       
    }
}
