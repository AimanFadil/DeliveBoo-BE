@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (Auth::user()->restaurant()->exists('user_id'))
                    <div class="d-flex justify-content-center flex-column align-items-center gap-1 mt-5">
                        <div class="logo">
                            @if ($restaurant->logo != null)
                                <img src="{{ asset('/storage/' . $restaurant->logo) }}" alt="{{ $restaurant->business_name }}"
                                    class="roundede ">
                            @else
                                <img src="{{ asset('/storage/images/default-restaurant-logo.png') }}"
                                    alt="{{ $restaurant->business_name }}" class="roundede ">
                            @endif
                        </div>
                        <h2> {{ $restaurant->business_name }} </h2>
                        <h5>Indirizzo: {{ $restaurant->address }}</h5>
                        <h6>P.Iva: {{ $restaurant->vat_number }}</h6>
                        <div>Tipologie:</div>
                        <div>
                            @foreach ($typologies as $typology)
                                <div class="me-3 d-inline fst-italic">{{ $typology->name }}</div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="container">
                        <div class="row">
                            <div class="col-12 ">
                                <h2 class="text-success text-center display-4">Crea il tuo ristorante</h2>
                                <div class="col-12 justify-content-center d-flex">

                                    <a class="btn btn-sm text-white hover-3 mt-4 "
                                        href="{{ url('restaurants/create') }}">{{ __('Crea il tuo ristorante') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
