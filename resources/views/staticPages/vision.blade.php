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
     
<div class="information__container">
  <div class="information__top__photo background__vision">

      <img src="images/avion2.png" class="information__photo_cam">
      <div class="separation">

          <img src="icons/wave5.svg" alt="" >
      </div>
  </div>
  <div class="information__background">
  </div>
  <div class="information__content">
  

              <div class="information__text">
                  <div class="information__titre">
                      Nos Valeurs et Visions
                  </div>
                  <div class="information__desc"> </div>
                  Nous croyons en des tarifs abordables pour tous, comme en témoignent notre vision et nos valeurs. Pour réaliser cette vision, nous proposons des vols
                  de qualité à un tarif avantageux, basés sur l'excellence opérationnelle et un service utile et convivial. 
                  La manière dont nous menons nos activités chez Fennec Airlines est guidée par nos valeurs et priorités:
                  
                  

              </div>
            

            



      
  </div>     
  <div class="information__content">
     



    <div class="information__cartes">
        
        <a  class="information__carte">
            <div class="carte__photo carte__photo--obj"></div>
            <div class="carte__content carte__content--valeur">
                <div class="carte__titre">Objectifs</div>
                <div class="carte__texte">
                    
                  <ul>
                    <li>Fournir des vols vers le maximum de destinations.</li>
                    <li>Fournir les meilleurs services clients.</li>
                    <li>Réduire l'empreinte carbone.</li>
                    

                  </ul>  
                </div>
                
            </div>
           

        </a>
        <a class="information__carte ">
            <div class="carte__photo carte__photo--val"></div>
            <div class="carte__content carte__content--valeur">
                <div class="carte__titre">Valeurs
                </div>
                <div class="carte__texte">
                  <ul>
                    <li>Simplicité.</li>
                    <li>Bienveillance.</li>
                    <li>Bien être du client.</li>
                    <li>Protection de l'environnement.</li>
                    
                    

                  </ul>
                </div>
            </div>
           

        </a>

       
        <a  class="information__carte">
            <div class="carte__photo carte__photo--prio"></div>
            <div class="carte__content carte__content--valeur">
                <div class="carte__titre">Priorités</div>
                <div class="carte__texte">
                  <ul>
                    <li>Sécurité.</li>
                    <li>Confort.</li>
                    <li>Satisfaire les clients.</li>
                    <li>Des prix abordables pour tous.</li>
                    
                  </ul>
                    

                </div>
            </div>
           

        </a>






    </div>

<br><br>

<br><br><br> 
</div>  
</div>   

<script src="js/stat.js">       
</script>

@endsection