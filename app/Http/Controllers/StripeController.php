<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index()
    {
        return view('stripe');
    }

    public function process(Request $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_7r61GdQnmF7l45pmmgq9qkfM00c6qX2stx');

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'name' => 'T-shirt',
                'description' => 'Comfortable cotton t-shirt',
                //'images' => ['https://example.com/t-shirt.png'],
                'amount' => 500,
                'currency' => 'eur',
                'quantity' => 1,
            ]],
            'success_url' => 'https://example.com/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'https://example.com/cancel',
        ]);
    }
}