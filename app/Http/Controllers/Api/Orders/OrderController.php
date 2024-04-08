<?php

namespace App\Http\Controllers\Api\Orders;

use Braintree\Gateway;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Orders\OrderRequest;
use App\Models\Order;
use App\Models\Dishe;

class OrderController extends Controller
{
    public function customer(Request $request){
        $form_data = $request->all();
        $price = 0.0; // Inizializza come float
        $restaurant_id = '';
        foreach($form_data['products'] as $product){
            $prices = floatval($product['price']) * floatval($product['quantity']);
            $restaurant_id = $product['restaurant_id'];
            $price += $prices;
        };
        $order = new Order();
        $order->price = $price;
        $order->name = $form_data['name'];
        $order->address = $form_data['address'];
        $order->mail = $form_data['mail'];
        if(array_key_exists('phone', $form_data)){
            $order->phone = $form_data['phone'];
        }
        $order->restaurant_id = $restaurant_id;
        $order->save();

        $order->created_at = $order->created_at->addHours(2);
        $order->save(); 

        foreach($form_data['products'] as $product){
            $dishe_id = $product['id'];
            $number_dishes = $product['quantity'];
            $order->dishes()->attach($dishe_id, ['number_dishes' => $number_dishes]);
        };
    }

    public function generate(Request $request,Gateway $gateway){
        $token = $gateway->clientToken()->generate();
        $data = [
            'success' => true,
            'token' => $token
        ];
        return response()->json($data);
    }

    public function makePayment(OrderRequest $request,Gateway $gateway){
        $products = $request->products;
        $amount = 0.0; 
        foreach($products as $product){
            $dish = Dishe::find($product['id']);
            $prices = floatval($dish->price) * floatval($product['quantity']);
            $amount += $prices;
        };

        // Facoltativamente arrotonda per scopi di visualizzazione
        $amountForTransaction = round($amount, 2); 

        $result = $gateway->transaction()->sale([
            'amount' => $amountForTransaction,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if($result->success){
            $data = [
                'success' => true,
                'message' => "Pagamento avvenuto con successo!"
            ];
            return response()->json($data,200);
        }else{
            $data = [
                'success' => false,
                'message' => "Pagamento fallito. Si prega di riprovare."
            ];
            return response()->json($data,401);
        }
    }
}