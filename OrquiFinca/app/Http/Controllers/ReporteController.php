<?php

namespace App\Http\Controllers;

use App\Models\Finca;
use App\Models\Mes;
use App\Models\Reporte;
use Validator;
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

        $reporte = new Reporte();
        $reporte->finca_id = $request->nombreF;
        $reporte->mes_id = $request->mes;
        $reporte->year = $request->year == null ? date('Y') : $request->year;
        $reporte->higiene = $request->higiene == 1 ? 'x' : '';
        $reporte->dyv = $request->dyv == 1 ? 'x' : '';
        $reporte->vacunaA = $request->vacunaA == 1 ? 'x' : '';
        $reporte->vacunaR = $request->vacunaR == 1 ? 'x' : '';
        $reporte->vacunaC = $request->vacunaC == 1 ? 'x' : '';
        $reporte->vacunaL = $request->vacunaL == 1 ? 'x' : '';
        $reporte->anaplasma = $request->anaplasma == 1 ? 'x' : '';
        $reporte->controlGyM = $request->controlGyM == 1 ? 'x' : '';
        $reporte->controlM = $request->controlM == 1 ? 'x' : '';
        $reporte->controlCyO = $request->controlCyO == 1 ? 'x' : '';
        $reporte->vacasP = $request->vacasP;
        $reporte->vacasE = $request->vacasE;
        $reporte->terneros = $request->terneros;
        $reporte->animalesE = $request->animalesE;
        $reporte->vendidos = $request->vendidos;
        $reporte->muertos = $request->muertos;
        $reporte->prevencion = $request->prevencion;
        $reporte->tratamiento = $request->tratamiento;
        $reporte->via = $request->via;
        if ($reporte->save()) {
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
