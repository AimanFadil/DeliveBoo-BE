<?php

namespace App\Http\Controllers;

use App\Models\Dishe;
use App\Http\Requests\StoreDisheRequest;
use App\Http\Requests\UpdateDisheRequest;

class DisheController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDisheRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisheRequest $request)
    {
        //
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
    public function edit(Dishe $dishe)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dishe  $dishe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dishe $dishe)
    {
        //
    }
}
