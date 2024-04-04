@extends('layouts.app')

@section('content')
    @if (Auth::user()->restaurant()->exists('user_id') && $order->restaurant_id === Auth::user()->restaurant->id)
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-5">
                    <div class="card border-success container-shadow bg-forms" style="width:80%;">
                        {{ $order->created_at }}
                        @foreach ($dishes as $dish)
                            {{-- card head --}}
                            <div class="card-head d-flex ">
                                <div class="card-head col-5">

                                </div>
                                <div class="col-8 text-center align-self-center">
                                    <h5 class="card-title fs-4  my-4 fw-bold colorgreen ">{{ $dish->name }}</h5>
                                    <p class="card-text">{{ $dish->description }}</p>
                                </div>
                            </div>

                            {{-- card body --}}
                            <div class="m-4  container-shadow ">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"> <span class="colorgreen fw-semibold">Prezzo:</span>
                                        {{ $dish->pivot->number_dishes }} *
                                        {{ $dish->price }}
                                        €</li>
                                    <li class="list-group-item"><span class="colorgreen fw-semibold">Ingredienti:</span>
                                        {{ $dish->ingredients }}</li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-danger text-center display-4">Il piatto che stai cercando non esiste</h2>

                </div>
            </div>
        </div>
    @endif
@endSection
