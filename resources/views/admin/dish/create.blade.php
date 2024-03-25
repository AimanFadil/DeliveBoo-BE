@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fs-4  mt-4  colorgreen fw-bold">
                    Aggiungi un nuovo Piatto
                </h1>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-12">

                    <form action="{{ route('admin.dish.store') }}" method="POST"
                        class="form-control my-4 border-success-subtle border-2 bg-forms colorgreen container-shadow"
                        enctype="multipart/form-data">
                        @csrf


                        <label for="name" class="form-label fw-semibold ">Nome Piatto</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}" required>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <hr>

                        <label for="ingredients" class="form-label fw-semibold">Ingredienti</label>
                        <input type="text" class="form-control @error('ingredients') is-invalid @enderror"
                            id="ingredients" name="ingredients" value="{{ old('ingredients') }}">

                        @error('ingredients')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <hr>

                        <label for="description" class="form-label fw-semibold">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            rows="3" required>{{ old('description') }}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <hr>

                        <label for="price" class="form-label fw-semibold">Prezzo</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" value="{{ old('price') }}" required>

                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

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
