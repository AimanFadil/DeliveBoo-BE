<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

use Illuminate\Support\Str;

class RestaurantController extends Controller
{
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
