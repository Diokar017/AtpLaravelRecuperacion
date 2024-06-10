@extends('layouts.app')
@section('title', 'Crear Torneo')
@include('header')

    <div class="container mt-5">
        <h1 class="mb-4">Añadir Nuevo Torneo</h1>
        <form action="{{ route('torneos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="ubicacion">Ubicación:</label>
                <input type="text" class="form-control" style="color: black" id="ubicacion" name="ubicacion" required>
            </div>

            <div class="form-group">
                <label for="modo">Modo:</label>
                <select class="form-control"  style="color: black"id="modo" name="modo" required onchange="updatePremio()">
                    <option value="solitario" style="color: black">Solitario</option>
                    <option value="pareja" style="color: black">En Pareja</option>
                </select>
            </div>

            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <select class="form-control"  style="color: black" sid="categoria" name="categoria" required>
                    <option value="500" style="color: black">500</option>
                    <option value="1000" style="color: black">1000</option>
                    <option value="1500" style="color: black">1500</option>
                </select>
            </div>

            <div class="form-group">
                <label for="superficie">Superficie:</label>
                <input type="text" class="form-control"  style="color: black" id="superficie" name="superficie" required>
            </div>

            <div class="form-group">
                <label for="entradas">Entradas:</label>
                <input type="number" class="form-control"  style="color: black" id="entradas" name="entradas" required>
            </div>

            <div class="form-group">
                <label for="premio">Premio:</label>
                <input type="number" step="0.01" style="color: black" class="form-control" id="premio" name="premio" required>
            </div>

            <div class="form-group">
                <label for="fechaInicio">Fecha de Inicio:</label>
                <input type="date" class="form-control" style="color: black" id="fechaInicio" name="fechaInicio" required>
            </div>

            <div class="form-group">
                <label for="fechaFinalizacion">Fecha de Finalización:</label>
                <input type="date" class="form-control"  style="color: black" id="fechaFinalizacion" name="fechaFinalizacion" required>
            </div>

            <div class="form-group">
                <label for="tenistas">Seleccionar Tenistas:</label>
                <select multiple class="form-control"  style="color: black" id="tenistas" name="tenistas[]">
                    @foreach($tenistas as $tenista)
                        <option value="{{ $tenista->id }}">{{ $tenista->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit"  style="color: black" class="btn btn-primary">Crear Torneo</button>
        </form>
    </div>


@section('scripts')
    <script>
        function updatePremio() {
            const modo = document.getElementById('modo').value;
            const premioInput = document.getElementById('premio');

            if (modo === 'solitario') {
                premioInput.value = 500000;
            } else if (modo === 'pareja') {
                premioInput.value = 1000000;
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            updatePremio();
        });
    </script>
@endsection
