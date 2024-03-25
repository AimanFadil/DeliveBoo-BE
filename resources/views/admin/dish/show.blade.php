@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" style="width: 25rem;">
                <img src="{{ asset('/storage/' . $dish->image)}}" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $dish->name }}</h5>
                    <p class="card-text">{{ $dish->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Price: {{ $dish->price }} €</li>
                    <li class="list-group-item">Ingredients: {{ $dish->ingredients }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endSection