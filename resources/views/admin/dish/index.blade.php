@extends('layouts.app')

@section('content')

    @if (count($dishes) > 0)
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
                                <th class="text-success">Prezzo</th>
                                <th class="text-success">Disponibile</th>
                                <th class="text-success">Tools</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dishes as $dish)
                                <tr>
                                    <td>
                                        <div class="h-100 w-100 ">

                                            <a href="{{ route('admin.dish.show', ['dish' => $dish->id]) }}"
                                                class=" hover-show-dishe">
                                                {{ $dish->name }}</a>
                                        </div>
                                    </td>
                                    <td>{{ substr($dish->ingredients, 0, 20) }}...</td>
                                    <td>{{ substr($dish->description, 0, 20) }}...</td>
                                    <td>{{ number_format($dish->price, 2, ',', '.') }}€</td>
                                    <td>
                                        @if ($dish->visible == 0)
                                            <span class="badge bg-danger">Non Disponibile</span>
                                        @else
                                            <span class="badge bg-success">Disponibile</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex w-100">


                                            <span>
                                                <div class="tooltip_">
                                                    <a href="{{ route('admin.dish.edit', ['dish' => $dish->id]) }}"
                                                        class="btn btn-sm btn-warning me-2 mt-1">
                                                        <i class="fa-solid fa-pen-to-square "></i>
                                                        <span
                                                            class="tooltiptext_ colorgreen fw-bold border border-success">Modifica</span>
                                                    </a>
                                                </div>
                                            </span>
                                            <span class="w-50">
                                                <div class="tooltip_">
                                                    <form action="{{ route('admin.dish.destroy', ['dish' => $dish->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="button" class="btn_delete btn btn-sm btn-danger mt-1"
                                                            data-bs-toggle="modal" data-bs-target="#modal_delete"
                                                            data-dishid="{{ $dish->id }}"
                                                            data-dishname="{{ $dish->name }}" data-type="dish">
                                                            <i class="fa-solid fa-trash "></i>
                                                        </button>
                                                        <span
                                                            class="tooltiptext_ colorgreen fw-bold border border-success">Elimina</span>
                                                    </form>
                                                </div>
                                            </span>
                                        </div>
                                    </td>
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
