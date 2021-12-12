@extends('layouts.app')

@section('template_title')
    {{ $room->name ?? 'Show Room' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Habitacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Numero de Habitacion:</strong>
                            {{ $room->num_hab }}
                        </div>
                        <div class="form-group">
                            <strong>Piso:</strong>
                            {{ $room->piso }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $room->descripsion }}
                        </div>
                        <div class="form-group">
                            <strong>Carateristicas:</strong>
                            {{ $room->carateristicas }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $room->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Habitacion:</strong>
                            {{ $room->tipo_habitacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
