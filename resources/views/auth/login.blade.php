@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-success-subtle border-2">
                    <div class="card-header background-green text-white">{{ __('Login') }}</div>

                    <div class="card-body bg-forms">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-4 row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail <span
                                        class="text-danger fw-bold">*</span> </label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div id="email_error" class="text-danger"></div>
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}
                                    <span class="text-danger fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div id="pass_error" class="text-danger"></div>
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check-inline ">
                                        <div class="d-flex">
                                            <input class="input-checkbox m-0" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label  fw-semibold align-self-center ms-1"
                                                for="remember">
                                                {{ __('Ricordami') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" id="login_validation"
                                        class="btn btn-primary btn-success  background-green">
                                        {{ __('Accedi') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link link-success" href="{{ route('password.request') }}">
                                            {{ __('Recupera Password') }}
                                        </a>
                                    @endif
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
