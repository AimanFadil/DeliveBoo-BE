
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 justify-content-between align-items-center d-flex">
                <h1 class="fs-4 text-secondary my-4">
                    Lista Piatti
                </h1>
                <a href="{{ route('admin.dish.create') }}" class="btn btn-sm btn-success">Aggiungi un Piatto</a>
            </div>
            <div class="col-12">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>Nome piatto</th>
                            <th>Ingredienti</th>
                            <th>Descrizione</th>
                            <th>prezzo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dishes as $dish)
                            <tr>
                                <td>{{ $dish->name }}</td>
                                <td>{{ $dish->ingredients }}</td>
                                <td>{{ $dish->description }}</td>
                                <td>{{ $dish->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection