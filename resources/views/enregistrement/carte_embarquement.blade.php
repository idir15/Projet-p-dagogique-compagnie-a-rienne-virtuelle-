@extends('layout')

@section('titme')
    Information
@endsection

@section('content')
    <div class="entete__cadre">  
        <div class="entete">
            <p>Carte embarquement</P>
                
        </div>
    </div>

    <div class="container_enregistrement">
            <div class="enregistrement_gauche">
              <div class="enregistrmrnt__tete">
                
    
              

                <div class="enregistrement__titre">
                    <p>carte(s) d'embarquement</p>
                </div>
         
                <div class="enregistrement__details">
                    @if(count($listeEnregistre)>1)
                    <p>Téléchargez vos cartes d'embarquement</p>
                    <p>une copie de vos cartes vous a été envoyé par mail</p>
                    @else
                    <p>Téléchargez vos cartes d'embarquement</p>
                    <p>une copie de vos cartes vous a été envoyé par mail</p>
                    @endif
                </div>
                
            </div>
                <div class="enregistrement__tableau">
                    <div class="tableau__titres">
                        <div class="tableau__titre">Passager</div>
                        <div class="tableau__titre">Action</div>
                    </div>
                    
               
                  
  


                   @foreach($listeEnregistre as $key)
                   {{--dd(session('idVol'))--}}
                   

 <div class="tableau__ligne ">
                        <div class="tableau__element" >{{$key->nom_client}} {{$key->prenom_client}}</div>
                        
                        <form action="{{'/enregistrement/carte_embarquement/'.session('idVol')."-".$key->num_client}}"  method="post">
                            @csrf
                            <div class="tableau__element" style="width:unset"> <input type="submit" class="tableau__button" value="télécharger"></div>
                        </form>
                    </div>

               @endforeach
               
                   

                </div>

                

            </div>

            <div class="enregistrement_droite">

           
                
            </div>


    </div>




    @endsection
