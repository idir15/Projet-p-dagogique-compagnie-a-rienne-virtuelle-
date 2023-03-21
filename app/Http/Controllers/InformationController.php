<?php

namespace App\Http\Controllers;

class InformationController extends Controller
{
    public function show_article()
    {
        return view('enregistrement.article_interdit');

    }
    public function show_option_suplémentaire()
    {

        return view('enregistrement.option_suplémentaire', [
            'client' => session('resultat'),
        ]);

    }
    public function save()
    {
        return view('enregistrement.save', [
            'client' => session('resultat'),
            
        ]);
    }
    
       



    

}
