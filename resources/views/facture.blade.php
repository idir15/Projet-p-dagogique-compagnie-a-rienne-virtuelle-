@extends('layout')

@section('content')
<script src="https://js.stripe.com/v3/"></script>

<div class="entete__cadre">  
  <div class="entete">
      <p>    Vous y etes presque </P>
          
  </div>
</div>
{{-- formaulaire de paiement  --}}

<div class="payment_details__titre" style="display:flex;justify-content:center;">
  payez votre reservation
</div>
<div class="payement_container">
  <div class="payment_content">
      <div class="credit_cards__header">
          Informations
        </div>
  <div class="payment_details ">

      
      
      <div class="payment_details__text">
       <div class="payment_details__line"><b>Type de reservation :</b> {{session('type_vol') == 'simple' ? 'Aller simple' : 'Aller Retour' }}</div>
       <div class="payment_details__line"><b>nombre de places reservé :</b> {{count(session('clients')) }}</div>
       <div class="payment_details__line"><b>liste des personnes conserné</b></div>
       @foreach (session('clients') as $client)
       <div class="payment_details__line payment_details__line--sub">{{$client->nom_client}} {{$client->prenom_client}} né le : {{$client->date_naissance_client}}</div>
          @endforeach
           <div class="payment_details__line"> <b>vol{{ isset(session('vols')['retour']) ? "s" :  "" }} :</b></div>
           <div class="payment_details__line payment_details__line--sub">{{session('vols')['aller']->ville_depart}} -- {{session('vols')['aller']->ville_arriver}} <br> prix : {{session('prix_aller')}} DA</div>
           @if ( isset(session('vols')['retour'] ) )
           <div class="payment_details__line payment_details__line--sub">{{session('vols')['retour']->ville_depart}} -- {{session('vols')['retour']->ville_arriver}} {{session('class')}} <br> prix : {{session('prix_retour')}} DA</div>
          @endif
   
      </div>
   </div> 
  </div>
<div class="payment_content">

  <div class="credit_cards__header">
      Payement
    </div>

<form action="/finalize" method="post" id="payment-form">
   @csrf
 

      <div class="payment_amount">
          <div class="payment_amount__text">
          Montant à payer : 
          </div>
          <div class="payment_amount__amount">
            {{session('prix_total')}} DA
              </div> 
      
      </div>

      <div class="payment_line">
      <label for="card-element" class="payement_label" >
      Carte de crédit
      </label>
  
      <div class="caredit_card__container">
      <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
      </div>
      </div>
  </div>
      <!-- Used to display form errors. -->
      <div id="card-errors" role="alert"></div>
  
  <button class="payment_submit">Effectuer</button>

</div>

  <script>
  document.addEventListener("DOMContentLoaded", function(event) {
    var stripe = Stripe('pk_test_Z8uownN3bNZMeTWMmuzz0fu500Lzj5Ywdv'); // test publishable API key
    var elements = stripe.elements();

    var card = elements.create('card');
    // Add an instance of the card UI component into the `card-element` <div>
    card.mount('#card-element');

    // Handle events and errors
    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
      form.submit();
    }

    function createToken() {
      stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          // Send the token to your server
          stripeTokenHandler(result.token);
        }
      });
    };

    // Create a token when the form is submitted.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      createToken();
    });
});

  </script>
@endsection