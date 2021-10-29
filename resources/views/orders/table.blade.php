<div class="table-responsive">
    <table class="table" id="orders-table">
        <thead>
            <tr>
                <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Time Of Dispatch</th>
        <th>Time Of Arrival</th>
        <th>Name Of Handler</th>
        <th>Name Of Reciever</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->product }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->price }}</td>
            <td>{{ $order->time_of_dispatch }}</td>
            <td>{{ $order->time_of_arrival }}</td>
            <td>{{ $order->name_of_handler }}</td>
            <td>{{ $order->name_of_reciever }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orders.show', [$order->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('orders.edit', [$order->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
