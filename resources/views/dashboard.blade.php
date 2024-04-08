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
                        <div class="d-none d-lg-block mt-4">
                            <table class="table table-success table-striped border-success container-shadow">
                                <thead>
                                    <tr class="border">
                                        {{-- <th class="w-dish text-success">Nome piatto</th>s --}}
                                        <th></th>
                                        <th class="text-success">data e ora</th>
                                        <th class="text-success text-center">Numero ordine</th>
                                        <th class="text-success">Prezzo</th>
                                        <th class="text-success ">Nome cliente</th>
                                        <th class="text-success">indirizzo cliente</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>
                                                <button type="button" class="btn btn-order btn-success p-1 ms-2"
                                                    onclick="location.href='{{ route('admin.order.show', ['order' => $order->id]) }}'">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <div class="">
                                                    {{ $data_italiana = strftime('%d/%m/%Y %H:%M', strtotime($order->created_at)) }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center ">
                                                    {{ $order->id }}
                                                </div>
                                            </td>
                                            {{-- <td>{{ $order->created_at }}</td> --}}
                                            <td>{{ number_format($order->price, 2, ',', '.') }}€</td>
                                            <td>{{ $order->name }}</td>
                                            <td>
                                                {{ $order->address }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- phone format table --}}
                        <div class="d-block d-lg-none mt-4">
                            <table class="table table-success table-striped border-success container-shadow">
                                <thead>
                                    <tr class="border">
                                        {{-- <th class="w-dish text-success">Nome piatto</th>s --}}
                                        <th></th>
                                        <th class="text-success">data e ora</th>
                                        <th class="text-success text-center">Numero ordine</th>
                                        <th class="text-success ">Nome cliente</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>
                                                <button type="button" class="btn btn-order btn-success p-1 ms-2"
                                                    onclick="location.href='{{ route('admin.order.show', ['order' => $order->id]) }}'">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <div class="">
                                                    {{ $data_italiana = strftime('%d/%m/%Y %H:%M', strtotime($order->created_at)) }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center ">
                                                    {{ $order->id }}
                                                </div>
                                            </td>
                                            {{-- <td>{{ $order->created_at }}</td> --}}
                                            <td>{{ $order->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
