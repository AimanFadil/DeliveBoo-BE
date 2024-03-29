<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dishe;

class DisheController extends Controller
{
    public function index()
    {
        $dishes = Dishe::all();
        
        return response()->json([
            "success" => true,
            "results" => $dishes
        ]);
    }
}
