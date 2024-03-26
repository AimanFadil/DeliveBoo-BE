@extends('layouts.app')

@section('content')
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


                    <label for="name" class="form-label fw-semibold">
                        Nome Piatto
                        <span class="text-danger fw-bold">*</span>
                    </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') }}">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <hr>

                    <label for="ingredients" class="form-label fw-semibold">Ingredienti</label>
                    <input type="text" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients"
                        name="ingredients" value="{{ old('ingredients') }}">

                    @error('ingredients')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <hr>

                    <label for="description" class="form-label fw-semibold">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                        rows="3">{{ old('description') }}</textarea>


                    @error('description')
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
                        name="price" value="{{ old('price') }}">


                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="image" class="form-label">Immagine</label>
                    <input type="file" class="form-control" id="image" name="image">

                    <label for="visible" class="form-label">Disponibile</label>
                    <select id="visible" name="visible" class="form-select" value="{{ $dish->visible }}">
                        <option value="1">si</option>
                        <option value="0">no</option>
                    </select>

                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-success fw-semibold m-4 p-2 hover-3">Modifica</button>
                    </div>



                </form>
            </div>
        </div>
    </div>
@endSection
