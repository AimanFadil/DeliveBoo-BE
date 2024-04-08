@extends('layouts.app')

@section('content')
    @if (Auth::user()->restaurant()->exists('user_id') && $order->restaurant_id === Auth::user()->restaurant->id)
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-5 ">
                    <div class="card border-success container-shadow bg-forms p-3 col-10 d-flex flex- wrap">
                        <div class="col-12 d-flex flex-wrap">
                            <div class="col-12 col-lg-6">
                                <div class="fs-5 col-12 ">Ordine eseguito il: <strong>
                                        {{ $data_italiana = strftime('%d/%m/%Y', strtotime($order->created_at)) }} </strong>
                                    alle:
                                    <strong>{{ $ora_italiana = date(' H:i', strtotime($order->created_at)) }} </strong>
                                </div>
                                <div class="m-3">



                                    <ul class="list-unstyled ">
                                        <li> Da:<strong class="ms-4 ps-5">{{ $order->name }}</strong></li>
                                        <li>Email: <strong class="ms-4 ps-4">{{ $order->mail }}</strong></li>
                                        <li>Indirizzo: <strong class="ms-4">{{ $order->address }}</strong></li>
                                        @if ($order->phone != null)
                                            <li>Telefono: <a href="http://127.0.0.1:8000/admin/order/4"
                                                    class="link-offset-2 link-underline link-underline-opacity-0 text-success"><strong
                                                        class="ms-3">{{ $order->phone }}</strong></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            {{-- list of ieces --}}
                            <div class="col-12 col-lg-6">
                                <div class="m-4 bg-orders container-shadow rounded">
                                    <ul class=" ">
                                        @foreach ($dishes as $dish)
                                            <li class="fs-5">
                                                <div class="mb-4">
                                                    <div class="fw-bold colorgreen text-capitalize">{{ $dish->name }}
                                                        <strong
                                                            class="mx-2 text-dark fw-semibold d-none d-lg-inline">x{{ $dish->pivot->number_dishes }}</strong>
                                                    </div>
                                                    <ul class="list-unstyled ms-3 fs-6 ">
                                                        <li class="d-block d-lg-none"> <strong>Pezzi:</strong>
                                                            {{ $dish->pivot->number_dishes }}
                                                        </li>
                                                        <li> <strong class="fw-semibold">Prezzo singolo:
                                                            </strong>{{ number_format($dish->price, 2, ',', '.') }}€
                                                        </li>
                                                        <li><strong class="fw-semibold">Ingredienti: </strong>
                                                            {{ $dish->ingredients }}</li>
                                                        <li> <strong class="fw-semibold">Prezzo Totale dei pezzi: </strong>
                                                            {{ number_format($dish->price * $dish->pivot->number_dishes, 2, ',', '.') }}
                                                            €</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="fs-5  ">
                                    Totale:
                                    <strong>
                                        {{ number_format($order->price, 2, ',', '.') }}€
                                    </strong>
                                </div>
                            </div>
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
