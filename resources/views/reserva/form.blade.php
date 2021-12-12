<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('tipo_reserva') }}
            {{ Form::text('tipo_reserva', $reserva->tipo_reserva, ['class' => 'form-control' . ($errors->has('tipo_reserva') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Reserva']) }}
            {!! $errors->first('tipo_reserva', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('check In') }}
            {{ Form::date('checkIn', $reserva->checkIn, ['class' => 'form-control' . ($errors->has('checkIn') ? ' is-invalid' : ''), 'placeholder' => 'checkIn']) }}
            {!! $errors->first('checkIn', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('check Out') }}
            {{ Form::date('checkOut', $reserva->checkOut, ['class' => 'form-control' . ($errors->has('checkOut') ? ' is-invalid' : ''), 'placeholder' => 'Checkout']) }}
            {!! $errors->first('checkOut', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observacion') }}
            {{ Form::textarea('observacion', $reserva->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : ''), 'placeholder' => 'Observacion']) }}
            {!! $errors->first('observacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('Habitacion') }}
            {{ Form::select('hab_id',$habitaciones, $reserva->hab_id, ['class' => 'form-control' . ($errors->has('hab_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('hab_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>



        <div class="form-group">
            {{ Form::label('Cliente') }}
            {{ Form::select('cli_id',$clientes,$reserva->cli_id, ['class' => 'form-control' . ($errors->has('cli_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('cli_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Usuario') }}
            {{ Form::text('user_id', $reserva->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
