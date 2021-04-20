<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;

class StripeController extends Controller
{  
    /**
     * create payment intent with POST
     */
    public function create(Request $request)
    {

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try{
            
            $intent = \Stripe\PaymentIntent::create([
                'amount' => $request->intent_details['amount'] * 100,
                'currency' => 'aud',
                // Verify your integration in this guide by including this parameter
                // 'metadata' => ['integration_check' => 'accept_a_payment'],
              ]);

            return response()->json([
                'message' => 'Successfully Created Intent for payment',
                'state' => 'success',
                'data' => ['client_secret' => $intent->client_secret, 'id' => $intent->id]
            ]); 
        } catch(\Exception $e){
            return dd($e);
            return response()->json([
                'message' => 'There were some issue with the payment. Please try again later.',
                'state' => 'error',
                'data' => $e
            ]);
        }
    }

    public function update(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        try {
            $intent = \Stripe\PaymentIntent::update(
                $request->intent_details['id'],
                ['receipt_email' => $request->intent_details['email']]
            );
    
            return response()->json([
                'message' => 'Successfully Confirmed Intent for payment',
                'state' => 'success',
                'data' => $intent->charges->first()
            ]); 
        
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'There were some issue with the payment. Please try again later.',
                'state' => 'error',
                'data' => $e
            ]);
        }
    }
}
