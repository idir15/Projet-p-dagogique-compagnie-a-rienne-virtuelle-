@extends('layout')

@section('title')
    Acceuil
@endsection

@section('content')

    <style>
     .hidden{
         display: none;
     }
    </style>
  
<form method="GET" action="/recherche" id="form_recherche">

    @csrf

    <div class="container-contenu flou">
                 <div class="top-container">
           
                <img src="/images/essai3.png" class="image_gap" />
               
             
                <div class="separation">
    
                    <img src="/icons/wave.svg" alt="">
                </div>
            </div>
    
         
    
    
      <!--Debut bar rech-->
            <div class="container-recherche">

   

        


                    <div class="bar-recherche">
                    <div class="bar-recherche__titre">Recherche de vols
                    </div>

                    <div class="bar-recherche__content">
            <div class="bar-recherche__destination">

                <div class="bar-recherche__aler">
                 <input class="bordure bar-recherche__aeroport" type="text" placeholder="Aeroport de depart" name="aeroport_depart" id="aeroport_depart" autocomplete="off" value="{{old('aeroport_depart')}}">
                    <div class="bar-recherche__suggession bordure">
          
                    </div>
                 <div class="bar-recherche__airplane"><img src="/icons/plane-up.svg"></div>
                 @error('aeroport_depart')
                 <div class="aeroport__erruer">
                {{$message}}
                 </div>
                @enderror
               
                </div>
                 

                <div class="bar-recherche__retour">
                <input class="bordure bar-recherche__aeroport" type="text" placeholder="Aeroport d'arrive" name="aeroport_arrive" id= "aeroport_arrive" autocomplete="off">
                
                <div class="bar-recherche__airplane"><img src="/icons/plane-down.svg"></div>
                @error('aeroport_arrive')
                <div class="aeroport__erruer">
               {{$message}}
                </div>
               @enderror

        
            </div>
                

            </div>

          
            <div class="bar-recherche__dates">
    
                <div class="bar-recherche__date bordure" onclick="open_calandar('aller')">
                    <div class="bar-recherche__date-contenue">Aller</div>
                    <div class="bar-recherche__date-contenue bar-recherche__milieu" id="jour"></div>
                    <div class="bar-recherche__date-contenue" id="mois"></div>
    
                </div>
    
    
    
                <div class="bar-recherche__date bordure" id="calendrierRetour">
                        <div class="bar-recherche__date-contenue">Retour</div>
                        <div class="bar-recherche__date-contenue bar-recherche__milieu bar-recherche__milieu--plus" id="jour_r" onclick="open_calandar('retour')">+</div>
                        <div class="bar-recherche__date-contenue" id="mois_r"></div>
                        <div class="bar-recherche__anuuler-retour" onclick="annuler_retour()">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="8" viewBox="0 0 16 16">
                                    <path fill="#000000" d="M15.854 12.854c-0-0-0-0-0-0l-4.854-4.854 4.854-4.854c0-0 0-0 0-0 0.052-0.052 0.090-0.113 0.114-0.178 0.066-0.178 0.028-0.386-0.114-0.529l-2.293-2.293c-0.143-0.143-0.351-0.181-0.529-0.114-0.065 0.024-0.126 0.062-0.178 0.114 0 0-0 0-0 0l-4.854 4.854-4.854-4.854c-0-0-0-0-0-0-0.052-0.052-0.113-0.090-0.178-0.114-0.178-0.066-0.386-0.029-0.529 0.114l-2.293 2.293c-0.143 0.143-0.181 0.351-0.114 0.529 0.024 0.065 0.062 0.126 0.114 0.178 0 0 0 0 0 0l4.854 4.854-4.854 4.854c-0 0-0 0-0 0-0.052 0.052-0.090 0.113-0.114 0.178-0.066 0.178-0.029 0.386 0.114 0.529l2.293 2.293c0.143 0.143 0.351 0.181 0.529 0.114 0.065-0.024 0.126-0.062 0.178-0.114 0-0 0-0 0-0l4.854-4.854 4.854 4.854c0 0 0 0 0 0 0.052 0.052 0.113 0.090 0.178 0.114 0.178 0.066 0.386 0.029 0.529-0.114l2.293-2.293c0.143-0.143 0.181-0.351 0.114-0.529-0.024-0.065-0.062-0.126-0.114-0.178z"></path>
                                    </svg>
                        </div>
                </div>
                
    
                
                
                @error('date_depart')
                <div class="date__erruer">
               {{$message}}
                </div>
               @enderror

               @error('date_retour')
               <div class="date__erruer">
              {{$message}}
            </div>
              @enderror

            </div>
    
            <div class="bar-recherche__places" onclick="open_passager()">
                <div class="bar-recherche__titre-passager">Passagers </div>
                <div class="bar-recherche__affiche_passager">1 Adulte</div>
                <div class="bar-recherche__plus"><img src="/icons/plus.svg"></div>
             

                @error('nb_adultes')
                <div class="places__erruer">
                    {{$message}}
                </div>
               @enderror 
            </div>
    
    
    
    
            <div class="bar-recherche__recherche">
                <div class="bar-recherche_classe bordure" onclick="open_class()">
                    <div class="bar-recherche__icon">
                        
                        <img src="/icons/user.svg">
                    </div>
                    <div class="bar-recherche__separator"></div>
                    <p>Classe <b class="classe_affiche">Economique</b></p>
                    <div class="classe_affiche__btn-down">
                        <img src="/icons/circle-down.svg">
                    </div>
                    
                </div>
                
                <input type="submit" class="bar-recherche__button-recherche bordure" value="Recherche" >
            <div class="bar-recherche__list-choix-de-classe bordure"> 
                    <div class="bar-recherche__choix-classe">Economique</div>
                    <div class="bar-recherche__choix-classe">Affaire</div>
                    <div class="bar-recherche__choix-classe">Premiere</div>
                </div>
    
            </div> 
    
            
    
            
    
    
    
    
            </div>      
            
    
            </div>
            </div>
     <!--Fin bar rech-->

      <!--Debut div masqué-->
    <input name="date_depart" id="date_depart" type="date" hidden >
    <input name="date_retour" id="date_retour" type="date" hidden>
    <input type="radio" name="type_vol" value="simple" checked id="type_vol_aller" hidden> 
    <input type="radio" name="type_vol"  value="retour" id="type_vol_retour" hidden>
    <input id="classe" name="classe" value="Economique" hidden>
    <input id="nb_adultes"  name="nb_adultes" hidden value="1">
    <input id="nb_enfants"  name="nb_enfants" hidden value="0">
    <input id="nb_bebes"  name="nb_bebes" hidden value="0">
     
  




    <!--Fin div masqué-->


    






</form>

<form method="GET" action="/recherche" style="" id="hiddenForm">
    <input type="hidden" name="_token" value="CnijECIp1gjGdViPLLEK0nHv9XLaBaOo4vM2LedT">    <div>
      Aeroport de depart <input id="inputAller" name="aeroport_depart" value="">
                      Aeroport d'arrivé <input id="inputRetour" name="aeroport_arrive" value="">
                
                
                
    </div>

    <div>
      Type de vole :<br>
        Aller simple<input type="radio" name="type_vol" value="simple" checked="" id="type_vol_aller"> 
        Aller retour<input type="radio" name="type_vol" value="retour" id="type_vol_retour">
    </div>


    <div>
        Date de depart   <input type="date" name="date_depart" value="">   
                        Date de retour   <input type="date" name="date_retour" value="">
                   
    </div>

    <div>
        <label>Passagers:
            <fieldset>
                
            Nombre d'adultes: <input type="number" name="nb_adultes" value="1" class="petit">
                                       
            
            Nombre d'enfants: <input type="number" name="nb_enfants" value="0" class="petit">
                                     
            Nombre de bébés: <input type="number" name="nb_bebes" value="0" class="petit">
                                     
                                    
            <div>
                            </div> 
            </fieldset>
        </label>
    </div>
    <div>
        Classe: <br>
            Economique<input type="radio" name="class" value="Economique" checked=""> 
            Affaires<input type="radio" name="class" value="Affaires"> 
            Première<input type="radio" name="class" value="Première"> 

    </div>

    <input type="submit" value="Recherche">


</form>

<div class="container__text__dest">
    <div class="text__dest__txt1"> Nos meilleures offres </div>
    <div class="text__dest__txt2"> Nos offres spéciales vers nos plus belles déstinations  </div>
    
    </div>

    <div class="container_destinations">

        <div class="destinations__ligne1">
          <div class="ligne1__column1" onmouseover="show__offre('1')" onmouseout="hide__offre('1')"> 
              <div class="destination__info">
                  
                     <div class="destination__ville">Paris</div>
                     <div class="destination__texte">Classe economique dés</div>
     
                     <div class="info__ligne3">
                         <div class="destination__prix">19 100 DA</div>
                         <a onclick="rechecheVol('Paris, Aéroport de Paris-Charles-de-Gaulle, CDG','2020-03-01')"><div class="destination__btn">Réserver</div></a>
                     </div>
                 
     
              </div>
     
          </div>
     
          <div class="ligne1__column2">
              <div class="column2__ligne1"  onmouseover="show__offre('2')" onmouseout="hide__offre('2')" >
                 <div class="destination__info">
                     <div class="destination__ville">Londres</div>
                     <div class="destination__texte">Classe economique dés</div>
     
                     <div class="info__ligne3">
                         <div class="destination__prix">19 500 DA</div>
                         <a onclick="rechecheVol('Londres, Aéroport de Londres Heathrow, LHR','2020-03-01')"><div class="destination__btn">Réserver</div></a>
                     </div>
                 </div>
              </div>
              <div class="column2__ligne2"  onmouseover="show__offre('3')" onmouseout="hide__offre('3')">
                 <div class="destination__info" >
                     <div class="destination__ville">Rome</div>
                     <div class="destination__texte">Classe economique dés</div>
     
                     <div class="info__ligne3">
                         <div class="destination__prix">24 500 DA</div>
                         <a onclick="rechecheVol('Rome, Aéroport Léonard-de-Vinci, FCO','2020-03-01')"><div class="destination__btn">Réserver</div></a>
                     </div>
                 </div>
             </div>
         </div>
     
         <div class="ligne1__column3">
             <div class="column3__ligne1"  onmouseover="show__offre('4')" onmouseout="hide__offre('4')">
                 <div class="destination__info">
                     <div class="destination__ville">New York</div>
                     <div class="destination__texte">Classe economique dés</div>
     
                     <div class="info__ligne3">
                         <div class="destination__prix">76 500 DA</div>
                         <a onclick="rechecheVol('New York, Aéroport international John-F.-Kennedy de New York, JFK','2020-03-19')"><div class="destination__btn">Réserver</div></a>
                     </div>
                 </div>
             </div>
             <div class="column3__ligne2"  onmouseover="show__offre('5')" onmouseout="hide__offre('5')">
                 <div class="destination__info">
                     <div class="destination__ville">Barcelone</div>
                     <div class="destination__texte">Classe economique dés</div>
     
                     <div class="info__ligne3">
                         <div class="destination__prix">19 000 DA</div>
                         <a onclick="rechecheVol('Barcelon, Aéroport Josep Tarradellas Barcelone-El Prat, BCN','2020-03-19')"><div class="destination__btn">Réserver</div></a>
                     </div>
                 </div>
            </div>
              
         </div>
     
        </div>
        <div class="destinations__ligne2" >
     
           <div class="ligne2__column1"  onmouseover="show__offre('6')" onmouseout="hide__offre('6')">
             <div class="destination__info">
                 <div class="destination__ville">Moscou</div>
                     <div class="destination__texte">Classe economique dés</div>
     
                     <div class="info__ligne3">
                         <div class="destination__prix">26 300 DA</div>
                         <a onclick="rechecheVol('Moscou, Aéroport de Moscou-Domodédovo, DME','2020-03-19')"><div class="destination__btn">Réserver</div></a>
                     </div>
             </div>
           </div>
     
           <div class="ligne2__column2"  onmouseover="show__offre('7')" onmouseout="hide__offre('7')">
             <div class="destination__info">
                 <div class="destination__ville">Berlin</div>
                     <div class="destination__texte">Classe economique dés</div>
     
                     <div class="info__ligne3">
                         <div class="destination__prix">33 000 DA</div>
                         <a onclick="rechecheVol('Berlin, Aéroport de Berlin-Schönefeld, SXF','2020-03-19')"><div class="destination__btn">Réserver</div></a>
                     </div>
             </div>
           </div>
     
           <div class="ligne2__column3"  onmouseover="show__offre('8')" onmouseout="hide__offre('8')">
             <div class="destination__info">
                 <div class="destination__ville">Venise</div>
                     <div class="destination__texte">Classe economique dés</div>
     
                     <div class="info__ligne3">
                         <div class="destination__prix">21 000 DA</div>
                         <a onclick="rechecheVol('Venise, Aéroport de Venise-Marco-Polo, VCE','2020-03-19')"><div class="destination__btn">Réserver</div></a>
                     </div>
             </div>
           </div>
         
       </div>
     
    
     </div>
        



            
     
     <div class="container-info">
        <div class="separation separation--2">
    
            <img src="/icons/wave2.svg" alt="">
        </div>   
    
        <div class="groupe-info">
    
            <div class="groupe-info__info">
                <div class="groupe-info__titre"> Qui somme nous ?</div>
                    <div class="groupe-info__texte">
                        Fennec Airlines est une compagnie jeune, fraîchement créée, qui est en service du voyageur et de la planète.
Faire de votre voyage une aventure agréable, sécurisée à l'abri de tout tracas, est notre priorité.
Au delàs du bien être du passager, nous avons le soucis de l'environnement.
<a href="/notre-vision-et-nos-valeurs" class="groupe-info__lien">Venez nous découvrir </a>

                        
                    </div>
            </div>
    
   
                
        </div>
       
    </div>
    

    
<div class="home_photos__container">
    <div class="home_photos__content">

        <div class="home_photos__element">
        <img src="/images/pub4.png">
        </div>

        <div class="home_photos__element">
            <img src="/images/pub3.png">
         </div>

         <div class="home_photos__element">
            <img src="/images/pub2.png">
         </div>
    </div>

    <div class="separation separation--3">
    
        <img src="/icons/wave.svg" alt="">
    </div>  
</div>
    


<!--div-- style="height: 200px;"></!--div-->
</div>


<!--Debut menu passager-->
<div class="container_passager">
    <div class="ajouter_passager">
    <div class="header_passager">
    <div class="header_passager_text">
        Choissisez le nombre de passagers :
    </div>
    </div>

    <div class="passagers_details">
            <div class="adultes">
                <div class="informations"> 
                <div class="number_of adlts">1</div>
                <div class="aa">
                <div class="adultes_adulte">Adulte(s)</div>
                <div class="passager_limite_age">plus de 16 ans</div>
                </div>
                </div>
                <div class="operations">
                <div class="plus_moins plus_moins--moins"onclick="decrement('adultes')" ></div>
                <div class="plus_moins plus_moins--plus" onclick=" increment('adultes')" ></div>
                </div>
            </div>



            <div class="adultes">
                <div class="informations"> 
                    <div class="number_of enfs">0</div>
                <div class="aa">
                <div class="enfants_enfant"> Enfant(s)</div>
                <div class="passager_limite_age"> 2-16 ans</div>
                </div>
                </div>
                <div class="operations">
                <div class="plus_moins  plus_moins--moins"onclick="decrement('enfants')" ></div>
                <div class="plus_moins plus_moins--plus" onclick=" increment('enfants')" ></div>
                </div>

            </div>

            <div class="adultes">
                <div class="informations"> 
                    <div class="number_of bbs">0</div>
                <div class="aa">
                <div class="bebes_bebe">Bébé(s)</div>
                <div class="passager_limite_age"> moins de 2 ans</div>
                </div>
                </div>
                <div class="operations">
                <div class="plus_moins plus_moins--moins"onclick="decrement('bebes')" ></div>
                <div class="plus_moins plus_moins--plus" onclick=" increment('bebes')" ></div>
                </div>

            </div>
    </div>
    <div class="valider_passager" onclick="close_passager()">   
    <div>Valider</div>
    </div>


    </div>

</div>

<!--Fin menu passager-->


<!--Debut callendrier-->
<div class="calendar_container">    
        <div class="elegant-calencar">
        <p id="reset">Aujordhui</p>
        <div id="header" class="clearfix">
           <div class="pre-button"><</div>
            <div class="head-info">
                <div class="head-day"></div>
                <div class="head-month"></div>
            </div>
            <div class="next-button">></div>
        </div>
        <div class="table-container">
            <table id="calendar">
                <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="container_valider">
           <div  class="valider"  onclick="close_calander()">Valider </div>
        </div>
        </div>
        </div>
        
        
        
</div>

<!--Fin callendrier-->


<!-- debut alert-->
<div class="container_alert">
    <div class="content_alert">
        <div class="alert__titre">
            Information
        </div>
        <div class="alert__text">
            Ce site est réalisé dans le cadre d'un projet pédagogique à l'université de Mouloud Mammeri de Tizi Ouzou. Veuillez ne pas utiliser ce site pour vos vols réels. Veuillez ne pas mettre vos informations personelles sur ce site.        </div>
        <div class="alert__button">
            <input  type="button" id="alert_ok" value="OK">
        </div>            
    </div>
</div>
<!-- fin alert-->

<script>
// self executing function here

</script>

        <style>
         .aeroports{
             display: none;
         }
         .autocomplete {
  position: relative;
  display: inline-block;
}
         
.autocomplete-items {
  
  position: absolute;
  
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}
.autocomplete-items div:hover {
  background-color: #e9e9e9;
}
.autocomplete-active {
  background-color: DodgerBlue !important;
  color: #ffffff;
}
        </style>


 

@foreach ($aeroports as $aeroport)
            <p class="aeroports">{{ $aeroport->villes()->first()->nom_ville.", ".$aeroport->nom_aeroport.", ".$aeroport->code_aeroport }}</p>
        @endforeach


        <script>
        function autocomplete(inp, arr) {
          /*the autocomplete function takes two arguments,
          the text field element and an array of possible autocompleted values:*/
          var currentFocus;
          /*execute a function when someone writes in the text field:*/
          inp.addEventListener("input", function(e) {
              var a, b, i, val = this.value;
              /*close any already open lists of autocompleted values*/
              closeAllLists();
              if (!val) { return false;}
              currentFocus = -1;
              /*create a DIV element that will contain the items (values):*/
              a = document.createElement("DIV");
              a.setAttribute("id", this.id + "autocomplete-list");
              a.setAttribute("class", "autocomplete-items");
              /*append the DIV element as a child of the autocomplete container:*/
              this.parentNode.appendChild(a);
              /*for each item in the array...*/
              for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                  /*create a DIV element for each matching element:*/
                  b = document.createElement("DIV");
                  /*make the matching letters bold:*/
                  b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                  b.innerHTML += arr[i].substr(val.length);
                  /*insert a input field that will hold the current array item's value:*/
                  b.innerHTML += "<input type='hidden'class='aeroport_suggestion_element' value='" + arr[i] + "' >";
                  /*execute a function when someone clicks on the item value (DIV element):*/
                  b.addEventListener("click", function(e) {
                      /*insert the value for the autocomplete text field:*/
                      inp.value = this.getElementsByTagName("input")[0].value;
                      /*close the list of autocompleted values,
                      (or any other open lists of autocompleted values:*/
                      closeAllLists();
                  });
                  a.appendChild(b);
                }
              }
          });
          /*execute a function presses a key on the keyboard:*/
          inp.addEventListener("keydown", function(e) {
              var x = document.getElementById(this.id + "autocomplete-list");
              if (x) x = x.getElementsByTagName("div");
              if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
              } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
              } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                  /*and simulate a click on the "active" item:*/
                  if (x) x[currentFocus].click();
                }
              }
          });
          function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
          }
          function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
              x[i].classList.remove("autocomplete-active");
            }
          }
          function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
              if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
              }
            }
          }
          /*execute a function when someone clicks in the document:*/
          document.addEventListener("click", function (e) {
              closeAllLists(e.target);
          });
        }
        
        /*An array containing all the country names in the world:*/
        var aeroports = [];
        document.querySelectorAll('.aeroports').forEach((aeroport)=>{
            aeroports.push( aeroport.innerText );
        });


        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
        autocomplete(document.querySelector("#inputAller"), aeroports);
        autocomplete(document.querySelector("#inputRetour"), aeroports);
        autocomplete(document.querySelector("#aeroport_depart"), aeroports);
        autocomplete(document.querySelector("#aeroport_arrive"), aeroports);
        //["Annaba, Aéroport d'Annaba - Rabah-Bitat, AAE", "Abidjan, Aéroport international Félix-Houphouët-Boigny, ABJ", "Alger, Aéroport d’Alger-Houari-Boumédiène, ALG", "Amman, Aéroport international Queen Alia مطار المل…علياء الدولي Matar Al-Malikah Alia Ad-Dowali, AMM", "Amsterdam, Aéroport d'Amsterdam-Schiphol, AMS", "Athènes, Aéroport international d'Athènes Elefthérios-Venizélos, ATH", "Abou Dabi, Aéroport international d'Abou Dabi مطار أبو ظبي الدولي, AUH", "Barcelon, Aéroport Josep Tarradellas Barcelone-El Prat, BCN", "Beyrouth, Aéroport international de Beyrouth - Rafic Hariri, BEY", "Béjaïa, Aéroport de Béjaïa - Soummam - Abane Ramdane, BJA", "Bangkok , Aéroport de Bangkok-Suvarnabhumi, BKK", "Bamako, Aéroport international Modibo Keïta, BKO", "Bordeaux, Aéroport de Bordeaux-Mérignac, BOD", "Bruxelles, Aéroport de Bruxelles-National, BRU", "Biskra, Aéroport de Biskra - Mohamed Khider, BSK", "Budapest, Aéroport international de Budapest-Ferenc Liszt, BUD", "Paris, Aéroport de Paris-Beauvais-Tillé , BVA", "Paris, Aéroport de Paris-Charles-de-Gaulle, CDG", "Casablanca, Aéroport Mohammed-V de Casablanca, CMN", "Copenhague, Aéroport de Copenhague, CPH", "Constantine, Aéroport de Constantine - Mohamed Boudiaf, CZL", "Delhi, Aéroport international Indira-Gandhi, DEL", "Djanet, Aéroport de Djanet - Tiska, DJG", "Moscou, Aéroport de Moscou-Domodédovo, DME", "Doha, Aéroport international Hamad, DOH", "Diass, Aéroport international Blaise-Diagne, DSS", "El Bayadh, Aéroport d'El Bayadh, EBH", "El Oued, Aéroport d'El Oued - Guemar, ELU", "Rome, Aéroport Léonard-de-Vinci, FCO", "Francfort, Aéroport de Francfort-sur-le-Main, FRA", "Jijel, Aéroport de Jijel - Ferhat Abbas, GJL", "Genève, Aéroport international de Genève, GVA", "Hanoï, Aéroport international de Nội Bài, HAN", "Hassi Messaoud, Aéroport d'Hassi Messaoud - Oued Irara - Krim Belkacem, HME", "Tokyo, Aéroport international Haneda de Tokyo, HND", "Séoul, Aéroport international d'Incheon, ICN", "Istanbul, Aéroport Atatürk d'Istanbul, ISL", "New York, Aéroport international John-F.-Kennedy de New York, JFK", "Johannesbourg, Aéroport international OR Tambo, JNB", "Khartoum, Aéroport international de Khartoum, KRT", "Kuala Lumpur, Aéroport international de Kuala Lumpur, KUL", "Londres, Aéroport de Londres Heathrow, LHR", "Lisbonne, Aéroport Humberto Delgado de Lisbonne, LIS", "Lyon, Aéroport de Lyon-Saint-Exupéry , LYS", "Madrid, Aéroport Adolfo Suárez Madrid-Barajas, MAD", "Manchester, Aéroport de Manchester, MAN", "Marseille, Aéroport de Marseille Provence, MRS", "Milan, Aéroport de Milan Malpensa, MXP", "Nairobi , Aéroport international Jomo-Kenyatta, NBO", "Nice, Aéroport de Nice-Côte d'Azur, NCE", "Nouakchott, Aéroport international de Nouakchott-Oumtounsy, NKC", "Oran, Aéroport d'Oran - Ahmed Ben Bella, ORN", "Paris, Aéroport de Paris-Orly , ORY", "Ouagadougou, Aéroport international de Ouagadougou, OUA", "Pékin, Aéroport international de Pékin-Capitale, PEK", "Sétif, Aéroport de Sétif - 8 Mai 1945, QSF", "San Francisco, Aéroport international de San Francisco, SFO", "Singapour, Aéroport de Singapour-Changi, SIN", "Berlin, Aéroport de Berlin-Schönefeld, SXF", "Tlemcen, Aéroport de Tlemcen - Zenata - Messali El Hadj, TLM", "Toulouse, Aéroport de Toulouse-Blagnac, TLS", "Tamanrasset, Aéroport de Tamanrasset - Aguenar - Hadj Bey Akhamok, TMR", "Tunisie, Aéroport international de Tunis-Carthage, TUN", "Venise, Aéroport de Venise-Marco-Polo, VCE", "Vienne, Aéroport de Vienne-Schwechat, VIE", "Illizi, Aéroport d'Illizi - Takhamalt, VVZ", "Montréal, Aéroport international Montréal-Mirabel, YMX"];
        
        
         submitRecherche = document.querySelector('#submitRecherche');
         formulaireRecherche = document.querySelector('#hiddenForm');

       /**  submitRecherche.addEventListener('click',(e)=>{
                e.preventDefault();
                document.querySelector('#inputAller').value = document.querySelector('#aeroport_depart').value
                document.querySelector('#inputRetour').value = document.querySelector('#aeroport_arrive').value;
                document.querySelector('#date_depart').value = document.querySelector('#dateAller').value;
                document.querySelector('#date_retour').value = document.querySelector('#dateRetour').value;
                console.log(document.querySelector('#date_retour').value, typeof(document.querySelector('#date_retour').value));
              
                
        });**/

        var recherche_aeroport_depart=document.querySelector('#aeroport_depart');
        var recherche_aeroport_arrive=document.querySelector('#aeroport_arrive');

        
        recherche_aeroport_depart.addEventListener("focusout",function(){
    var first_suggestion=document.querySelector('.aeroport_suggestion_element');
    recherche_aeroport_depart.value=first_suggestion.value;

    });
    recherche_aeroport_arrive.addEventListener("focusout",function(){
    var first_suggestion=document.querySelector('.aeroport_suggestion_element');
    recherche_aeroport_arrive.value=first_suggestion.value;

    });

    recherche_aeroport_depart.addEventListener("focusin",function(){
    recherche_aeroport_depart.value="";

    });
    recherche_aeroport_arrive.addEventListener("focusin",function(){
    recherche_aeroport_arrive.value="";

    });

    function rechecheVol(dest, date){
        var form_recherche=document.querySelector('#form_recherche');
        var input_date=document.querySelector('#date_depart');
        var depart='Alger, Aéroport d’Alger-Houari-Boumédiène, ALG';
        recherche_aeroport_depart.value=depart;
        recherche_aeroport_arrive.value=dest;
        
        input_date.value=date;
        form_recherche.submit();







    }
        </script>

<script src="/js/bar-rech.js"></script>
<script src="/js/calander.js"></script>
<script src="/js/meilleure_destination.js"></script>
@endsection
