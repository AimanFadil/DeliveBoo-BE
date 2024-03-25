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


                    <label for="name" class="form-label fw-semibold">Nome Piatto</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $dish->name }}">

                    <hr>

                    <label for="ingredients" class="form-label fw-semibold">Ingredienti</label>
                    <input type="text" class="form-control" id="ingredients" name="ingredients"
                        value="{{ $dish->ingredients }}">

                    <hr>

                    <label for="description" class="form-label fw-semibold">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3" value="{{ $dish->description }}"></textarea>

                    <hr>

                    <label for="price" class="form-label fw-semibold">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $dish->price }}">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-success fw-semibold m-4 p-2 hover-3">Modifica</button>
                    </div>



                </form>
            </div>
        </div>
    @endSection
