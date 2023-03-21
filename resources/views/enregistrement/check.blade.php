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
            <div class="enregistrement_gauche">
                  <div class="enregistrement__text"> 
                        <div class="text__img"> <img src="/icons/info.svg" alt=""> </div>
                     <div class="text__24" >Vous pouvez vous enregistrer entre 30h et 3h heures avant le vol</div>
                    </div>
                <form action="/enregistrement" method="post" class="form_enregistrement"  id="form_enrege">
                    @csrf
                    <div class="information_reservation__titre">
                        <p>Pret pour l'enregistrement ?</p>
                    </div>
                    <div class="information_reservation__ligne">
                        <input type="text" name="reference_reservation"   required class="form_enreg__num" value= {{old('reference_reservation') }}>
                     <label for="reference_reservation" class="information_reservation__label"><span class="information_reservation__contenue">Référence de reservation</span></label>
                     
                    </div>
                    <div class="reservation__erreur enregis__erreur_num">
                        @if($errors->has('reference_reservation'))
                            {{$errors->first('reference_reservation')}}
                        @endif    
                        </div>

                    <div class="information_reservation__ligne">
                        <input type="text" name="nom_client"  required class="form_enreg__nom" value= {{old('nom_client') }} >
                        
                        <label for="nom" class="information_reservation__label"><span class="information_reservation__contenue">Nom de passeger</span></label>
                    </div>
                    <div class="reservation__erreur enregis__erreur_nom">
                        @if($errors->has('nom_client'))
                            {{$errors->first('nom_client')}}
                        @endif    
                        </div>

                    <div class="enregistrement__validation">
                        <input type="submit" name="submit" class="enregistrement__btn" formnovalidate>
                        
                    </div>
                    <div class="enregistrement_erreur">
                        
                    
                    @if (isset($error))
                            {{$error}}
                        @endif    
                        </div>

                    </form>
                  
<a class="enregistrement__annuler" href="{{route('/enregistrement/supprimer_Enregistrement')}}">Annuler un enregistrement</a>

            </div>

            <div class="enregistrement_droite">


                
            </div>


    </div>




    @endsection