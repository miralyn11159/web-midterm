<!-- Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product', 'Product:') !!}
    {!! Form::text('product', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::text('quantity', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Time Of Dispatch Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_of_dispatch', 'Time Of Dispatch:') !!}
    {!! Form::text('time_of_dispatch', null, ['class' => 'form-control','id'=>'time_of_dispatch']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#time_of_dispatch').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Time Of Arrival Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_of_arrival', 'Time Of Arrival:') !!}
    {!! Form::text('time_of_arrival', null, ['class' => 'form-control','id'=>'time_of_arrival']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#time_of_arrival').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Name Of Handler Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_of_handler', 'Name Of Handler:') !!}
    {!! Form::text('name_of_handler', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Name Of Reciever Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_of_reciever', 'Name Of Reciever:') !!}
    {!! Form::text('name_of_reciever', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>