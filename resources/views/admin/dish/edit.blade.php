@extends('layouts.app')

@section('content')
    @if (Auth::user()->restaurant()->exists('user_id') && $dish->restaurant_id === Auth::user()->restaurant->id)
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-4  my-4 colorgreen fw-bold">
                        Modifica il tuo Piatto
                    </h1>
                </div>
                <div class="col-12 ">
                    <form action="{{ route('admin.dish.update', ['dish' => $dish->id]) }}" method="POST"
                        class="form-control my-4 border-success-subtle border-2 bg-forms colorgreen container-shadow"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <label for="name" class="form-label fw-semibold">Nome Piatto</label>
                        <span class="text-danger fw-bold">*</span>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name', $dish->name) }}">
                        <div id="nameError" class="text-danger"></div>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <hr>

                        <label for="ingredients" class="form-label fw-semibold">Ingredienti</label>
                        <input type="text" class="form-control @error('ingredients') is-invalid @enderror"
                            id="ingredients" name="ingredients" value="{{ old('ingredients', $dish->ingredients) }}">
                        <div id="ingredientsError" class="text-danger"></div>

                        @error('ingredients')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <hr>

                        <label for="description" class="form-label fw-semibold">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            rows="3">{{ $dish->description }}</textarea>
                        <div id="descriptionError" class="text-danger"></div>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <hr>

                        <label for="price" class="form-label fw-semibold">Prezzo</label>
                        <span class="text-danger fw-bold">*</span>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" step=".01" value="{{ old('price', $dish->price) }}">
                        <div id="priceError" class="text-danger"></div>

                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <hr>

                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" class="form-control" id="image" name="image">

                        <hr>

                        <label for="visible" class="form-label">Disponibile</label>
                        <select id="visible" name="visible" class="form-select"
                            value="{{ old('visible', $dish->visible) }}">
                            <option value="1">si</option>
                            <option value="0">no</option>
                        </select>


                        <div class="d-flex ">
                            <div class="col-11 mt-3 ">
                                i campi contrassegnati con " <strong class="text-danger">*</strong> " sono obbligatori
                            </div>
                            <div class="col-1 justify-content-end">
                                <button type="submit" id="submit-button"
                                    class="btn btn-sm btn-success fw-semibold m-4 p-2 hover-3">Modifica</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-danger text-center display-4">Il piatto che stai cercando non esiste</h2>

                </div>
            </div>
        </div>
    @endif
@endSection
