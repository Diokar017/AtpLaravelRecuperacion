<?php

namespace App\Http\wwww;

use App\Http\Requests\TorneoRequest;
use App\Http\Resources\TorneoResource;
use App\Models\Torneo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TorneoController extends Controller
{
    public function index(Request $request)
    {
        $torneos = Torneo::search($request->search)->orderBy('id', 'asc')->paginate(6);
        return view('torneos.index', ['torneos' => TorneoResource::collection($torneos)]);
    }

    public function show(Torneo $torneo)
    {
        return view('torneos.show', ['torneo' => new TorneoResource($torneo)]);
    }

    public function create()
    {
        return view('torneos.create');
    }

    public function store(TorneoRequest $request)
    {
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('imagenes', 'public');
        }

        $torneo = Torneo::create($data);
        flash('Torneo creado con éxito.')->success()->important();
        return redirect()->route('torneos.index');
    }

    public function edit(Torneo $torneo)
    {
        return view('torneos.edit', ['torneo' => $torneo]);
    }

    public function update(TorneoRequest $request, Torneo $torneo)
    {
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('imagen')) {
            if ($torneo->imagen) {
                // Delete old image
                Storage::disk('public')->delete($torneo->imagen);
            }
            $data['imagen'] = $request->file('imagen')->store('imagenes', 'public');
        }

        $torneo->update($data);
        flash('Torneo actualizado con éxito.')->success()->important();
        return redirect()->route('torneos.index');
    }

    public function destroy(Torneo $torneo)
    {
        if ($torneo->imagen) {
            // Delete image
            Storage::disk('public')->delete($torneo->imagen);
        }

        $torneo->delete();
        flash('Torneo eliminado con éxito.')->success()->important();
        return redirect()->route('torneos.index');
    }
}
