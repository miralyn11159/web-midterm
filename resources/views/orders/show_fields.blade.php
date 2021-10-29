<!-- Product Field -->
<div class="col-sm-12">
    {!! Form::label('product', 'Product:') !!}
    <p>{{ $order->product }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $order->quantity }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $order->price }}</p>
</div>

<!-- Time Of Dispatch Field -->
<div class="col-sm-12">
    {!! Form::label('time_of_dispatch', 'Time Of Dispatch:') !!}
    <p>{{ $order->time_of_dispatch }}</p>
</div>

<!-- Time Of Arrival Field -->
<div class="col-sm-12">
    {!! Form::label('time_of_arrival', 'Time Of Arrival:') !!}
    <p>{{ $order->time_of_arrival }}</p>
</div>

<!-- Name Of Handler Field -->
<div class="col-sm-12">
    {!! Form::label('name_of_handler', 'Name Of Handler:') !!}
    <p>{{ $order->name_of_handler }}</p>
</div>

<!-- Name Of Reciever Field -->
<div class="col-sm-12">
    {!! Form::label('name_of_reciever', 'Name Of Reciever:') !!}
    <p>{{ $order->name_of_reciever }}</p>
</div>

