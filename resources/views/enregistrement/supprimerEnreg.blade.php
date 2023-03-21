@extends('layout')

@section('title')
   Annuler un enregistrement
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
                       <div class="text__24" >Vous pouvez vous annuler l'enregistrement entre 30h et 3h heures avant le vol</div>
                      </div>
                <form action="/enregistrement/supprimer_Enregistrement" method="post" class="form_enregistrement">
                    @csrf
                    <div class="information_reservation__titre">
                        <p>Supprimer l'enregistrement ?</p>
                    </div>
                    <div class="information_reservation__ligne">
                        <input type="text" name="reference_reservation" required value= {{old('reference_reservation') }} >
                     <label for="reference_reservation" class="information_reservation__label"><span class="information_reservation__contenue">Référence de reservation</span></label>
                     
                    </div>
                    <div class="erreur">
                        @if($errors->has('reference_reservation'))
                            <label>{{$errors->first('reference_reservation')}}</label>
                        @endif    
                        </div>

                    <div class="information_reservation__ligne">
                        <input type="text" name="nom_client" required  value= {{old('nom_client') }} >
                        
                        <label for="nom" class="information_reservation__label"><span class="information_reservation__contenue">Nom de passeger</span></label>
                    </div>
                    <div class="erreur">
                        @if($errors->has('nom_client'))
                            <label>{{$errors->first('nom_client')}}</label>
                        @endif    
                        </div>

                    <div class="enregistrement__validation">
                        <input type="submit" name="submit" class="enregistrement__btn" formnovalidate>
                        
                    </div>
                 

                    </form>
<a class="enregistrement__annuler" href="/enregistrement">Retourner</a>

            </div>

            <div class="enregistrement_droite">


                
            </div>


    </div>
@endsection