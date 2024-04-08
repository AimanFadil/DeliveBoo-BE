<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Order;

use Illuminate\Support\Str;

class RestaurantController extends Controller
{
    public function order($id)
    {
        $restaurant =  Restaurant::where('id',$id)->first();
        $orders = $restaurant->orders()->get();
        // $orders = Order::where('restaurant_id', $restaurant->id)->get();

        return response()->json([
            "success" => true,
            "results" => $orders
        ]);
    }
    public function index()
    {
        $restaurants = Restaurant::with("typologies")->get();
        
        return response()->json([
            "success" => true,
            "results" => $restaurants
        ]);
    }
    public function show($id)
    {
        $restaurant = Restaurant::all()->where('id', $id)->first();

        return response()->json([
            "success" => true,
            "results" => $restaurant
        ]);
    }
    


}
