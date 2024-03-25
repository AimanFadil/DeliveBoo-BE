@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-success-subtle border-2">
                    <div class="card-header background-green text-white">{{ __('Create new restaurant ') }}</div>

                    <div class="card-body bg-forms">
                        <form method="POST" action="{{ route('restaurants.store') }}">
                            @csrf

                            <div class="mb-4 row">
                                <label for="business_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('business_name') }}</label>

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
                                    class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>

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
                                    class="col-md-4 col-form-label text-md-right">{{ __('vat_number') }}</label>

                                <div class="col-md-6">
                                    <input id="vat_number" type="vat_number"
                                        class="form-control @error('vat_number') is-invalid @enderror" name="vat_number"
                                        required autocomplete="new-vat_number">

                                    @error('vat_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="logo"
                                    class="col-md-4 col-form-label text-md-right">{{ __('logo') }}</label>

                                <div class="col-md-6">
                                    <input id="logo" type="logo"
                                        class="form-control @error('logo') is-invalid @enderror" name="logo" required
                                        autocomplete="new-logo">

                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success  background-green">
                                        {{ __('Create New Restaurant') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
