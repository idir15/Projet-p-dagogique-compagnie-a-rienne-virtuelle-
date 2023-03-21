@extends('layout')

@section('title')
    enregistrement
@endsection

@section('content')
    <div class="entete__cadre">  
        <div class="entete">
            <p>Enregistrement</P>
                
        </div>
    </div>

    <div class="container_enregistrement">
        <div class="enregistrement_gauche1">
              <div class="enregistrmrnt__tete">
                
    
                <div class="enregistrement__etat">
                    <div class="enregistrement__cercle ">1</div>
                    <div class="enregistrement__ligne"></div>
                    <div class="enregistrement__cercle enregistrement__cercle--actif">2</div>
                    <div class="enregistrement__ligne"></div>
                    <div class="enregistrement__cercle">3</div>


                </div>

                <div class="enregistrement__titre">
                    <p>Bagages</p>
                </div>
         
                <div class="enregistrement__details">
                    <p>Veuillez valider les bagage pour passer a l'étape suivante...</p>
                </div>
                
            </div>
                <div class="enregistrement__tableau">
                    <div class="tableau__titres">
                        <div class="tableau__titre">Passager</div>
                        <div class="tableau__titre">Bagages</div>
                        <div class="tableau__titre">Action</div>
                    </div>
                    
               
                  
  


                    @foreach ($listeEnregistre as $key )
                   
 
 <div class="tableau__ligne ">
                        <div class="tableau__element">{{$key->nom_client}} {{$key->prenom_client}}</div>
                        <div class="tableau__element">1 bagage a main, 1 accessoire	</div>
                        <div class="tableau__element "><a href="{{route('/enregistrement/ajouterDesBagages',[$key->num_client,$key->nom_client,$key->prenom_client])}}" class="tableau__button">Ajouter</a></div>
                    </div>

               @endforeach
               
                    <div class="enregistrement__btns">
                      {{-- <a href={{route('/enregistrement/information')}}>  <input type="button" class="" value="Retour"> </a> --}}
                     
                    
                   
                  

                      <a href={{route('/enregistrement/informations/bagage/siège')}}>  <input type="button" class="" value="Suivant"> </a>
                
               
                    </div>

                </div>

                

            </div>

         

    </div>




    @endsection
