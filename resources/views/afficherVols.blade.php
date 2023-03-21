@extends('layout')

@section('title')
    résultats de recherche
@endsection

@section('content')

<style>

</style>
{{--dd((new \Carbon\Carbon('2020-01-07 20:00:00'))->addHours(35)->format('Y-m-d H:i'))--}}
<div class="payement_msg__container">
    <div class="payment_msg__content">
        <div class="payment_msg__text">
         
           Tout les vols vers Chine sont annulés à cause du coronavirus            
          
        </div>
        <div class="payment_msg__icon--virus">

        </div>

    </div>


</div>
<form action="/informations" method="GET" id="form_choix_vol">

@csrf

@if(count($resultat_recherche_aller)>0)
<div class="resultats-vols">

    <h1>Vols Aller :</h1>
<div class="resultats-vols__titre">Sélectionnez votre vol</div>
        @foreach ($resultat_recherche_aller as $vol )
        
        @if(now('Africa/ALgiers')->diffInMinutes($vol->getCarbonDepart(),false) >=180)
{{--
    <div class="vol">
        <div>
            {{(new Carbon\Carbon($vol->heure_depart))->format('H:i')}} {{$vol->code_aeroport_depart}} --> 
            {{(new Carbon\Carbon($vol->heure_arriver))->format('H:i')}} {{$vol->code_aeroport_arriver}}
            
            <div>
                {{$vol->date_depart}}
            </div>
        </div>
        
        <div>
            <h2>{{$vol->prix_vol * $remise}}</h2>
        </div>     
        <input type="radio" name="vol_aller" id="" value="{{$vol->id}}">
        
    </div>
--}}

<div class="resultats-vols__vol">

    <div class="resultats-vols__droite">
       <div class="resultats-vols__droite_date">{{(new Carbon\Carbon($vol->date_depart))->format('d/m/Y')}}</div>
       <div class="resultats-vols__temps">
           <div class="resultats-vols__depart">{{(new Carbon\Carbon($vol->heure_depart))->format('H:i')}} {{$vol->code_aeroport_depart}} </div>
           <div class="resultats-vols__separation"></div>
           <div class="resultats-vols__arrive">{{(new Carbon\Carbon($vol->heure_arriver))->format('H:i')}} {{$vol->code_aeroport_arriver}} </div>
       </div>

      <!-- <div class="resultats-vols__companie"> Fennec Airlines -pas d'escale </div> -->

       <div class="resultats-vols__informations">
               Renseignements sur le vol
       </div>

       
   </div>

   <div class="resultats-vols__gauche">
  <!-- <div class="resultat-vols__plus-bas">Tarif plus bas</div> -->
       <div class="resultats-vols__ticket-prix  resultats-vols__ticket-aller">
          
           <div class="resultats-vols__classe">
               {{$classe}}
           </div>

           <div class="resultats-vols__prix">
            {{$vol->prix_vol * $remise}} DA
            <input type="radio" name="vol_aller" class="radio_vol_aller" value="{{$vol->id}}" hidden>
           </div>
       </div>
   </div>
  

</div>
@endif

        @endforeach
</div>
    
    @if ($_GET['type_vol']=='retour')
    <div class="resultats-vols">

        <h1>Vols Retour :</h1>
        @if (session('propose'))
        <div style="display:flex; justify-content:center">
            <h3>Aucun Vol n'a été trouvé pour cette date <br><br>
                Vols proposés :
            </h3>
        </div>
        @endif
    <div class="resultats-vols__titre">Sélectionnez votre vol</div>
        @foreach ($resultat_recherche_retour as $vol )
        <div class="resultats-vols__vol">

            <div class="resultats-vols__droite">
                <div class="resultats-vols__droite_date">{{(new Carbon\Carbon($vol->date_depart))->format('d/m/Y')}}</div>

               <div class="resultats-vols__temps">
                   <div class="resultats-vols__depart">{{(new Carbon\Carbon($vol->heure_depart))->format('H:i')}} {{$vol->code_aeroport_depart}} </div>
                   <div class="resultats-vols__separation"></div>
                   <div class="resultats-vols__arrive">{{(new Carbon\Carbon($vol->heure_arriver))->format('H:i')}} {{$vol->code_aeroport_arriver}} </div>
               </div>
    
              <!-- <div class="resultats-vols__companie"> Fennec Airlines -pas d'escale </div> -->
    
               <div class="resultats-vols__informations">
                       Renseignements sur le vol
               </div>
    
               
           </div>
    
           <div class="resultats-vols__gauche">
          <!-- <div class="resultat-vols__plus-bas">Tarif plus bas</div> -->
               <div class="resultats-vols__ticket-prix resultats-vols__ticket-retour">
                  
                   <div class="resultats-vols__classe">
                      {{$classe}}  
                   </div>
    
                   <div class="resultats-vols__prix">
                    {{$vol->prix_vol * $remise}} DA
                    <input type="radio" class="radio_vol_retour" name="vol_retour" id="" value="{{$vol->id}}" hidden>
                   </div>
               </div>
           </div>
          
    
        </div>

       
          @endforeach
          </div>
    @endif
   <div class="resultat_vols__bouttons">
    <div class="information_reservation__confirmer">
        <a style="font-size:20px;" href="/"><input type="button" value="Modifier la recherche" class="information_reservation__btn_confirmer"></a>
        <input id="" type="submit" value="Continuer" class="information_reservation__btn_confirmer" id="btn_choix_vol">
    </div>
   
@else
    <h1>Désolé, aucun vol pour cette date vers cette destination.<br>
    Veuillez les changer </h1>
        <a href="/">Retour</a> 
@endif
   </div>




{{--
<div class="resultats-vols">

     
    @if (count($resultat_recherche_aller)>0)     
         
    <div class="resultats-vols__titre">Sélectionnez votre vol</div>

    @foreach ($resultat_recherche_aller as $vol )

    <div class="resultats-vols__vol">

        <div class="resultats-vols__droite">

           <div class="resultats-vols__temps">
               <div class="resultats-vols__depart">{{(new Carbon\Carbon($vol->heure_depart))->format('H:i')}} {{$vol->code_aeroport_depart}} </div>
               <div class="resultats-vols__separation"></div>
               <div class="resultats-vols__arrive">{{(new Carbon\Carbon($vol->heure_arriver))->format('H:i')}} {{$vol->code_aeroport_arriver}} </div>
           </div>

          <!-- <div class="resultats-vols__companie"> Fennec Airlines -pas d'escale </div> -->

           <div class="resultats-vols__informations">
                   Renseignements sur le vol
           </div>

           
       </div>

       <div class="resultats-vols__gauche">
      <!-- <div class="resultat-vols__plus-bas">Tarif plus bas</div> -->
           <div class="resultats-vols__ticket-prix">
              
               <div class="resultats-vols__classe">
                   Economique
               </div>

               <div class="resultats-vols__prix">
                {{$vol->prix_vol * $remise}} DA
                <input type="radio" name="vol_aller" id="" value="{{$vol->id}}">
               </div>
           </div>
       </div>
      

    </div>             
@endforeach
@endif

</div>
--}}

</form>
@foreach ($resultat_recherche_aller as $vol )


<div class="renseignement_vol__container">
       
    <div class="renseignement_vol__content">
     <div class="renseignement_vol__titre">Détails de vol</div>
     <div class="renseignement_vol__details">
        <div><span style="font-weight:bold">Ville de depart: </span>{{$vol->ville_depart}}</div>
        <div><span style="font-weight:bold">Ville d'arrivé: </span>{{$vol->ville_arriver}}</div>
       <br>
        <div><span style="font-weight:bold">Aeroprt de depart: </span>{{$vol->nom_aeroport_depart}} {{$vol->code_aeroport_depart}}</div>
        <div><span style="font-weight:bold">Aeroport d'arrivé: </span>{{$vol->nom_aeroport_arriver}} {{$vol->code_aeroport_arriver}}</div>
      <br>
        <div><span style="font-weight:bold">Heure de depart: </span>{{(new Carbon\Carbon($vol->heure_depart))->format('H:i')}}</div>
        <div><span style="font-weight:bold">Heure d'arrivé: </span>{{(new Carbon\Carbon($vol->heure_arriver))->format('H:i')}}</div>

        <div><span style="font-weight:bold">date de depart: </span>{{$vol->date_depart}}</div>
        <div><span style="font-weight:bold">date d'arrivé: </span>{{$vol->date_arriver}}</div>
            {{--dd($timeZone[$vol->ville_arriver])--}}
            <br>
            <div><span style="font-weight:bold">date de depart local: </span>{{ $vol->shiftDateDepart($timeZone[$vol->ville_arriver]) }}</div>
        <div><span style="font-weight:bold">Heure de depart local: </span>{{ $vol->shiftHeureDepart($timeZone[$vol->ville_arriver]) }}</div>
        <br>
        <div><span style="font-weight:bold">date d'arrivé local: </span>{{ $vol->shiftDateArriver($timeZone[$vol->ville_arriver]) }}</div>
        <div><span style="font-weight:bold">Heure d'arrivé local: </span>{{ $vol->shiftHeureArriver($timeZone[$vol->ville_arriver]) }}</div>

     <br>
     <div><span style="font-weight:bold">Type d'avion: </span>{{$vol->avion()->first()->nom_avion}}</div>
     <div><span style="font-weight:bold">Duré vol : </span>{{$vol->duree_vol}}</div>
     </div>
     <div class="renseignement_vol__btns">
              <input type="button"  value="OK" class="renseignement_vol__btn">
     </div>
</div>
</div> 
@endforeach
@if ($_GET['type_vol']=='retour')
@foreach ($resultat_recherche_retour as $vol )

<div class="renseignement_vol__container">
    <div class="renseignement_vol__content">
     <div class="renseignement_vol__titre">Détails de vol</div>
     <div class="renseignement_vol__details">
        <div><span style="font-weight:bold">Ville de depart: </span>{{$vol->ville_depart}}</div>
        <div><span style="font-weight:bold">Ville d'arrivé: </span>{{$vol->ville_arriver}}</div>
       <br>
        <div><span style="font-weight:bold">Aeroprt de depart: </span>{{$vol->nom_aeroport_depart}}</div>
        <div><span style="font-weight:bold">Aeroport d'arrivé: </span>{{$vol->nom_aeroport_arriver}}</div>
      <br>
      
      <div><span style="font-weight:bold">date de depart: </span>{{$vol->date_depart}}</div>
      <div><span style="font-weight:bold">date d'arrivé: </span>{{$vol->date_arriver}}</div>
        <div><span style="font-weight:bold">Heure de depart: </span>{{(new Carbon\Carbon($vol->heure_depart))->format('H:i')}}</div>
        <div><span style="font-weight:bold">Heure d'arrivé: </span>{{(new Carbon\Carbon($vol->heure_arriver))->format('H:i')}}</div>
        <div><span style="font-weight:bold">Heure de depart local: </span>{{(new Carbon\Carbon($vol->heure_depart))->format('H:i')}}</div>
        <div><span style="font-weight:bold">Heure d'arrivé local: </span>{{(new Carbon\Carbon($vol->heure_arriver))->format('H:i')}}</div>
        <br>
        <div><span style="font-weight:bold">date de depart local: </span>{{ $vol->shiftDateDepart($timeZone[$vol->ville_arriver]) }}</div>

        <div><span style="font-weight:bold">date d'arrivé local: </span>{{ $vol->shiftDateArriver($timeZone[$vol->ville_arriver]) }}</div>
     <br>
        <div><span style="font-weight:bold">Type d'avion: </span>{{$vol->avion()->first()->nom_avion}}</div>
        <div><span style="font-weight:bold">Duré vol : </span>{{$vol->duree_vol}}</div>
        
     </div>
     <div class="renseignement_vol__btns">
              <input type="button"  value="OK" class="renseignement_vol__btn">
     </div>
</div>
</div> 
@endforeach
@endif

<div class="listvol_errer__conatiner">
    <div class="listvol_errer__content">
        <div class="listvol_errer__text">
            Veuillez selectioner un vol
        </div>
        <div class="listvol_errer__btns">
            <input type="button" id="listvol_errer__btn" value="OK">
         </div>


    </div>
</div>

<script>
    

    
    //choix vol
var input_ticket_aller= document.querySelectorAll('.resultats-vols__ticket-aller');
var radio_ticket_aller= document.querySelectorAll('.radio_vol_aller');
input_ticket_aller.forEach(function(value,i) {
       value.addEventListener("click",function(){
        radio_ticket_aller[i].checked=true;
        for(var j=0;j<input_ticket_aller.length; j++){
            
            input_ticket_aller[j].classList.remove('resultats-vols__ticket-prix--selected');
        }
        value.classList.add('resultats-vols__ticket-prix--selected');
       });

    });

    var input_ticket_retour= document.querySelectorAll('.resultats-vols__ticket-retour');
    var radio_ticket_retour= document.querySelectorAll('.radio_vol_retour');
    input_ticket_retour.forEach(function(value,i) {
       value.addEventListener("click",function(){
        radio_ticket_retour[i].checked=true;
        for(var j=0;j<input_ticket_retour.length; j++){
            
            input_ticket_retour[j].classList.remove('resultats-vols__ticket-prix--selected');
        }
        value.classList.add('resultats-vols__ticket-prix--selected');
       });

    });

    //renseignement
lien_info_vol=document.querySelectorAll('.resultats-vols__informations');
renseignement_vol=document.querySelectorAll('.renseignement_vol__container');
renseignement_vol__btn=document.querySelectorAll('.renseignement_vol__btn');

lien_info_vol.forEach(function(value,i) {
  
  value.addEventListener("click",function(){
    renseignement_vol[i].classList.add('renseignement_vol__container--show');
    form_choix_vol.classList.add('form_choix_vol--blur');

  });

});
renseignement_vol__btn.forEach(function(value,i) {
  
  value.addEventListener("click",function(){
    renseignement_vol[i].classList.remove('renseignement_vol__container--show');
    form_choix_vol.classList.remove('form_choix_vol--blur');

  });

});



        var aller_select=false;
        var retour_select=false;
var nbvolsaller=radio_ticket_aller.length;
var nbvolsretour=radio_ticket_retour.length;

var form_choix_vol=document.querySelector('#form_choix_vol');
    form_choix_vol.addEventListener("submit",function(){
        
         aller_select=false;
         if(nbvolsretour==0)retour_select=true;
         else
         retour_select=false;

        
         for(var i=0;i<nbvolsaller;i++){
            if(radio_ticket_aller[i].checked==true)
            aller_select=true;
        }
        for(var i=0;i<nbvolsretour;i++){
            if(radio_ticket_retour[i].checked==true)
            retour_select=true;
        }
       if(aller_select&&retour_select)
        event.returnValue= true;
        else{
                    event.returnValue= false;
                    afficherErreurVol();
        }
     });

     var  choix_vol_err=document.querySelector('.listvol_errer__conatiner');

     function afficherErreurVol(){
        choix_vol_err.classList.add('listvol_errer__conatiner--show');
        form_choix_vol.classList.add('form_choix_vol--blur');
     }
     var choix_vol_err_btn=document.querySelector('#listvol_errer__btn'); 
     if(choix_vol_err_btn!=null){
        choix_vol_err_btn.addEventListener("click",function(){
            choix_vol_err.classList.remove('listvol_errer__conatiner--show');
            form_choix_vol.classList.remove('form_choix_vol--blur');

        });
     }
</script>



@endsection

