<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Typology;
use App\Models\User;

use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = Auth::user();

        $typologies = Typology::all();
        return view('restaurants.create', compact('typologies', 'user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantRequest $request)
    {
        
        $user =  Restaurant::where('user_id', '=', Auth::id())->first();
        if($user == null ){
            if($request->hasFile('logo')){
                $path = Storage::disk('public')->put('images', $request->logo);
                $request->logo = $path;
                
            }

            
            if($request->typology != null){
                $restaurant = Restaurant::create([
    
                    'business_name' => $request->business_name,
                    'address' => $request->address,
                    'vat_number' => $request->vat_number,
                    'slug' => str_replace(' ', '-', $request->business_name),
                    'logo' => $request->logo,
                    'user_id' => Auth::id(),
                    
                ]);

                $restaurant->typologies()->sync($request->typology);
                return view('restaurants.index');
            }
            else{
                
                return redirect()->route('restaurants.create');
            }
        }
        else{
            return view('dashboard');
        }
        

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantRequest  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
