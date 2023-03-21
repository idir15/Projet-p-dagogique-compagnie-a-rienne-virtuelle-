<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Checkout\Session;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class PayementController extends Controller
{
    public function index()
    {
        //Stripe::setApiKey('pk_test_Z8uownN3bNZMeTWMmuzz0fu500Lzj5Ywdv');
        return view('pay');
    }

    public function notindex()
    {
        //Stripe::setApiKey('pk_test_Z8uownN3bNZMeTWMmuzz0fu500Lzj5Ywdv');
        return view('notpay');
    }

    public function paymentProcess()
    {
        
      Stripe::setApiKey('sk_test_7r61GdQnmF7l45pmmgq9qkfM00c6qX2stx');
        
      $token_id = $_POST['stripeToken'];
      //dd($token_id);
      $amount = 10000;

      try{
          
          $charge = Charge::create([
              
              'source' => $token_id,
              'amount' => $amount,
              'currency' => 'usd',
              ]);
             

  } catch(\Stripe\Exception\CardException $e) {
      // Since it's a decline, \Stripe\Exception\CardException will be caught
      //dd('hi payement controller');
      return view('payementDenied',[
          'e' => $e,
      ]);
      echo 'Status is:' . $e->getHttpStatus() . '<br>';
      echo 'Type is:' . $e->getError()->type . '<br>';
      echo 'Code is:' . $e->getError()->code . '<br>';
      // param is '' in this case
      echo 'Param is:' . $e->getError()->param . '<br>';
      echo 'Message is:' . $e->getError()->message . '<br>';
    } catch (\Stripe\Exception\RateLimitException $e) {
      echo 'Message is:' . $e->getError()->message . '<br>';
      // Too many requests made to the API too quickly
    } catch (\Stripe\Exception\InvalidRequestException $e) {
      echo 'Message is:' . $e->getError()->message . '<br>';
      // Invalid parameters were supplied to Stripe's API
    } catch (\Stripe\Exception\AuthenticationException $e) {
      echo 'Message is:' . $e->getError()->message . '<br>';
      // Authentication with Stripe's API failed
      // (maybe you changed API keys recently)
    } catch (\Stripe\Exception\ApiConnectionException $e) {
      echo 'Message is:' . $e->getError()->message . '<br>';
      // Network communication with Stripe failed
    } catch (\Stripe\Exception\ApiErrorException $e) {
      echo 'Message is:' . $e->getError()->message . '<br>';
      // Display a very generic error to the user, and maybe send
      // yourself an email
    } catch (Exception $e) {
      echo 'Message is:' . $e->getError()->message . '<br>';
      // Something else happened, completely unrelated to Stripe
    }

        $intent = PaymentIntent::create([
            'payment_method_data' => [
                'type' => 'card',
                'card' => ['token' => $token_id],
            ],
            'amount' => $amount,
            'currency' => 'usd',
            'confirmation_method' => 'manual',
            'confirm' => true,
        ]);
            
        /*
        $session = Session::create([
            'billing_address_collection' => 'required',
            'payment_method_types' => ['card'],
            'line_items' => [[
              'name' => 'T-shirt',
              'description' => 'Comfortable cotton t-shirt',
              'images' => ['https://example.com/t-shirt.png'],
              'amount' => 500,
              'currency' => 'eur',
              'quantity' => 1,
            ]]
          ]);*/

/*
          $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
              'name' => 'Billet Vol TEST',
              'description' => 'Billet Vol FA0245',
              //'images' => ['https://example.com/t-shirt.png'],
              'amount' => 75000,
              'currency' => 'eur',
              'quantity' => 1,
            ]],
            'success_url' => env('APP_URL').'/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => env('APP_URL').'/cancel',
          ]);

          */
    }

    public function stripeIndex(){
        return view('stripe');
    }
}