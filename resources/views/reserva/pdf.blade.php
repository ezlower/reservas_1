<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type=text/cdd>
</head>

<body>
    <h2>Lista de Reservas</h2>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>


                <th>Tipo Reserva</th>
                <th>Checkin</th>
                <th>Checkout</th>
                <th>Observacion</th>
                <th>Habitacion</th>
                <th>Cliente</th>


                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
            <tr>
                

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

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
