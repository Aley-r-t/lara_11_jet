<?php

namespace App\Http\Controllers;

use App\Models\reservas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = reservas::all();
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        return view('reservas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:users,id',
            'espacio_id' => 'required|exists:espacios,id',
            'peso_container' => 'required|numeric',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
        ]);

        $reserva = new reservas($request->all());
        $reserva->user_id = Auth::id();
        $reserva->save();

        return redirect()->route('reservas.index')->with('success', 'Reserva creada exitosamente.');
    }
}