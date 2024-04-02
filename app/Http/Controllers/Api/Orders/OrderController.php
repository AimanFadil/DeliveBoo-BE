<?php

namespace App\Http\Controllers\Api\Orders;

use Braintree\Gateway;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Orders\OrderRequest;

class OrderController extends Controller
{
    public function generate(Request $request,Gateway $gateway){
        // dd($gateway->clientToken()->generate());
        $token = $gateway->clientToken()->generate();
        $data = [
            'success' => true,
            'token' => $token
        ];
        return response()->json($data);
    }

    public function makePayment(OrderRequest $request,Gateway $gateway){

       $result = $gateway->transaction()->sale([
        'amount' => $request->amount,
        'paymentMethodNonce' => $request->token,
        'options' => [
            'submitForSettlement' => true
        ]
       ]);

       if($result->success){
            $data = [
                'success' => true,
                'message' => "evvai"
            ];
            return response()->json($data,200);
       }else{
            
            $data = [
                'success' => false,
                'message' => "noooo"
            ];
            return response()->json($data,401);
       }
        return 'makePayment';
    }
}