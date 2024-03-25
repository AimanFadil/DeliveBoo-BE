<?php

namespace App\Http\Controllers;

use App\Models\Dishe;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\StoreDisheRequest;
use App\Http\Requests\UpdateDisheRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class DisheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = Restaurant::where('user_id', '=',Auth::user()->id)->first();
        $dishes = Dishe::where('restaurant_id', $restaurant->id)->orderBy('name', 'asc')->get();

        return view('admin.dish.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dish.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDisheRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisheRequest $request)
    {
        $form_data = $request->all();
        $restaurant = Restaurant::where('user_id', '=',Auth::user()->id)->first();

        $new_dish = new Dishe();

        $new_dish->name = $form_data['name'];
        $new_dish->price = $form_data['price'];
        $new_dish->description = $form_data['description'];
        $new_dish->ingredients = $form_data['ingredients'];
        $new_dish->visible = $form_data['visible'];
        $new_dish->slug = Str::Slug($new_dish->name, '-');
        $new_dish->restaurant_id = $restaurant->id;
        $new_dish->save();

        return redirect()->route('admin.dish.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dishe  $dishe
     * @return \Illuminate\Http\Response
     */
    public function show(Dishe $dishe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dishe  $dishe
     * @return \Illuminate\Http\Response
     */
    public function edit(Dishe $dish)
    {
        return view('admin.dish.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDisheRequest  $request
     * @param  \App\Models\Dishe  $dishe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisheRequest $request, Dishe $dish)
    {

        $form_data = $request->all();

        $dish = Dishe::find($dish->id);


        $dish->name = $form_data['name'];
        $dish->price = $form_data['price'];
        $dish->description = $form_data['description'];
        $dish->ingredients = $form_data['ingredients'];
        $dish->slug = Str::Slug($dish->name, '-');

        $dish->save();

        return redirect()->route('admin.dish.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dishe  $dishe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dishe $dish)
    {
        $dish = Dishe::where('id', $dish->id)->first();
        $dish->delete();
        return redirect()->route('admin.dish.index');
    }
}
