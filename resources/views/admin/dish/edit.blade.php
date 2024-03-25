@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="fs-4 text-secondary my-4">
                Modifica il tuo Piatto
            </h1>
        </div>
        @if ($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-12">
            <form action="{{ route('admin.dish.update', ['dish' => $dish->id]) }}" method="POST" class="form-control my-4" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label for="name" class="form-label">Nome Piatto</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $dish->name }}" required>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="ingredients" class="form-label">Ingredienti</label>
                <input type="text" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients" value="{{ $dish->ingredients }}" required>

                @error('ingredients')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" value="{{ $dish->description }}" required></textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $dish->price }}" required>

                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

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