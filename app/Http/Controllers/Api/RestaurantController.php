<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContattoRistoratore;
use App\Mail\ContattoUtente;

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

    public function mails(Request $request)
    {
        $id = $request->id;
        $restaurant = Restaurant::all()->where('id', $id)->first();
        $mail = $restaurant->user()->first();

        $user = $request->mail;
        Mail::to($mail->email)->send(new ContattoRistoratore);
       

        Mail::to($user)->send(new ContattoUtente);
        
    }


}
