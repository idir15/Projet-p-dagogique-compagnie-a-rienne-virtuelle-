@extends('layout')

@section('title')
    acceuil
@endsection



@section('content')
    <form method="GET" action="/recherche">
    @csrf
        <style>
         .aeroports{
             display: none;
         }
        </style>
    <div>
      Aeroport de depart <input id="inputAller" name="aeroport_depart" value="{{old('aeroport_depart')}}">
                @error('aeroport_depart')
                 <p style="color:red">
                {{$message}}
                </p>
                @enderror
      Aeroport d'arrivé <input id="inputRetour" name="aeroport_arrive" value="{{old('aeroport_arrive')}}">
                
                @error('aeroport_arrive')
                 <p style="color:red">
                {{$message}}
                </p>
                @enderror

                
    </div>

    <div>
      Type de vole :<br>
        Aller simple<input type="radio" name="type_vol" value="simple" checked> 
        Aller retour<input type="radio" name="type_vol"  value="retour">
    </div>


    <div>
        Date de depart   <input type="date" name="date_depart" value="{{old('date_depart')}}">   
                @error('date_depart')
                 <p style="color:red">
                {{$message}}
                </p>
                @enderror
        Date de retour   <input type="date" name="date_retour" value="{{old('date_retour')}}">
                @error('date_retour')
                <p style="color:red">
                {{$message}}
                </p>
                @enderror   
    </div>

    <div>
        <label>Passagers:
            <fieldset>
                
            Nombre d'adultes: <input type="number" name="nb_adultes" value="1" class="petit">
                                    @error('nb_adultes')
                                        <p style="color:red">
                                        {{$message}}
                                        </p>
                                    @enderror   
            
            Nombre d'enfants: <input type="number" name="nb_enfants" value="0" class="petit">
                                    @error('nb_enfants')
                                        <p style="color:red">
                                            {{$message}}
                                        </p>
                                    @enderror 
            Nombre de bébés: <input type="number" name="nb_bebes" value="0" class="petit">
                                    @error('nb_bebes')
                                        <p style="color:red">
                                            {{$message}}
                                        </p>
                                    @enderror 
                                    
            <div >
                @if (isset($error))
                    <label>
                            <p style="color:red">
                                {{$error}}
                            </p>
                    </label>
                @endif
            </div> 
            </fieldset>
        </label>
    </div>
    <div>
        Classe: <br>
            Economique<input type="radio" name="class" value="Economique" checked> 
            Affaires<input type="radio" name="class" value="Affaires" > 
            Première<input type="radio" name="class" value="Première" > 

    </div>

    <input type="submit" value="Recherche">


</form>

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
                  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
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
        //["Annaba, Aéroport d'Annaba - Rabah-Bitat, AAE", "Abidjan, Aéroport international Félix-Houphouët-Boigny, ABJ", "Alger, Aéroport d’Alger-Houari-Boumédiène, ALG", "Amman, Aéroport international Queen Alia مطار المل…علياء الدولي Matar Al-Malikah Alia Ad-Dowali, AMM", "Amsterdam, Aéroport d'Amsterdam-Schiphol, AMS", "Athènes, Aéroport international d'Athènes Elefthérios-Venizélos, ATH", "Abou Dabi, Aéroport international d'Abou Dabi مطار أبو ظبي الدولي, AUH", "Barcelon, Aéroport Josep Tarradellas Barcelone-El Prat, BCN", "Beyrouth, Aéroport international de Beyrouth - Rafic Hariri, BEY", "Béjaïa, Aéroport de Béjaïa - Soummam - Abane Ramdane, BJA", "Bangkok , Aéroport de Bangkok-Suvarnabhumi, BKK", "Bamako, Aéroport international Modibo Keïta, BKO", "Bordeaux, Aéroport de Bordeaux-Mérignac, BOD", "Bruxelles, Aéroport de Bruxelles-National, BRU", "Biskra, Aéroport de Biskra - Mohamed Khider, BSK", "Budapest, Aéroport international de Budapest-Ferenc Liszt, BUD", "Paris, Aéroport de Paris-Beauvais-Tillé , BVA", "Paris, Aéroport de Paris-Charles-de-Gaulle, CDG", "Casablanca, Aéroport Mohammed-V de Casablanca, CMN", "Copenhague, Aéroport de Copenhague, CPH", "Constantine, Aéroport de Constantine - Mohamed Boudiaf, CZL", "Delhi, Aéroport international Indira-Gandhi, DEL", "Djanet, Aéroport de Djanet - Tiska, DJG", "Moscou, Aéroport de Moscou-Domodédovo, DME", "Doha, Aéroport international Hamad, DOH", "Diass, Aéroport international Blaise-Diagne, DSS", "El Bayadh, Aéroport d'El Bayadh, EBH", "El Oued, Aéroport d'El Oued - Guemar, ELU", "Rome, Aéroport Léonard-de-Vinci, FCO", "Francfort, Aéroport de Francfort-sur-le-Main, FRA", "Jijel, Aéroport de Jijel - Ferhat Abbas, GJL", "Genève, Aéroport international de Genève, GVA", "Hanoï, Aéroport international de Nội Bài, HAN", "Hassi Messaoud, Aéroport d'Hassi Messaoud - Oued Irara - Krim Belkacem, HME", "Tokyo, Aéroport international Haneda de Tokyo, HND", "Séoul, Aéroport international d'Incheon, ICN", "Istanbul, Aéroport Atatürk d'Istanbul, ISL", "New York, Aéroport international John-F.-Kennedy de New York, JFK", "Johannesbourg, Aéroport international OR Tambo, JNB", "Khartoum, Aéroport international de Khartoum, KRT", "Kuala Lumpur, Aéroport international de Kuala Lumpur, KUL", "Londres, Aéroport de Londres Heathrow, LHR", "Lisbonne, Aéroport Humberto Delgado de Lisbonne, LIS", "Lyon, Aéroport de Lyon-Saint-Exupéry , LYS", "Madrid, Aéroport Adolfo Suárez Madrid-Barajas, MAD", "Manchester, Aéroport de Manchester, MAN", "Marseille, Aéroport de Marseille Provence, MRS", "Milan, Aéroport de Milan Malpensa, MXP", "Nairobi , Aéroport international Jomo-Kenyatta, NBO", "Nice, Aéroport de Nice-Côte d'Azur, NCE", "Nouakchott, Aéroport international de Nouakchott-Oumtounsy, NKC", "Oran, Aéroport d'Oran - Ahmed Ben Bella, ORN", "Paris, Aéroport de Paris-Orly , ORY", "Ouagadougou, Aéroport international de Ouagadougou, OUA", "Pékin, Aéroport international de Pékin-Capitale, PEK", "Sétif, Aéroport de Sétif - 8 Mai 1945, QSF", "San Francisco, Aéroport international de San Francisco, SFO", "Singapour, Aéroport de Singapour-Changi, SIN", "Berlin, Aéroport de Berlin-Schönefeld, SXF", "Tlemcen, Aéroport de Tlemcen - Zenata - Messali El Hadj, TLM", "Toulouse, Aéroport de Toulouse-Blagnac, TLS", "Tamanrasset, Aéroport de Tamanrasset - Aguenar - Hadj Bey Akhamok, TMR", "Tunisie, Aéroport international de Tunis-Carthage, TUN", "Venise, Aéroport de Venise-Marco-Polo, VCE", "Vienne, Aéroport de Vienne-Schwechat, VIE", "Illizi, Aéroport d'Illizi - Takhamalt, VVZ", "Montréal, Aéroport international Montréal-Mirabel, YMX"];
        
        </script>

@endsection