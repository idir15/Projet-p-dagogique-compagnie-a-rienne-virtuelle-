@extends('layout')

@section('title')
    Bagages
@endsection
@section('cssLink')
<link rel="stylesheet" href="/css/stat.css">
@endsection
@section('content')
    <div>
            <div class="information__container">
          <div class="information__top__photo background__bagage">
  
              <img src="images/avion2.png" class="information__photo_cam">
              <div class="separation">
      
                  <img src="icons/wave.svg" alt="">
              </div>
          </div>
          <div class="information__content">
  
                      <div class="information__text">
                          <div class="information__titre">
                              Bagages
  
                          </div>
                          <div class="information__desc">
                              Vous trouverez ici toutes les informations pour bien préparer vos bagages.
  
                          </div>
                           
  
                      </div>
          
  
  
              <div class="information__list">
                  <div class="list__titre">
                      Type de bagages
                  </div>
                  
                  <div class="information__element">
                      <div class="element__titre" onclick="elementToggle('0')">
                          <div class="element__icon element__icon20"></div>
                          Bagages a main
  
                          <div class="element__btn"></div>
                      </div>
                      <div class="element__content element__content--hide ">
                          <div class="content__texte">
                              Le nombre de bagages autorisés en cabine dépend de la classe de votre billet :
  
                              En Classe Économique : 1 bagage à main, 8 kg maximum. En Classe Business et Premiére : 2 bagages à main, 10 kg maximum (pour chaque pièce de bagage).
                              Le bagage ne doit pas dépasser 115 cm,
                              poignées et roulettes comprises.
                              Il doit pouvoir être rangé sous le siège situé devant
                              vous ou dans les compartiments prévus à cet effet.
                              Enfin, tous les passagers peuvent emporter,
                              en plus de leur bagage cabine,
                              1 accessoire personnel (sac à main, ordinateur, appareil photo, etc.)
                          </div>
                          
                      </div>
  
                  </div>
  
                  <div class="information__element">
                      <div class="element__titre" onclick="elementToggle('1')">
                          <div class="element__icon element__icon21"></div>
                          Bagages en soute 
                          <div class="element__btn"></div>
                      </div>
                      <div class="element__content element__content--hide ">
                          <div class="content__texte">
                              Le nombre de bagages que vous pouvez transporter gratuitement en soute
                              épend de votre cabine de voyage et
                              de votre tarif. Les informations sur vos
                              bagages s’affichent lorsque vous choisissez vos vols.<br>
                              <b>Nombre de bagages en soute selon la cabine de voyage</b>
                              <ul>
                               <li>     Classe Économique : 1 bagage de 23 kg maximum </li>  
                               <li>     Classe Affaire : 2 bagages de 23 kg maximum</li>  
                               <li>     Classe Première : 3 bagages de 32 kg maximum chacun.</li>  
                              </ul>
  
                              <b>Dimensions de bagages en soute : </b><br>
                              La somme des trois dimensions (Hauteur + Longueur + largeur)
                              d’un bagage ne doit pas dépasser 158 cm.<br>
                              <b>Poids des bagages inclus gratuitement dans le prix de votre billet</b><br>
                              Le poids maximal autorisé par bagage est de 23 kg en cabine Economique
  ou 32 kg en cabines Affaire et La Première.
  
                          </div>
           
  
                      </div>
  
                  </div>
  
  
  
  
          
              </div>
  
  
              <div class="information__list">
                  <div class="list__titre">
                      Articles interdits en cabine
                  </div>
                  <div class="information__element">
                      <div class="element__titre" onclick="elementToggle('2')">
                          <div class="element__icon element__icon22"></div>
                          Liquides, aérosols et gels 
  
  
                          <div class="element__btn"></div>
                      </div>
                      <div class="element__content element__content--hide">
                          <div class="content__texte">
                              Les L.A.G doivent être transportés dans des récipients d’une capacité
                              maximale de 100 ml et ne sont pas acceptés s’ils sont transportés
                              dans des récipients dépassant les 100 ml même si le récipient
                              n’est que partiellement rempli et comprennent :
                              <ul>
                             <li> Eau et autres boissons</li>
                             <li>  Soupes, sirops, confitures, ragoûts, sauces et pâtes</li>
                             <li>  plats en sauce ou à teneur élevé en liquide</li>
                             <li>  Crèmes, lotions, cosmétiques, parfums</li>
                             <li>  Gels y compris gels coiffant et gels douche</li>
                              </ul>
                          </div>
                          
                      </div>
  
                  </div>
  
                  <div class="information__element">
                      <div class="element__titre" onclick="elementToggle('3')">
                          <div class="element__icon element__icon23"></div>
                          Fusils, armes à feu et armes 
      
                        <div class="element__btn"></div>
                      </div>
                      <div class="element__content element__content--hide">
                          <div class="content__texte">
                              <b> Armes jouets de tous types :</b>
                             <ul>
                                  <li>  Armes à feu factices et d’imitation Armes à feu dissimulées et camouflées</li>
                                  <li>  Briquets en forme d’armes à feu</li>
                                  <li>  Catapultes</li>
                             </ul>
                             <b>Armes/objets pointues et tranchants :</b>
                              <ul> 
                                  <li>  Couteaux, aussi bien réels que de cérémonie, à lames de plus de 6 cm,
                                          faites en métal ou tout autre matériau suffisamment</li>
                                  <li>  fort pour être utilisé comme arme potentielle</li>
                                  <li>  Crampons</li>
                              </ul>
                              
  
                          </div>
           
  
                      </div>
  
                  </div>
  
                  <div class="information__element">
                      <div class="element__titre" onclick="elementToggle('4')">
                          <div class="element__icon element__icon24"></div>
                          Produits chimiques
  
      
                        <div class="element__btn"></div>
                      </div>
                      <div class="element__content element__content--hide">
                          <div class="content__texte">
                             
                             <ul>
                                  <li>  Acides</li>
                                  <li>  Chlore et décolorants</li>
                                  <li>  Vaporisateurs incapacitants,
                                      notamment : gaz poivrés, gaz lacrymogènes et acides…</li>
                             </ul>
                        
                              
  
                          </div>
           
  
                      </div>
  
                  </div>
  
                  <div class="information__element">
                      <div class="element__titre" onclick="elementToggle('5')">
                          <div class="element__icon element__icon25"></div>
                          Articles interdits en soute
  
      
                        <div class="element__btn"></div>
                      </div>
                      <div class="element__content element__content--hide">
                          <div class="content__texte">
                             <b>Les articles suivants ne doivent jamais être transportés dans les soutes à bagage :
  
                          </b>
                             <ul>
                             <li> Capsules détonantes</li>
                              <li>Détonateurs et mèches</li>
                              <li>Engins explosifs</li>
                              <li>Feux d’artifice</li>
                              <li>Fusées éclairantes de n’importe quelle forme</li>
                              <li>Grenades</li>
                              <li>Mines et autres matériels militaires explosifs</li>
                              <li>Huile alimentaire</li>
  
                             </ul>
                        
                              
  
                          </div>
           
  
                      </div>
  
                  </div>
  
                  <div class="information__element">
                      <div class="element__titre" onclick="elementToggle('6')">
                          <div class="element__icon element__icon26"></div>
                          Les exception
  
      
                        <div class="element__btn"></div>
                      </div>
                      <div class="element__content element__content--hide">
                          <div class="content__texte">
                             <b>Des exemptions peuvent être accordées pour le transport en cabine des L.A.G (liquides, aérosols, gels) suivant :
  
                          </b>
                             <ul>
                             <li> Médicaments liquides indispensables pendant le
                              voyage accompagnés de l'ordonnance médicale,
                              ou ceux en vente libre.</li>
                             <li> Médicaments liquides indispensables pendant le
                              Les liquides utilisés pour des raisons médicales :
                              la glace, le sang ou les produits sanguins .</li>
                              <li>Les liquides ordinaires utilisés pour des motifs médicaux.</li>
                              <li> LAG pour des besoins diététiques :
                              Aliments sans lesquels la santé du passager est menacée.</li>
                              <li>  Produits pour bébés : le lait pour nourrisson, l’eau stérilisée,
                              le jus pour bébé, la nourriture pour bébés sous forme de liquide,
                              de gel ou de pâte, les serviettes humides.
                              Aliments spéciaux pour les passagers qui ont une
                              intolérance au lactose ou au gluten.</li>
  
                             </ul>
                        
                              
  
                          </div>
           
  
                      </div>
  
                  </div>
  
  
  
  
          
              </div>
  
          </div>       
      </div>         
  
  
  <script>
      var element__btn=document.querySelectorAll('.element__btn');
      var element__content=document.querySelectorAll('.element__content');
  
      function elementToggle(i){
          if(element__content[i].classList.contains('element__content--hide')){
          element__content[i].classList.remove('element__content--hide');
          element__btn[i].classList.add('element__btn--rotate');
          }
          else{
  
          element__content[i].classList.add('element__content--hide');
          element__btn[i].classList.remove('element__btn--rotate');
          }
      }
  
    
         
          
  </script>
  
  
    </div>
    
    
    <script>
    function afficherMenuMobile(){
        document.querySelector(".navbar__menu_mobile").classList.toggle("navbar__menu_mobile--show");
    }
    
    window.onclick = function(event) {
    
    var openDropdown = document.querySelector(".navbar__menu_mobile");
    if(!(event.target.matches('.navbar__btn')|| event.target.matches('.navbar') ||event.target.matches('.navbar__logo'))){
      openDropdown.classList.remove("navbar__menu_mobile--show");
    }
    }
    </script>
    
@endsection