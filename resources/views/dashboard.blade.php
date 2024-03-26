@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}

        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center flex-column align-items-center gap-1 mt-5">
                    <div class="logo">
                        <img src="{{ asset('/storage/' . $restaurant->logo) }}" alt="{{ $restaurant->business_name }}"
                            class="roundede ">
                    </div>
                    <h2> {{ $restaurant->business_name }} </h2>
                    <h5>{{ $restaurant->address }}</h5>
                    <h6>{{ $restaurant->vat_number }}</h6>
                    <div>Tipologie:</div>
                    <div>
                        @foreach ($typologies as $typology)
                            <div class="me-3 d-inline fst-italic">{{ $typology->name }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
