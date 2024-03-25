@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fs-4  mt-4  colorgreen fw-bold">
                    Aggiungi un nuovo Piatto
                </h1>
                <img src="" alt="">
            </div>
            <div class="col-12">

                <form action="{{ route('admin.dish.store') }}" method="POST"
                    class="form-control my-4 border-success-subtle border-2 bg-forms colorgreen container-shadow"
                    enctype="multipart/form-data">
                    @csrf

                    <label for="name" class="form-label fw-semibold">Nome Piatto</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Inserisci il nome del Piatto">

                    <hr>

                    <label for="ingredients" class="form-label fw-semibold">Ingredienti</label>
                    <input type="text" class="form-control" id="ingredients" name="ingredients"
                        placeholder="Inserisci gli ingredienti">

                    <hr>

                    <label for="description" class="form-label fw-semibold">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="Inserisci la descrizione del Piatto"></textarea>

                    <hr>

                    <label for="price" class="form-label fw-semibold">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price"
                        placeholder="Inserisci il prezzo del Piatto">

                    <hr>

                    <label for="image" class="form-label fw-semibold">Immagine</label>
                    <input type="file" class="form-control" id="image" name="image">

                    <hr>

                    <div class="col-12 d-flex justify-content-between">
                        <div>
                            <label for="visible" class="form-label fw-semibold">Disponibile</label>
                            <select id="visible" name="visible">
                                <option value="1">1</option>
                                <option value="0">0</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-sm hover-3 my-3 text-white p-2">Aggiungi</button>
                    </div>
                </form>
            </div>
        </div>
    @endSection
