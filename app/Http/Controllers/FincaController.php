<?php

namespace App\Http\Controllers;

use App\Models\Finca;
use App\Models\Reporte;
use Illuminate\Http\Request;

class FincaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fincas = Finca::orderBy('id', 'desc')->get();
        return view('fincas.index', compact('fincas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fincas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $finca = new Finca();
        $finca->guardarFinca($request->all());
        return redirect()->route('fincas.index')->with('info', 'Finca creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $fincas = Finca::orderBy('id', 'desc')->get();
        $finca = null;
        $reporte = [];
        return view('home', compact('fincas', 'finca', 'reporte'));
    }

    public function viewReport(Request $request)
    {
        $year = $request->ano;
        if ($year == 'Selecciona un año') {
            $year = date('Y');
        }
        $finca = Finca::find($request->finca);
        $fincas = Finca::orderBy('id', 'desc')->get();
        $reporte = Reporte::where([
            ['finca_id', '=', $request->finca],
            ['year', '=', $year],
        ])->orderBy('mes_id', 'asc')->get();
        return view('home', compact('fincas', 'finca', 'reporte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $finca = Finca::findOrFail($id);
        return view('fincas.edit', compact('finca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $finca = Finca::findOrFail($id);
        $finca->guardarFinca($request->all());
        return redirect()->route('fincas.index')->with('info', 'Finca actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $finca = Finca::findOrFail($id);
        $finca->delete();
        return redirect()->route('fincas.index')->with('info', 'Finca eliminada con éxito');
    }
}
