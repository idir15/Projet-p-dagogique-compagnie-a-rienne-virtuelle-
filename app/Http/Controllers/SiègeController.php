<?php

namespace App\Http\Controllers;

use App\Avion;
use App\Siege;
use App\Bagage;
use App\Categorie;
use App\Reservation;
use App\Enregistrement;
use App\Reservation_vol;
use App\Enregistrement_siege;

class SiègeController extends Controller
{
    public function afficherSiège()
    {
        
        
        $idVol=session()->get('idVol');
        $listeEnregistre = session()->get('listeEnregistre');
        $billet = session()->get('billet');
        $reservation = session()->get('reservation');
        $vol =session()->get('vol');
        $liste_Enregistrement=session()->get('liste_Enregistrement');
        //recuperer le num de la classe
        $num_classe=$reservation->num_classe;
         
        $id_avion=$vol->id_avion;
         
$avion=Avion::where('id','=',$id_avion)->get()->first();
$siege=Siege::where(['id_avion'=>$id_avion,'num_classe'=>$num_classe])->get();

$capaciteAvion=count($siege);



//récupérer les siège occuper
// $siege=Siege::where(['etat_siege'=>1,'id_avion'=>$id_avion,'num_classe'=>$num_classe])->get();


$enregistrement=Enregistrement::where([
    'id_vol'=>$idVol,
    'statut'=>1,
    
])->get();

$siegeOccupe=[];
if(Enregistrement::where(['id_vol'=>$idVol,'statut'=>1,])->exists()){
foreach($enregistrement as $key){
    
$Enregistrement_siege=Enregistrement_siege::where('num_enregistrement','=',$key->num_enregistrement)->get();

foreach ($Enregistrement_siege as $key){
    
    $siege_occ=Siege::where('id',$key->num_siege)->get()->first();
    
    array_push($siegeOccupe, $siege_occ->num_siege);
   

}

}

}

       
//récupérer les siège libre        
$ToutLesSiege=Siege::where(['id_avion'=>$id_avion,'num_classe'=>$num_classe])->get();

//$ToutIdSiege=[];
$ToutNumSiege=[];
        foreach ($ToutLesSiege as $key){
            //array_push($ToutIdSiege, $key->id);
            array_push($ToutNumSiege, $key->num_siege);

        }
        
        
               
        $siegeLibre= [];

        for($i=0;$i<count($ToutNumSiege);$i++){
            if(in_array($ToutNumSiege[$i],$siegeOccupe) == null){
                array_push($siegeLibre, $ToutNumSiege[$i]);
             }
        }

         
       


        

$affectation=[];

for($i=0;$i<count($listeEnregistre);$i++){
 
    $affectation[$i+1]=$siegeLibre[$i];
    
}


        

//si un bébé ne prend pas de siège 
// $siègeClient=[];
// foreach($listeClient as $key){
//     $num_categorie=$key->num_categorie;
//     $categorie=Categorie::where('num_categorie','=',$num_categorie)->get()->first();
// if($categorie->nom_categorie !='bebe'){
//     array_push($siègeClient, $key);
// }
// }
// session()->put('siègeClient', $siègeClient);






if($num_classe == 2){
    $colones = ['A','B','C','D','E','F'];
    $lignes= $capaciteAvion/count($colones);
   
    return view('/enregistrement.siegeAffaire', ['ToutNumSiege'=>$ToutNumSiege,'listeEnregistre' => $listeEnregistre,'siegeOccupe'=>$siegeOccupe,'colones'=>$colones,'lignes'=>$lignes,'affectation'=>$affectation,'siegeLibre'=>$siegeLibre]);
}
if($num_classe == 3){
    $colones = ['A','B','E','F'];
    $lignes= $capaciteAvion/count($colones);
    return view('/enregistrement.siegePremiere', ['ToutNumSiege'=>$ToutNumSiege,'listeEnregistre' => $listeEnregistre,'siegeOccupe'=>$siegeOccupe,'colones'=>$colones,'lignes'=>$lignes,'affectation'=>$affectation,'siegeLibre'=>$siegeLibre]);
}
if($num_classe == 1){
    $colones = ['A','B','C','D','E','F'];   
    $lignes= $capaciteAvion/count($colones);
    
    return view('/enregistrement.siegeEconomique', ['ToutNumSiege'=>$ToutNumSiege,'listeEnregistre' => $listeEnregistre,'siegeOccupe'=>$siegeOccupe,'colones'=>$colones,'lignes'=>$lignes,'affectation'=>$affectation,'siegeLibre'=>$siegeLibre]);

}

        
        
    }


public function storeSiège(){

    $idVol=session()->get('idVol');
    $listeEnregistre = session()->get('listeEnregistre');
    $billet = session()->get('billet');
    $reservation = session()->get('reservation');
    $vol =session()->get('vol');
    $mesSiege=[];
     for($i=1;$i<=count($listeEnregistre);$i++){
         $numSiege=request("passager_$i");
         
        $siege=Siege::where([
            'num_siege'=>$numSiege,
            'num_classe'=>$reservation->num_classe,
            'id_avion'=>$vol->id_avion,
        ])->get()->first();
        array_push($mesSiege, $siege->id);
     
     }
     session()->put('mesSiege', $mesSiege);
    
    
    $somme=0;
    $listeBagage=[];
    foreach($listeEnregistre as $key){
        $enreg=Enregistrement::where([
            'num_client'=>$key->num_client,
            'id_vol'=>$idVol,
            'statut'=>null,
            
        ])->get()->first();
        
        if($enreg != null){
        $prixBagage=Bagage::where('num_enregistrement','=',$enreg->num_enregistrement)->get()->first();
        
         $prix=$prixBagage->prix_bagage_soute;
        
         $somme=$somme+$prix;
         array_push($listeBagage, $prixBagage[0]);
        }
        
    }
         
        session()->put('listeBagage', $listeBagage); 
        
    if($somme == 0){  
       
        for($i=0;$i<count($listeEnregistre);$i++){
           
            $enregistrement=Enregistrement::where([
                'num_client'=>$listeEnregistre[$i]->num_client,
                'id_vol'=>$idVol,
                'statut'=>null,
            ])->update(['statut'=>1]);
            $enreg=Enregistrement::where([
                'num_client'=>$listeEnregistre[$i]->num_client,
                'id_vol'=>$idVol,
                'statut'=>1,
                
            ])->get()->first();
            
           Enregistrement_siege::insert(['num_enregistrement'=>$enreg->num_enregistrement,'num_siege'=>$mesSiege[$i]]);
              
        }

        
        //dd($listeEnregistre);
        $email = Reservation::find($reservation->num_reservation)->contact()->first()->email_client;
        foreach ($listeEnregistre as $client) {
            app('App\Http\Controllers\MacarteController')->Imprimer($client->num_client, $client->nom_client, $client->prenom_client, $email);
        }
        //dd("works ?");
        return view('enregistrement.carte_embarquement',['listeEnregistre'=>$listeEnregistre,'billet'=>$billet,'reservation'=>$reservation,'vol'=>$vol,'listeBagage'=>$listeBagage]);
    }
   
    return view('enregistrement.paiement',['listeEnregistre'=>$listeEnregistre,'billet'=>$billet,'reservation'=>$reservation,'vol'=>$vol,'somme'=>$somme,'listeBagage'=>$listeBagage]);
    

}


}
