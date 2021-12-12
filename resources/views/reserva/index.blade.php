@extends('adminlte::page')

@section('template_title')
Reserva
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Reserva') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('reservas.pdf') }}" class="btn btn-primary btn-sm" data-placement="left">
                                {{ __('Reporte') }}
                            </a>

                            <a href="{{ route('reservas.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Agregar reserva') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Tipo Reserva</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Observacion</th>
                                    <th>Habitacion</th>
                                    <th>Cliente</th>
                                    <th>Usuario</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservas as $reserva)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>
                                        {{ $reserva->tipo_reserva }}
                                    </td>
                                    <td>{{ $reserva->checkIn }}</td>
                                    <td>{{ $reserva->checkOut }}</td>
                                    <td>{{ $reserva->observacion }}</td>
                                    <td>

                                        {{ $reserva->room->num_hab }}
                                    </td>
                                    <td>{{ $reserva->cliente->nombre }}</td>
                                    <td>{{ $reserva->user_id }}</td>

                                    <td>
                                        <form action="{{ route('reservas.destroy',$reserva->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('reservas.show',$reserva->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('reservas.edit',$reserva->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $reservas->links() !!}
        </div>
    </div>
</div>
@endsection
