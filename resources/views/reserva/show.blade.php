@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? 'Show Reserva' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Reserva:</strong>
                            {{ $reserva->tipo_reserva }}
                        </div>
                        <div class="form-group">
                            <strong>Checkin:</strong>
                            {{ $reserva->checkIn }}
                        </div>
                        <div class="form-group">
                            <strong>Checkout:</strong>
                            {{ $reserva->checkOut }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $reserva->observacion }}
                        </div>
                        <div class="form-group">
                            <strong>Hab Id:</strong>
                            {{ $reserva->hab_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Id:</strong>
                            {{ $reserva->cli_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $reserva->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
