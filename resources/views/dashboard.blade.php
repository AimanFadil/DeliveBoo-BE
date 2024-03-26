@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
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
                    @if (!Auth::user()->restaurant()->exists('user_id'))
                        <a class="btn btn-sm btn-success mt-1 me-3"
                            href="{{ url('restaurants/create') }}">{{ __('Create your Restaurant') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
