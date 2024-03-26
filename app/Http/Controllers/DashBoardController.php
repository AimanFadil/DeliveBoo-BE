<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DashBoardController extends Controller
{
    public function index()
    {
        $restaurant =  Restaurant::where('user_id', '=', Auth::id())->first();
        $typologies = $restaurant->typologies()->get();
        return view('dashboard', compact('restaurant', 'typologies'));
    }
}
