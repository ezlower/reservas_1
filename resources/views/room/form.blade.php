<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('num_hab') }}
            {{ Form::text('num_hab', $room->num_hab, ['class' => 'form-control' . ($errors->has('num_hab') ? ' is-invalid' : ''), 'placeholder' => 'Num Hab']) }}
            {!! $errors->first('num_hab', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('piso') }}
            {{ Form::text('piso', $room->piso, ['class' => 'form-control' . ($errors->has('piso') ? ' is-invalid' : ''), 'placeholder' => 'Piso']) }}
            {!! $errors->first('piso', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripsion') }}
            {{ Form::text('descripsion', $room->descripsion, ['class' => 'form-control' . ($errors->has('descripsion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripsion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('carateristicas') }}
            {{ Form::text('carateristicas', $room->carateristicas, ['class' => 'form-control' . ($errors->has('carateristicas') ? ' is-invalid' : ''), 'placeholder' => 'Carateristicas']) }}
            {!! $errors->first('carateristicas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $room->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_habitacion') }}
            {{ Form::text('tipo_habitacion', $room->tipo_habitacion, ['class' => 'form-control' . ($errors->has('tipo_habitacion') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Habitacion']) }}
            {!! $errors->first('tipo_habitacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
