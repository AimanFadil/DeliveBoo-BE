<?php

namespace App\Http\Controllers;

use App\Models\Dishe;
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
        $dishes = Dishe::all();

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

        $new_dish = new Dishe();

        $new_dish->name = $form_data['name'];
        $new_dish->price = $form_data['price'];
        $new_dish->description = $form_data['description'];
        $new_dish->ingredients = $form_data['ingredients'];
        $new_dish->slug = Str::Slug($new_dish->name, '-');

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
    public function update(UpdateDisheRequest $request, Dishe $dishe)
    {
        // TODO: fix update record
        
        $form_data = $request->all();

        $dish = Dishe::find($dishe->id);


        $dish->name = $form_data['name'];
        $dish->price = $form_data['price'];
        $dish->description = $form_data['description'];
        $dish->ingredients = $form_data['ingredients'];
        $dish->slug = Str::Slug($dishe->name, '-');

        $dish->save();

        return redirect()->route('admin.dish.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dishe  $dishe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dishe $dishe)
    {
        // TODO: fix delete record from database
        $dishe = Dishe::where('id', $dishe->id)->first();
        dd($dishe);
        $dishe->delete();
        return redirect()->route('admin.dish.index');
    }
}
