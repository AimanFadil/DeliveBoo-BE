<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dishe;

class DisheController extends Controller
{
    public function index($id)
    {
        $dishes = Dishe::all()->where('restaurant_id',$id);
        
        return response()->json([
            "success" => true,
            "results" => $dishes
        ]);
    }
}
