<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
   public $timestamps = false;
   
  public static function trouverVols($date)
  {
    return self::where('date_depart', $date)->first();
  }

  public function prixPlus()
  {
      return $this->prix_vol+1000000;
  }

  public static function plusOuMoins($date, $plus, $moins)
  {
    $maDate = new Carbon($date);
    $dateMoins = $maDate->subDays($moins)->translatedFormat('Y-m-d');
    $datePlus = $maDate->addDays($plus)->translatedFormat('Y-m-d');
    return self::where('date_depart', '>', $dateMoins)->orWhere('date_depart', '<', $datePlus)->get();
  }


//relation avec ville avec num_ville_depart

  public function ville()
  {
      return  $this->belongsTo('App\Ville','num_ville_depart');
     
  } 
  //relation avec ville avec num_ville_arriver
      
  public function ville1()
  {
      return  $this->belongsTo('App\Ville','num_ville_arriver');
     
  } 
  
  

  /**
   * Permet de récuperer les reservation d'un vol
   *
   * @return void
   */
  public function reservations()
    {
       return $this->belongsToMany('App\Reservation','reservation_vols','num_reservation','id_vol');


    }

   //relation avec enregistremnt 1-n
    public function enregistrements()
    {
       return $this->hasMany('App\Enregistrement','id_vol','id');


    }
    //relation avec avion 
    public function avion()
    {
        return  $this->belongsTo('App\Avion','id_avion','id');
    }
    //relation avec aeroport avec escale 
    public function aeroports1()
    {
       return $this->belongsToMany('App\Aeroport','escales','id_vol','code_aeroport_depart');
  
    }

    public function aeroports2()
    {
       return $this->belongsToMany('App\Aeroport','escales','id_vol','code_aeroport_arriver');
  
    }
// relation avec terminal

public function terminal1()
    {
       return $this->belongsTo('App\Terminal','num_terminal_depart');
  
    }
    public function terminal2()
    {
       return $this->belongsTo('App\Terminal','num_terminal_arriver');
  
    }


//relation avec personnel

public function personnels()
{
   return $this->belongsToMany('App\Personnel','personnel_vols','id_vol','id_personnel');


}
//relation avec aeroport
public function aeroport()
{
    return  $this->belongsTo('App\Aeroport','code_aeroport_depart');


}
public function aeroport1()
{
    return  $this->belongsTo('App\Aeroport','code_aeroport_arriver');


}
//
public static function recuperer_vol1($idvol)
{ 

$vol=Vol::where('id','=',$idvol->id)->get()->first();

return $vol;

}
public static  function retournerVol($num_vol)
{
 $enrg=Vol::where('id','=',$num_vol)->enregistrements()->get();
return $enrg;

}

public function realPrice($num_classe)
{ 
  
   $classe = Classe::find($num_classe);

   return $this->prix_vol * $classe->remise_classe;

}

/**
 * Retourne le prix d'un vols selon le nombres de personnes reservante et leur classe
 *
 * @param integer $num_classe
 * @param integer $nb_adulte
 * @param integer $nb_enfants
 * @param integer $nb_bebe
 * @return integer
 */
public function getPrix( $num_classe,  $nb_adulte = 1,  $nb_enfants = 0,  $nb_bebe = 0)
{ 
   $classe = Classe::find($num_classe);
   $prix_de_base = $this->prix_vol * $classe->remise_classe;
   $prix_par_adulte = $prix_de_base * Categorie::where('nom_categorie', '=', 'adulte')->first()->remise_categorie;
   $prix_par_enfants = $prix_de_base * Categorie::where('nom_categorie', '=', 'enfant')->first()->remise_categorie;
   $prix_par_bebe = $prix_de_base * Categorie::where('nom_categorie', '=', 'bebe')->first()->remise_categorie;
   $somme = $nb_adulte * $prix_par_adulte + $nb_enfants * $prix_par_enfants + $nb_bebe * $prix_par_bebe;

   return $somme;
}

/**
 * retourne l'heur de départ sous le format Y-m-d H:i:s
 *
 * @return void
 */
public function getDateHeurDepart(){
   return $this->date_depart." ".$this->heure_depart;
}
public function getDateHeurArriver(){
   return $this->date_arriver." ".$this->heure_arriver;
}

public function shiftDateDepart( $hours = 0){
   return (new Carbon( $this->date_depart." ".$this->heure_depart ))->addHours($hours - 1)->format('Y-m-d');
}

public function shiftDateArriver( $hours = 0){
   return (new Carbon( $this->date_arriver." ".$this->heure_arriver ))->addHours($hours - 1)->format('Y-m-d');
}

public function shiftHeureDepart( $hours = 0){
   return (new Carbon( $this->heure_depart ))->addHours($hours - 1)->format('H:i');
}

public function shiftHeureArriver( $hours = 0){
   return (new Carbon( $this->heure_arriver ))->addHours($hours - 1)->format('H:i');
}

public function isBefore($other){
   $thisDate = $this->getDateHeurDepart();
   $otherDate = $other->getDateHeurDepart();


}


public function getCarbonDepart(){
   return (new Carbon($this->getDateHeurDepart()));
}

public function getCarbonArriver(){
   return (new Carbon($this->getDateHeurArriver()));
}

public function getDureVol(){
   return $this->getCarbonDepart()->diffInHours($this->getCarbonArriver());
}

}