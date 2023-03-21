@extends('layout')

@section('title')
    notre vision et nos valeurs
@endsection
@section('cssLink')
<link rel="stylesheet" href="/css/stat.css">
<style>
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
</style>
@endsection
@section('content')
     
<div class="information__top__photo background__flotte">

  <img src="/images/avion2.png" class="information__photo_cam">
  <div class="separation">

      <img src="/icons/wave5.svg" alt="" >
  </div>
</div>
<div class="information__container">


<div class="information__background">


  </div>
  
<div class="information__content">
 

      <div class="information__text">
          <div class="information__titre">
          Flotte
          </div>
          <div class="information__desc">
              La flotte de Fennec Airlines compte environ 180 appareils, dont des Boeing 737-800, des Boeing 737 MAX 8 , des Boeing 787 Dreamliners et des Airbus 320 neo. la flotte de Fennec Airlines fait partie des plus jeunes et des plus écologiques au monde.
              Les nouveaux avions sont avantageux pour le confort et le portefeuille du passager, l'environnement et les coûts de la compagnie.
          </div>


      </div>
      <div class="cartes__titre">
          Caractéristiques de note fllote 
      </div>
      <div class="information__cartes">
          
          <a  class="information__carte">
              <div class="carte__photo économe"></div>
              <div class="carte__content">
                  <div class="carte__titre">Avions économes</div>
                  <div class="carte__texte">
                      
                      La valeur de fennec airlines ne réside pas seulement dans la qualité des ses vols, mais aussi dans sa participation à la protection de l'environnementen en réduisant la quantité de CO2 dégagé, voyager et proteger avec fennec airlines.

                  </div>
                 
              </div>
             

          </a>
          <a  class="information__carte">
              <div class="carte__photo rapide"></div>
              <div class="carte__content">
                  <div class="carte__titre">Moins de temps</div>
                  <div class="carte__texte">
                      avec fennec ailine vous serez sur votre déstination sans se rendre compte du
                      temps passé dans l'avion vu la perfection de ses avions 
                  </div>
                  <div class="carte__plus"></div>
              </div>
             

          </a>
  
         
          <a  class="information__carte">
              <div class="carte__photo lowcost"></div>
              <div class="carte__content">
                  <div class="carte__titre">Low-cost</div>
                  <div class="carte__texte">
                      Les nouveaux avions sont avantageux pour le confort et le portefeuille du passager.

                      

                  </div>
                  <div class="carte__plus"></div>
              </div>
             

          </a>

         

      </div>


</div>

<div class="information__avions_text"> Infomration sur nos avions </div>

<div class="information__element">
  <div class="element__titre" onclick="elementToggle('0')">
      <div class="element__icon element__icon_plane"></div>
      Le 787 Dreamliner

      <div class="element__btn" ></div>
  </div>
  <div class="element__content element__content--hide ">
      <div class="content__texte">
          il s’agit de l’avion le plus évolué sur le plan technologique et respectueux de l’environnement dans le ciel d’aujourd’hui.
          Fennec Airlines possède 35 avions 787 Dreamliner aujourd'hui
          Le 787-8 comporte 291 sièges (32 en cabine Premiere et 259 en cabine Economique
          Poids de démarrage max. : 227 930 kg
          Deux moteurs Rolls-Royce Trent 1000
      </div>
      
  </div>

</div>
<div class="information__element">
  <div class="element__titre" onclick="elementToggle('1')">
      <div class="element__icon element__icon_plane"></div>
      Boeing 737-800

      <div class="element__btn" ></div>
  </div>
  <div class="element__content element__content--hide ">
      <div class="content__texte">
      Cet avion court-courrier offre un bon dégagement aux jambes pour nos passagers, tandis que la plupart des avions sont dotés de l’élégant Boeing Sky Interior, d’une connexion Wi-Fi gratuite et de la télévision en direct.
      Fennec Airlines possède 100 avions Boeing 737-800 aujourd'hui
      Le 787-8 comporte 189 sièges
      Poids de démarrage max. : 208 930 kg
      Deux moteurs CFM 56-7B26
      </div>
      
  </div>

</div>

<div class="information__element">
  <div class="element__titre" onclick="elementToggle('2')">
      <div class="element__icon element__icon_plane"></div>
      Boeing 737-max 8

      <div class="element__btn" ></div>
  </div>
  <div class="element__content element__content--hide ">
      <div class="content__texte">
  Le 737 MAX est doté de la dernière technologie de moteur silencieux permettant de réduire de 40 % le bruit de fond de l’avion.
  Fennec Airlines possède 20 avions Boeing 737-max 8 aujourd'hui
  Le Boeing 737-max 8comporte 189 sièges (32 en cabine Premiere et 259 en cabine Economique
  Poids de démarrage max. : 82 930 kg
  Moteurs CFM International LEAP-1B
      </div>
      
  </div>

</div>
<div class="information__element">
  <div class="element__titre" onclick="elementToggle('3')">
      <div class="element__icon element__icon_plane"></div>
      Airbus 320neo

      <div class="element__btn" ></div>
  </div>
  <div class="element__content element__content--hide ">
      <div class="content__texte">
L'A320 Neo est l'un des derniers avions à intégrer la flotte Fennec Airlines.
Fennec Airlines possède 20 avions Airbus 320neo aujourd'hui
Le Airbus 320neo comporte 149 sièges (32 en cabine Premiere et 259 en cabine Economique
Poids de démarrage max. :79 tonnes
Moteurs CFM Leap-1A
      </div>
      
  </div>

</div>
<br>
<br>
<br>
<br>

</div>

<script src="js/stat.js">       
</script>

@endsection