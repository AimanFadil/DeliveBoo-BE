<?php

namespace App\Http\Controllers\Api\Orders;

use Braintree\Gateway;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Orders\OrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    public function customer(Request $request){
        $form_data = $request->all();
        $price = null;
        $restaurant_id = '';
        foreach($form_data['products'] as $product){
            $prices =intval($product['price'])  * intval( $product['quantity']);
            $restaurant_id = $product['restaurant_id'];
            $price += $prices;
        };
        $order = new Order();
        $order->price = $price;
        $order->name = $form_data['name'];
        // $order->price = $form_data['price'];
        $order->address = $form_data['address'];
        $order->mail = $form_data['mail'];
        if(array_key_exists('phone', $form_data)){
            $order->phone = $form_data['phone'];
        }
        $order->restaurant_id = $restaurant_id;
        $order->save();

        foreach($form_data['products'] as $product){
            $dishe_id = $product['id'];
            $number_dishes = $product['quantity'];
            $order->dishes()->attach($dishe_id, ['number_dishes' => $number_dishes]);
        };
        // $order->dishes()->sync(
        //         $request->products
        //         // [$request->products['number_dishes']],
        //     );
        
    }

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
        $products = $request->products;
        $amount= null;
        foreach($products as $product){
            $prices =intval($product['price'])  * intval( $product['quantity']);
            $amount += $prices;
        };
       $result = $gateway->transaction()->sale([
        'amount' => $amount,
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