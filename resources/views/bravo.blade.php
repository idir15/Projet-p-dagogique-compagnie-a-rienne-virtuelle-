@extends('layout')

@section('content')
    <div class="payement_msg__container">
        <div class="payment_msg__content">
            <div class="payment_msg__text">
             <b> Votre Reservation a bien été enregistré</b> <br>
             Une copie de votre billet a été envoyé a votre mail
                
              
            </div>
            <div class="payment_msg__icon--pos">

            </div>
          <form action="/pdf" method="post">
            <div class="payment_msg__text">
              
              Pour télécharger votre billet electronique <button type="submit">cliquez ici</button> 
              @csrf
              <input  type="hidden" name="referenceBillet" value="{{$path}}">
              
            </div> 
          </form>
        </div>


    </div>
    
@endsection