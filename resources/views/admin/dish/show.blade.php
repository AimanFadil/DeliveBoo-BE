@extends('layouts.app')

@section('content')
    @if (Auth::user()->restaurant()->exists('user_id') && $dish->restaurant_id === Auth::user()->restaurant->id)
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-5">
                    <div class="card border-success container-shadow bg-forms" style="width:80%;">

                        {{-- card head --}}
                        <div class="card-head d-flex flex-wrap">
                            <div class="card-head col-9 col-md-5 m-4">
                                <div class="w-100 container-shadow ">
                                    <img src=" {{ $dish->image == null ? 'https://www.biochetasi.it/wp-content/uploads/2019/09/I-bambini-e-il-cibo-spazzatura.-Meglio-non-esagerare-1-biochetasi-1000x600.jpg' : asset('/storage/' . $dish->image) }}"
                                        alt="" class="card-img-top">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 text-center align-self-center">
                                <h5 class="card-title fs-4  my-4 fw-bold colorgreen ">{{ $dish->name }}</h5>
                                <p class="card-text">{{ $dish->description }}</p>
                            </div>
                        </div>

                        {{-- card body --}}
                        <div class="m-4  container-shadow ">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> <span class="colorgreen fw-semibold">Prezzo:</span>
                                    {{ $dish->price }}
                                    €</li>
                                <li class="list-group-item"><span class="colorgreen fw-semibold">Ingredienti:</span>
                                    {{ $dish->ingredients }}</li>
                            </ul>
                        </div>
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
