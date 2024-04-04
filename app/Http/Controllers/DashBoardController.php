<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DashBoardController extends Controller
{
    public function index()
    {
        $restaurant =  Restaurant::where('user_id', '=', Auth::id())->first();
        $orders = Order::where('restaurant_id', $restaurant->id)->get();
        $typologies = [];
        if ($restaurant != null ) {

            $typologies = $restaurant->typologies()->get();
            
        }
        return view('dashboard', compact('restaurant', 'typologies','orders'));
    }
}
