@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 justify-content-between align-items-center d-flex">
                <h1 class="fs-4  my-4 fw-bold colorgreen  ">
                    Lista Piatti
                </h1>
                <a href="{{ route('admin.dish.create') }}" class="btn btn-sm text-white hover-3">
                    <i class="fa-solid fa-plus fa-lg"></i>
                    Aggiungi un Piatto
                </a>
            </div>
            <div class="col-12">
                <table class="table table-success table-striped border-success container-shadow">
                    <thead>
                        <tr class="border">
                            <th class="w-dish text-success">Nome piatto</th>
                            <th class="text-success">Ingredienti</th>
                            <th class="text-success">Descrizione</th>
                            <th class="text-success">prezzo</th>
                            <th class="text-success">Disponibile</th>
                            <th class="text-success">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dishes as $dish)
                            <tr>
                                <td>
                                    <div class="h-100 w-100 hover-show-dishe">
                                        {{ $dish->name }}
                                    </div>
                                </td>
                                <td>{{ $dish->ingredients }}</td>
                                <td>{{ $dish->description }}</td>
                                <td>€{{ $dish->price }}</td>
                                <td>
                                    @if ($dish->visible == 0)
                                        <span class="badge bg-danger">Non Disponibile</span>
                                    @else
                                        <span class="badge bg-success">Disponibile</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.dish.edit', ['dish' => $dish->id]) }}"
                                        class="btn btn-sm btn-warning me-1 mt-1"><i
                                            class="fa-solid fa-pen-to-square "></i></a>

                                    <form action="{{ route('admin.dish.destroy', ['dish' => $dish->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger mt-1"><i
                                                class="fa-solid fa-trash"
                                                onsubmit="return confirm('Sei sicuro di voler eliminare questo Piatto?')"></i></i>
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
