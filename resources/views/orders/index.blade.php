<div class="contaneir">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th>Data e Ora</th>
                        <th>Nome Cliente</th>
                        <th>Indirizzo di consegna</th>
                        <th>Mail Cliente</th>
                        <th>Prezzo totale</th>
                        <th> TOOLS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->date_delivery }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->mail }}</td>
                            <td>{{ $order->price }}</td>
                            <td class="d-flex">
                                {{-- <a href="{{ route('admin.order.show', ['order' => $order]) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.order.edit', ['order' => $order]) }}"
                                    class="btn btn-sm btn-warning mx-2">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <button class="btn btn-sm btn-danger btn_delete" data-orderid='{{ $order->id }}'
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    data-name='{{ $order->name }}'>
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>