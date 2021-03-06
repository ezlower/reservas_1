<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Room;
use App\Models\Cliente;
use App\Models\Pago;
use Illuminate\Http\Request;
use PDF;
/**
 * Class ReservaController
 * @package App\Http\Controllers
 */
class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::paginate();

        return view('reserva.index', compact('reservas'))
            ->with('i', (request()->input('page', 1) - 1) * $reservas->perPage());
    }
    public function pdf()
    {
        $reservas = Reserva::paginate();

        $pdf = PDF::loadView('reserva.pdf',['reservas'=>$reservas]);

        return $pdf->stream();
        //return $pdf->download('__reservas.pdf');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reserva = new Reserva();
        $habitaciones = Room::pluck('num_hab', 'id');
        $clientes = Cliente::pluck('paterno', 'id');
        //$cliente = Cliente::pluck('nombre','id');

        return view('reserva.create', compact('reserva', 'habitaciones', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Reserva::$rules);

        $reserva = Reserva::create($request->all());

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = Reserva::find($id);

        return view('reserva.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = Reserva::find($id);
        $habitaciones = Room::pluck('num_hab', 'id');
        $clientes = Cliente::pluck('paterno', 'id');
        return view('reserva.edit', compact('reserva', 'habitaciones', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reserva $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        request()->validate(Reserva::$rules);

        $reserva->update($request->all());

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reserva = Reserva::find($id)->delete();

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva deleted successfully');
    }
}
