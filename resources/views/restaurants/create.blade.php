@extends('layouts.app')

@section('content')
    @if (Auth::check() && !Auth::user()->restaurant()->exists('user_id'))
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">




                    <h2 class="text-success text-center display-4 fw-bold">Benvenuto {{ $user->name }}</h2>
                    <h3 class="text-center text-muted font-italic py-4 fw-semibold">Ora che sei loggato procedi alla
                        creazione
                        del
                        tuo
                        ristorante
                    </h3>
                    <div class="card border-success-subtle border-2 mb-4">





                        <div class="card-header background-green text-white">{{ __('Crea nuovo Ristorante') }}</div>

                        <div class="card-body bg-forms">
                            <form method="POST" action="{{ route('restaurants.store') }}"enctype="multipart/form-data">

                                <div class="mb-4 row">
                                    <label for="business_name"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Nome ristorante') }}
                                        <span class="text-danger fw-bold">*</span></label>


                                    @csrf


                                    <div class="col-md-6">
                                        <input id="business_name" type="text"
                                            class="form-control @error('business_name') is-invalid @enderror"
                                            name="business_name" value="{{ old('business_name') }}" required
                                            autocomplete="business_name" autofocus>

                                        @error('business_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="mb-4 row">
                                    <label for="address"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}
                                        <span class="text-danger fw-bold">*</span></label>


                                    <div class="col-md-6">
                                        <input id="address" type="address"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ old('address') }}" required autocomplete="address">

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="mb-4 row">
                                    <label for="vat_number"
                                        class="col-md-4 col-form-label text-md-right">{{ __('P.iva') }}
                                        <span class="text-danger fw-bold">*</span></label>



                                    <div class="col-md-6">
                                        <input id="vat_number" type="vat_number" min="11" max="11"
                                            class="form-control @error('vat_number') is-invalid @enderror" name="vat_number"
                                            value="{{ old('vat_number') }}" required autocomplete="new-vat_number">


                                        @error('vat_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="mb-4 row">
                                    <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}
                                    </label>
                                    <div class="col-md-6">
                                        <input id="logo" type="file"
                                            class="form-control @error('logo') is-invalid @enderror" name="logo"
                                            autocomplete="new-logo">


                                        @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <label for="typology" class="col-md-4 col-form-label text-md-right">Tipologia
                                    <span class="text-danger fw-bold">*</span></label>
                                <div class="mb-3">
                                    @foreach ($typologies as $typology)
                                        <div class="form-check-inline ">
                                            <div class="d-flex ">
                                                <input type="checkbox" name="typology[]" id="typology-{{ $typology->id }}"
                                                    class=" input-checkbox m-0 my_check" value="{{ $typology->id }}"
                                                    @checked(is_array(old('typology')) && in_array($typology->id, old('typology')))>
                                                <label for=""
                                                    class="form-check-label fw-semibold align-self-center ms-1">{{ $typology->name }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div id="check_error" class="d-flex justify-content-center text-danger"></div>
                                    @error('typology')
                                        <div class="d-flex justify-content-center ">

                                            <strong class="text-danger ">{{ $message }}!!!</strong>

                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4 row mb-0">
                                    <div class="col-md-6 offset-md-4">

                                        <button type="submit" id="btn_rest" class="btn btn-sm text-white hover-3 mt-4 ">
                                            {{ __('Crea nuovo Ristorante') }}

                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-danger text-center display-4">Il tuo ristorante è già stato inserito</h2>

                </div>
            </div>
        </div>
    @endif
@endsection
