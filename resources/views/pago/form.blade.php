<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('comprobante') }}
            {{ Form::text('comprobante', $pago->comprobante, ['class' => 'form-control' . ($errors->has('comprobante') ? ' is-invalid' : ''), 'placeholder' => 'Comprobante']) }}
            {!! $errors->first('comprobante', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_pago') }}
            {{ Form::text('total_pago', $pago->total_pago, ['class' => 'form-control' . ($errors->has('total_pago') ? ' is-invalid' : ''), 'placeholder' => 'Total Pago']) }}
            {!! $errors->first('total_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_emision') }}
            {{ Form::text('fecha_emision', $pago->fecha_emision, ['class' => 'form-control' . ($errors->has('fecha_emision') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Emision']) }}
            {!! $errors->first('fecha_emision', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_pago') }}
            {{ Form::text('fecha_pago', $pago->fecha_pago, ['class' => 'form-control' . ($errors->has('fecha_pago') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Pago']) }}
            {!! $errors->first('fecha_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('res_id') }}
            {{ Form::text('res_id', $pago->res_id, ['class' => 'form-control' . ($errors->has('res_id') ? ' is-invalid' : ''), 'placeholder' => 'Res Id']) }}
            {!! $errors->first('res_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>