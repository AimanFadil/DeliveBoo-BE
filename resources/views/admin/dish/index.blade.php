
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
                            <th>Prezzo</th>
                            <th>Disponibile</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dishes as $dish)
                            <tr>
                                <td><a href="{{ route('admin.dish.show', ['dish' => $dish->id])}}" class="text-decoration-none text-black">
                                    {{ $dish->name }}</a></td>
                                <td>{{ $dish->ingredients }}</td>
                                <td>{{ $dish->description }}</td>
                                <td>{{ $dish->price }}€</td>
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
                                    
                                    <form action="{{ route('admin.dish.destroy', ['dish' => $dish->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger my-1"><i
                                                class="fa-solid fa-trash" onsubmit="return confirm('Sei sicuro di voler eliminare questo Piatto?')"></i></i>
                                        </button>
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection