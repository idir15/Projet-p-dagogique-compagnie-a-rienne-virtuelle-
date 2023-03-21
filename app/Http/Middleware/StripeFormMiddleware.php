<?php

namespace App\Http\Middleware;

use Closure;
use Stripe\Charge;
use Stripe\Stripe;

class StripeFormMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
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
        dd('hi excepchon');
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

        return $next($request);
    }
}
