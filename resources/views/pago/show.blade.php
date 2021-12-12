@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? 'Show Pago' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Comprobante:</strong>
                            {{ $pago->comprobante }}
                        </div>
                        <div class="form-group">
                            <strong>Total Pago:</strong>
                            {{ $pago->total_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Emision:</strong>
                            {{ $pago->fecha_emision }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Pago:</strong>
                            {{ $pago->fecha_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Res Id:</strong>
                            {{ $pago->res_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
