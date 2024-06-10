<?php
namespace App\Http\Controllers;

use App\Http\Requests\TorneoRequest;
use App\Models\Tenista;
use App\Models\Torneo;
use Exception;

class TorneoController extends Controller
{
    public function index()
    {
        $torneos = Torneo::all();
        return view('torneos.index', compact('torneos'));
    }

    public function create()
    {
        $tenistas = Tenista::all();
        return view('torneos.create', compact('tenistas'));
    }

    public function store(TorneoRequest $request)
    {
        try {
            $torneo = new Torneo();
            $torneo->ubicacion = $request->ubicacion;
            $torneo->modo = $request->modo;
            $torneo->categoria = $request->categoria;
            $torneo->superficie = $request->superficie;
            $torneo->entradas = $request->entradas;
            $torneo->premio = $this->calculatePremio($request->categoria);
            $torneo->fechaInicio = $request->fechaInicio;
            $torneo->fechaFinalizacion = $request->fechaFinalizacion;
            $torneo->save();

            return redirect()->route('torneos.index')->with('success', 'Torneo creado correctamente.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al crear el torneo: ' . $e->getMessage());
        }
    }

    public function edit(Torneo $torneo)
    {
        return view('torneos.edit', compact('torneo'));
    }

    public function update(TorneoRequest $request, Torneo $torneo)
    {
        $validatedData = $request->validated();
        $premio = $this->calculatePremio($validatedData['modo']);
        $validatedData['premio'] = $premio;

        $torneo->update($validatedData);

        return redirect()->route('torneos.index')->with('success', 'Torneo actualizado correctamente.');
    }

    public function destroy(Torneo $torneo)
    {
        $torneo->delete();

        return redirect()->route('torneos.index')->with('success', 'Torneo eliminado correctamente.');
    }

    private function calculatePremio($categoria)
    {
        switch ($categoria) {
            case '500':
                return 'Medio millón de euros';
            case '1000':
                return 'Un millón de euros';
            case '1500':
                return 'Un millón y medio de euros';
            default:
                return 'Premio no especificado';
        }
    }
}
