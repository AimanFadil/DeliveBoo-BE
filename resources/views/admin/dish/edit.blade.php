@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="fs-4 text-secondary my-4">
                Modifica il tuo Piatto
            </h1>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.dish.update', ['dish' => $dish->id]) }}" method="POST" class="form-control my-4" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label for="name" class="form-label">Nome Piatto</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $dish->name }}">

                <label for="ingredients" class="form-label">Ingredienti</label>
                <input type="text" class="form-control" id="ingredients" name="ingredients" value="{{ $dish->ingredients }}">

                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" value="{{ $dish->description }}"></textarea>

                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $dish->price }}">

                <label for="image" class="form-label">Immagine</label>
                <input type="file" class="form-control" id="image" name="image">

                <label for="visible" class="form-label">Disponibile</label>
                <select id="visible" name="visible" class="form-select" value="{{ $dish->visible }}">
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>

                <button type="submit" class="btn btn-sm btn-success my-2">Modifica</button>
            </form>
    </div>
</div>
@endSection