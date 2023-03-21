<?php

namespace App\Http\Controllers;

use App\Vol;
use App\Aeroport;
use App\Classe;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function index(){

        $aeroports = Aeroport::all();
        return view('pagePrincipale',[
            "aeroports" => $aeroports,
        ]);
    }

    public function show(){
        
        request()->validate([
            // valider les déstinations
            'aeroport_depart'=>'required',
            'aeroport_arrive'=>'required',
            'type_vol'=>'required',

            // valider les dates
           'date_depart'=>'required|date|after_or_equal:today',
        //    on a pas le type du vol pour l'instant donc autre sol
           'date_retour'=>'required_if:type_vol,retour|nullable|after_or_equal:date_depart', 


           //valider les passagers
           'nb_adultes'=>'required|numeric|min:1|max:5',
           'nb_enfants'=>'required|numeric|min:0|max:5',
           'nb_bebes'=>'required|numeric|min:0|max:5'
          
        ]);
 

        $code_aeroport_depart = substr(request('aeroport_depart'),-3);
        $code_aeroport_arrive = substr(request('aeroport_arrive'),-3);

        //dd(request('aeroport_depart'),$code_aeroport_depart);
        //dd($code_aeroport_depart);

        session()->put('nb_adultes',request('nb_adultes'));
        session()->put('nb_bebes',request('nb_bebes'));
        session()->put('nb_enfants',request('nb_enfants'));
        session()->put('class',request('classe'));
        session()->put('type_vol',request('type_vol'));
        

       
       if ( (request('nb_adultes') != 0  or request('nb_enfants') != 0 
            or request('nb_bebes') != 0)   && (request('nb_adultes') >= request('nb_bebes'))){

            $resultatsAller= Vol::where([
                [ 'date_depart','=',request('date_depart')  ],
                
                [ 'code_aeroport_depart','=', $code_aeroport_depart  ],
                [ 'code_aeroport_arriver','=', $code_aeroport_arrive  ],
                    
            ])->get();

            if(request('type_vol') == 'retour'){
                $resultatsRetour= Vol::where([
                    [ 'date_depart','=',request('date_retour')  ],
                    
                    [ 'code_aeroport_depart','=', $code_aeroport_arrive  ],
                    [ 'code_aeroport_arriver','=', $code_aeroport_depart  ],
                        
                ])->get();

                if ($resultatsRetour->isEmpty()) {
                    $resultatsRetour= Vol::where([
                        [ 'date_depart','>=',request('date_retour')  ],
                        
                        [ 'code_aeroport_depart','=', $code_aeroport_arrive  ],
                        [ 'code_aeroport_arriver','=', $code_aeroport_depart  ],
                            
                    ])->get()->take(5);
                    session()->put('propose', true);
                }
                
            }
               //dd($resultatsAller);

                        $timeZone =[
                            'Paris' => 1 ,
                            'Lyon' => 1 ,
                            'Marseille' => 1 ,
                            'Toulouse' => 1 ,
                            'Nice' => 1 ,
                            'Bordeaux' => 1 ,
                            'Francfort' => 1 ,
                            'Berlin' => 1 ,
                            'Rome' => 1 ,
                            'Milan' => 1 ,
                            'Venise' => 1 ,
                            'Madrid' => 1 ,
                            'Barcelon' => 1 ,
                            'Moscou' => 1 ,
                            'Londres' => 0 ,
                            'Manchester' => 0 ,
                            'Genève' => 1 ,
                            'Athènes' => 2 ,
                            'Istanbul' => 3 ,
                            'Lisbonne' => 0 ,
                            'Amsterdam' => 1 ,
                            'Bruxelles' => 1 ,
                            'Vienne' => 1 ,
                            'Budapest' => 1 ,
                            'Copenhague' => 1 ,
                            'Montréal' => 3 ,
                            'New York' => -6.25 ,
                            'San Francisco' => -8 ,
                            'Amman' => 2 ,
                            'Pékin' => 8 ,
                            'Doha' => 8 ,
                            'Abou Dabi' => 4 ,
                            'Beyrouth' => 2 ,
                            'Tokyo' => 9 ,
                            'Delhi' => 5.5 ,
                            'Singapour' => 8 ,
                            'Kuala Lumpur' => 8 ,
                            'Bangkok' => 7 ,
                            'Séoul' => 9 ,
                            'Hanoï' => 7 ,
                            'Tunisie' => 1 ,
                            'Casablanca' => 1 ,
                            'Bamako' => 0 ,
                            'Johannesbourg' => 2 ,
                            'Diass' => 0 ,
                            'Ouagadougou' => 0 ,
                            'Nairobi ' => 3 ,
                            'Abidjan' => 0 ,
                            'Nouakchott' => 0 ,
                            'Khartoum' => 2 ,
                            'Alger' => 1 ,
                            'Béjaïa' => 1 ,
                            'Djanet' => 1 ,
                            'Illizi' => 1 ,
                            'Tamanrasset' => 1 ,
                            'Jijel' => 1 ,
                            'Annaba' => 1 ,
                            'Constantine' => 1 ,
                            'Tlemcen' => 1 ,
                            'Oran' => 1 ,
                            'Hassi Messaoud' => 1 ,
                            'El Oued' => 1 ,
                            'El Bayadh' => 1 ,
                            'Sétif' => 1 ,
                            'Biskra' => 1 ,
                            ];
                            $carbon = new Carbon();


                            $tabClasse = [];
     foreach(Classe::all() as $classe){
        $tabClasse[strtolower($classe->nom_classe)] =  $classe->remise_classe;
     }

            if(request('type_vol') == 'retour'){
                return view('afficherVols',[
                    'resultat_recherche_aller'=>$resultatsAller,
                    'resultat_recherche_retour'=>$resultatsRetour,
                    'timeZone' => $timeZone,
                    'classe' => request('classe'),
                    'remise' => $tabClasse[strtolower(request('classe'))],
                ]);
            }
            return view('afficherVols',[
                'resultat_recherche_aller'=>$resultatsAller,
                'timeZone' => $timeZone,
                'carbon' => $carbon,
                'classe' => request('classe'),
                'remise' => $tabClasse[strtolower(request('classe'))],
            ]);

        }          
        
        else{
            $error = "veuillez vérifier vos informations concernant les passagers !!
                        NB: Chaque bébé doit être accompagné par un adulte.";    
            return view('index',['error'=>$error]) ;
        }
    } 


    public function form(){
        //dd(request());
        if (request()->has('vol_aller')) {
            session()->put('vol_aller', request('vol_aller'));
        }

        if(request()->has('vol_retour')){
         session()->put( 'vol_retour' , request('vol_retour'));
        }

        //dd(session('vol_retour'), session('vol_aller'));
        return view('info_client');
    }
}