<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class BilletController extends Controller
{
    public function index(){
       
            return view('billet');
    }
}
