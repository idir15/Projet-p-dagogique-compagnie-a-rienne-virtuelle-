@extends('layout')

@section('title')
    Enregistrement
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
                    <div class="enregistrement__cercle enregistrement__cercle--actif">1</div>
                    <div class="enregistrement__ligne"></div>
                    <div class="enregistrement__cercle">2</div>
                    <div class="enregistrement__ligne"></div>
                    <div class="enregistrement__cercle">3</div>


                </div>

                <div class="enregistrement__titre">
                    <p>Informations sur les passagers </p>
                </div>
         
                <div class="enregistrement__details">
                    <p>Veuillez ajouter les informations des passeport...</p>
                </div>
                
            </div>
                <div class="enregistrement__tableau">
                    <div class="tableau__titres">
                        <div class="tableau__titre">Passager</div>
                        <div class="tableau__titre">Statut</div>
                        <div class="tableau__titre">Action</div>
                    </div>
                    @foreach ($listeClient as $key )
                    @if ($key->statut == 0)
                    <div class="tableau__ligne ">
                        <div class="tableau__element">{{$key->nom_client}} {{$key->prenom_client}}</div>
                        <div class="tableau__element">{{'Manque des details de passeport'}}</div>
                        <div class="tableau__element "><a href={{route('/enregistrement/detail_passeport',[$key->num_client,$key->nom_client,$key->prenom_client])}} class="tableau__button">Ajouter</a></div>
                    </div>
                    @else
                    <div class="tableau__ligne tableau__ligne--pair">
                        <div class="tableau__element">{{$key->nom_client}} {{$key->prenom_client}}</div>
                        <div class="tableau__element">{{'Pret'}}</div>
                        <div class="tableau__element "></div>
                    </div>
                    @endif 
                    @endforeach

                    <div class="enregistrement__btns">
                      <a href='/enregistrement'>  <input type="button" class="" value="Retour"> </a>
                      
                     @if ($listeClient[0]->statut == 1)
                      <a href={{route('/enregistrement/informations/bagage')}}>  <input type="button" class="" value="Suivant"> </a>
                 @endif
                    </div>

                </div>

                

            </div>


    </div>




    @endsection