
@extends('layout')
@section('content')


        <div class="resultats-vols">

     
             
         
            <div class="resultats-vols__titre">   Sélectionnez votre vol</div>

            @foreach (['1','2','3'] as $item)
            <div class="resultats-vols__vol">

                <div class="resultats-vols__droite">

                   <div class="resultats-vols__temps">
                       <div class="resultats-vols__depart">07:20 LHR</div>
                       <div class="resultats-vols__separation"></div>
                       <div class="resultats-vols__arrive">07:20 LHR</div>
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
                           22,000 DA
                           
                       </div>
                   </div>
               </div>
              

            </div>             
        @endforeach
     
        </div>





@endsection
