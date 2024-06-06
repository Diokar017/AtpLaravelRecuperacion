<?php

namespace App\Http\Controllers;

use App\Http\Requests\TenistaRequest;
use App\Http\Resources\TenistaResource;
use App\Models\Tenista;
use App\Models\Torneo;
use Illuminate\Http\Request;


class TenistaController extends Controller
{

    public function index(Request $request)
    {
        $tenistas = Tenista::search($request->search)->orderBy('id', 'asc')->paginate(6);
        return view('tenistas.index', ['tenistas' => TenistaResource::collection($tenistas)]);
    }

    public function show(Tenista $tenista)
    {
        return view('tenistas.show', ['tenista' => new TenistaResource($tenista)]);
    }

    public function create()
    {
        return view('tenistas.create', ['torneos' => Torneo::all()]);
    }

    public function store(TenistaRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('imagen')) {
            $validatedData['imagen'] = $request->file('imagen')->store('images/tenistas', 'public');
        } else {
            $validatedData['imagen'] = 'default.jpg';
        }

        Tenista::create($validatedData);
        return redirect()->route('tenistas.index');
    }

    public function edit(Tenista $tenista)
    {
        return view('tenistas.edit', ['tenista' => $tenista, 'torneos' => Torneo::all()]);
    }

    public function update(TenistaRequest $request, Tenista $tenista)
    {
        $data = $request->validated();

        if ($request->hasFile('imagen')) {
            if ($tenista->imagen) {

                Storage::disk('public')->delete($tenista->imagen);
            }
            $data['imagen'] = $request->file('imagen')->store('imagenes', 'public');
        }


        $tenista->update($data);
        return redirect()->route('tenistas.index');
    }
    public function updateImagen(Request $request, $id) {

        $request->validate([
            'imagen' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        try {
            $tenista = Tenista::findOrFail($id);

            if ($tenista->imagen != Tenista::$IMAGE_DEFAULT && Storage::exists($tenista->imagen)){
                Storage::delete($tenista->imagen);
            }

            $imagen = $request->file('imagen');
            $extension = $imagen->getClientOriginalExtension();
            $fileToSave = $tenista->id . '.' . $extension;
            $tenista->imagen = $imagen->storeAs('tenistas', $fileToSave, 'public');
            $tenista->save();

            return redirect()->route('tenistas.index');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function destroy(Tenista $tenista)
    {
        if ($tenista->imagen) {
            Storage::disk('public')->delete($tenista->imagen);
        }

        $tenista->delete();
        return redirect()->route('tenistas.index');
    }




}
