@extends('layouts.app')

@section('content')
    @if (count($dishes) > 0)
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
                                <th>Disponibile</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dishes as $dish)
                                <tr>
                                    <td>{{ $dish->name }}</td>
                                    <td>{{ $dish->ingredients }}</td>
                                    <td>{{ $dish->description }}</td>
                                    <td>{{ $dish->price }}</td>
                                    <td>
                                        @if ($dish->visible == 0)
                                            <span class="badge bg-danger">Non Disponibile</span>
                                        @else
                                            <span class="badge bg-success">Disponibile</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.dish.edit', ['dish' => $dish->id]) }}"
                                            class="btn btn-sm btn-warning me-1"><i
                                                class="fa-solid fa-pen-to-square"></i></a>

                                        <button type="button" class="btn_delete btn btn-sm btn-danger"
                                            data-bs-toggle="modal" data-bs-target="#modal_delete"
                                            data-dishid="{{ $dish->id }}" data-dishname="{{ $dish->name }}"
                                            data-type="dish">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.dish.modal_delete')
    @else
        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-center">
                    <div class="text-center">
                        <h1>Non hai ancora inserito nessun piatto</h1>
                        <a href="{{ route('admin.dish.create') }}" class="btn btn-sm btn-success">Aggiungi un Piatto</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
