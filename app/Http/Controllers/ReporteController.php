<?php

namespace App\Http\Controllers;

use App\Models\Finca;
use App\Models\Mes;
use App\Models\Reporte;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fincas = Finca::orderBy('id', 'desc')->get();
        $meses = Mes::all();
        return view('reportes.create', compact('fincas', 'meses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombreF' => 'required',
            'mes' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('reportes.create')->with('info', 'Debe seleccionar una finca y un mes');
        }

        $verifiReport = Reporte::where([
            ['finca_id', '=', $request->nombreF],
            ['mes_id', '=', $request->mes],
            ['year', '=', $request->year == null ? date('Y') : $request->year],
        ])->first();

        if (!is_null($verifiReport)) {
            return redirect()->route('reportes.create')->with('info', 'Ya hay un reporte para este mes y en la finca seleccionada');
        } else {
            $reporte = new Reporte();
            $reporte->guardarReporte($request->all());
            return redirect()->route('fincas.show')->with('success', 'Reporte creado con éxito');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reporte = Reporte::findOrFail($id);
        return view('reportes.edit', compact('reporte'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reporte = Reporte::findOrFail($id);
        $request['nombreF'] = $reporte->finca_id;
        $request['mes'] = $reporte->mes_id;
        $request['year'] = $reporte->year;
        $reporte->guardarReporte($request->all());
        return redirect()->route('fincas.show')->with('success', 'Reporte actualizado con éxito');
    }
}
