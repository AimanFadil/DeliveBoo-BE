@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-success-subtle border-2">
                    <div class="card-header background-green text-white">{{ __('Register') }}</div>

                    <div class="card-body bg-forms ">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-4 row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome <span
                                        class="text-danger fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div id="name_error" class="text-danger"></div>
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail <span
                                        class="text-danger fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div id="email_error" class="text-danger"></div>
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"> Password <span
                                        class="text-danger fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control"
                                        @error('password') is-invalid @enderror name="password" required
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Conferma
                                    Password <span class="text-danger fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                    <div id="pass_error" class="text-danger"></div>
                                </div>
                            </div>

                            <div class="mb-4 row mb-0">
                                <div class="col-md-6 offset-md-4 d-flex justify-content-end">
                                    <button type="submit" id="register_validation"
                                        class="btn btn-success  background-green">
                                        {{ __('Registrati') }}
                                    </button>
                                </div>
                            </div>

                            <div class="col-12">
                                i campi contrassegnati con " <strong class="text-danger">*</strong> " sono obbligatori
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
