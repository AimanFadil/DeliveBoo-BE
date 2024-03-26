@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (Auth::user()->restaurant()->exists('user_id'))
                    <div class="d-flex justify-content-center flex-column align-items-center gap-1 mt-5">
                        <div class="logo">
                            <img src="{{ asset('/storage/' . $restaurant->logo) }}" alt="{{ $restaurant->business_name }}"
                                class="roundede ">
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
                    <a class="btn btn-sm btn-success mt-1 me-3"
                        href="{{ url('restaurants/create') }}">{{ __('Create your Restaurant') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
@endsection
