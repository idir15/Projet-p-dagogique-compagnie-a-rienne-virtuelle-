@extends('layout')

@section('title')
    Payer vos bagages
@endsection

@section('cssLink')
<link rel="stylesheet" href="/css/payement.css"/>
@endsection

@section('content')
    
<script src="https://js.stripe.com/v3/"></script>

<div class="entete__cadre">  
    <div class="entete">
        <p>    Vous y etes presque </P>
            
    </div>
</div>
<h1>prix de bagages en soute pour tout les passagers est: {{$somme}} DA</h1>
{{-- formaulaire de paiement  --}}
<div class="payement_container">
    <div class="payment_content">
        <div class="credit_cards__header">
            Informations
          </div>
    <div class="payment_details ">

        
        
        <div class="payment_details__text">
         <div class="payment_details__line"><b>liste des personnes conserné</b></div>
         @foreach ($listeEnregistre as $client)
            <div class="payment_details__line payment_details__line--sub "> {{$client->nom_client}} {{$client->prenom_client}} né le : {{$client->date_naissance_client}}</div><br>
         @endforeach
        </div>
     </div> 
    </div>
<div class="payment_content">

    <div class="credit_cards__header">
        Payement
      </div>

<form action="/enregistrement/macarte" method="post" id="payment-form">
     @csrf
   
 
        <input type="text" name="amount" value={{$somme}} placeholder="Enter Amount" hidden/>
        <div class="payment_amount">
            <div class="payment_amount__text">
            Montant a payer: 
            </div>
            <div class="payment_amount__amount">
                {{$somme}} DA
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
</form>
</div>
</div>
{{-- 
    formaulaire de paiement 
    <form action="/enregistrement/macarte" method="post" id="payment-form">
        <div class="form-row">
            <p><input type="text" name="amount" value={{$somme}} placeholder="Enter Amount"/></p>
            <p><input type="email" name="email" placeholder="Enter Email" /></p>
        <label for="card-element">
            Credit or debit card
        </label>
        <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
        </div>
        
        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
    </div>
    <button>Submit Payment</button>
    {{ csrf_field() }}
</form>
--}}
<script>
    var stripe = Stripe('pk_test_Z8uownN3bNZMeTWMmuzz0fu500Lzj5Ywdv');
    
    // Create an instance of Elements.
    var elements = stripe.elements();
    
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };
    
    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});
    
    // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        
        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        
        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
              stripeTokenHandler(result.token);
            }
      });
  });
  
  // Submit the form with the token ID.
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
</script>
@endsection

