@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fs-4  mt-4  colorgreen fw-bold">
                    Aggiungi un nuovo Piatto
                </h1>
                <div class="col-12">

                    <form action="{{ route('admin.dish.store') }}" method="POST"
                        class="form-control my-4 border-success-subtle border-2 bg-forms colorgreen container-shadow"
                        enctype="multipart/form-data">
                        @csrf



                        <label for="name" class="form-label fw-semibold ">
                            Nome Piatto
                            <span class="text-danger fw-bold">*</span>
                        </label>

                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}" required>
                        <div id="nameError" class="text-danger"></div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <hr>

                        <label for="ingredients" class="form-label fw-semibold">Ingredienti</label>
                        <input type="text" class="form-control @error('ingredients') is-invalid @enderror"
                            id="ingredients" name="ingredients" value="{{ old('ingredients') }}">

                        <div id="ingredientsError" class="text-danger"></div>
                        @error('ingredients')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <hr>

                        <label for="description" class="form-label fw-semibold">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            rows="3">{{ old('description') }}</textarea>

                        <div id="descriptionError" class="text-danger"></div>
                        @error('desrciption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <hr>

                        <label for="price" class="form-label fw-semibold">
                            Prezzo
                            <span class="text-danger fw-bold">*</span>
                        </label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                            step=".01" name="price" value="{{ old('price') }}">

                        <div id="priceError" class="text-danger"></div>
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
                                    <option value="1">si</option>
                                    <option value="0">no</option>
                                </select>
                            </div>
                            <button id="submit-button" type="submit"
                                class="btn btn-sm hover-3 my-3 text-white p-2">Aggiungi</button>
                        </div>
                        <div class="col-12">
                            i campi contrassegnati con " <strong class="text-danger">*</strong> " sono obbligatori
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endSection
