@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (Auth::user()->restaurant()->exists('user_id'))
                    <div class="d-flex justify-content-center flex-column align-items-center gap-1 mt-5">
                        <div class="logo">
                            @if ($restaurant->logo != null)
                                <img src="{{ asset('/storage/' . $restaurant->logo) }}" alt="{{ $restaurant->business_name }}"
                                    class="roundede ">
                            @else
                                <img src="{{ asset('/storage/images/default-restaurant-logo.png') }}"
                                    alt="{{ $restaurant->business_name }}" class="roundede ">
                            @endif
                        </div>
                        <h2> {{ $restaurant->business_name }} </h2>
                        <h5>Indirizzo: {{ $restaurant->address }}</h5>
                        <h6>P.Iva: {{ $restaurant->vat_number }}</h6>
                        <div>Tipologie:</div>
                        <div>
                            @foreach ($typologies as $typology)
                                <div class="me-3 d-inline fst-italic">{{ $typology->name }}</div>
                            @endforeach
                        </div>
                    </div>
                    @if (count($orders) != 0)
                        <table class="table table-success table-striped border-success container-shadow">
                            <thead>
                                <tr class="border">
                                    {{-- <th class="w-dish text-success">Nome piatto</th>s --}}
                                    <th class="text-success">data e ora</th>
                                    <th class="text-success">Prezzo</th>
                                    <th class="text-success ">Nome cliente</th>
                                    <th class="text-success d-none d-lg-block">e-mail cliente</th>
                                    <th class="text-success">indirizzo cliente</th>
                                    <th class="text-success d-none d-lg-block">telefono cliente</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            <div class="h-100 w-100 ">

                                                <button type="button" class="btn btn-order"
                                                    onclick="location.href='{{ route('admin.order.show', ['order' => $order->id]) }}'">
                                                    {{ $data_italiana = strftime('%d/%m/%Y %H:%M', strtotime($order->created_at)) }}
                                                </button>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $order->created_at }}</td> --}}
                                        <td>{{ number_format($order->price, 2, ',', '.') }}€</td>
                                        <td>{{ $order->name }}</td>
                                        <td class=" d-none d-lg-block">
                                            {{ $order->mail }}
                                        </td>
                                        <td>
                                            {{ $order->address }}
                                        </td>
                                        <td class=" d-none d-lg-block ">
                                            @if ($order->phone != null)
                                                <span class="badge bg-danger">{{ $order->phone }}</span>
                                            @else
                                                <span class="badge bg-success">non inserito</span>
                                            @endif
                                            {{-- <div class="d-flex w-100">


                                                <span>
                                                    <div class="tooltip_">
                                                        <a href="{{ route('admin.order.edit', ['order' => $order->id]) }}"
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
                                                </span> --}}
            </div>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            @endif
        @else
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h2 class="text-success text-center display-4">Crea il tuo ristorante</h2>
                        <div class="col-12 justify-content-center d-flex">

                            <a class="btn btn-sm text-white hover-3 mt-4 "
                                href="{{ url('restaurants/create') }}">{{ __('Crea il tuo ristorante') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    </div>
@endsection
