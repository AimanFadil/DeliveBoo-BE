@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fs-4 text-secondary my-4">
                    Aggiungi un nuovo Piatto
                </h1>
                <img src="" alt="">
            </div>
            <div class="col-12">
                <form action="{{ route('admin.dish.store') }}" method="POST" class="form-control my-4"
                    enctype="multipart/form-data">
                    @csrf

                    <label for="name" class="form-label">Nome Piatto</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Inserisci il nome del Piatto">

                    <label for="ingredients" class="form-label">Ingredienti</label>
                    <input type="text" class="form-control" id="ingredients" name="ingredients"
                        placeholder="Inserisci gli ingredienti">

                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="Inserisci la descrizione del Piatto"></textarea>

                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price"
                        placeholder="Inserisci il prezzo del Piatto" step="any">

                    <label for="image" class="form-label">Immagine</label>
                    <input type="file" class="form-control" id="image" name="image">

                    <label for="visible" class="form-label">Disponibile</label>
                    <select id="visible" name="visible">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>

                    <button type="submit" class="btn btn-sm btn-success">Aggiungi</button>
                </form>
            </div>
        </div>
    @endSection
