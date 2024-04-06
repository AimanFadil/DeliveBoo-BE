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
                                    <th class="text-success">Numero Ordine</th>
                                    <th class="text-success">data e ora</th>
                                    <th class="text-success">Prezzo</th>
                                    <th class="text-success">Nome cliente</th>
                                    <th class="text-success">e-mail cliente</th>
                                    <th class="text-success">indirizzo cliente</th>
                                    <th class="text-success">telefono cliente</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($orders as $order)
                                    <tr>
                                        <td><a href="{{ route('admin.order.show', ['order' => $order->id]) }}"
                                                class=" hover-show-ordere">{{ $order->id }}
                                            </a></td>
                                        <td>
                                            <div class="h-100 w-100 ">


                                                {{ $data_italiana = strftime('%d/%m/%Y', strtotime($order->created_at)) }}
                                            </div>
                                        </td>
                                        {{-- <td>{{ $order->created_at }}</td> --}}
                                        <td>{{ number_format($order->price, 2, ',', '.') }}€</td>
                                        <td>{{ $order->name }}</td>
                                        <td>
                                            {{ $order->mail }}
                                        </td>
                                        <td>
                                            {{ $order->address }}
                                        </td>
                                        <td>
                                            @if ($order->phone != null)
                                                <a href="">{{ $order->phone }}</a>
                                            @else
                                                <span class="text-danger">non inserito</span>
                                            @endif

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
