@extends('layouts.app')

@include('header')
    <div class="container mt-5">
        <h1 class="mb-4">Añadir Nuevo Tenista</h1>
        <form action="{{ route('tenistas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre (texto):</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="ranking">Ranking (número entero):</label>
                <input type="number" class="form-control" id="ranking" name="ranking" required>
            </div>

            <div class="form-group">
                <label for="pais">País (texto):</label>
                <input type="text" class="form-control" id="pais" name="pais" required>
            </div>

            <div class="form-group">
                <label for="edad">Edad (número entero):</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>

            <div class="form-group">
                <label for="altura">Altura (número entero en cm):</label>
                <input type="number" class="form-control" id="altura" name="altura" required>
            </div>

            <div class="form-group">
                <label for="peso">Peso (número entero en kg):</label>
                <input type="number" class="form-control" id="peso" name="peso" required>
            </div>

            <div class="form-group">
                <label for="profesionalDesde">Profesional Desde (fecha):</label>
                <input type="date" class="form-control" id="profesionalDesde" name="profesionalDesde" required>
            </div>

            <div class="form-group">
                <label for="mano">Mano (texto):</label>
                <input type="text" class="form-control" id="mano" name="mano" required>
            </div>

            <div class="form-group">
                <label for="reves">Revés (texto):</label>
                <input type="text" class="form-control" id="reves" name="reves" required>
            </div>

            <div class="form-group">
                <label for="entrenador">Entrenador (texto):</label>
                <input type="text" class="form-control" id="entrenador" name="entrenador" required>
            </div>

            <div class="form-group">
                <label for="dineroGanado">Dinero Ganado ($):</label>
                <input type="number" step="0.01" class="form-control" id="dineroGanado" name="dineroGanado" required>
            </div>

            <div class="form-group">
                <label for="bestRanking">Mejor Ranking (número entero):</label>
                <input type="number" class="form-control" id="bestRanking" name="bestRanking" required>
            </div>

            <div class="form-group">
                <label for="winRate">Win Rate (%):</label>
                <input type="number" step="0.01" class="form-control" id="winRate" name="winRate" required>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen (archivo de imagen):</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen">
            </div>

            <div class="form-group">
                <label for="victorias">Victorias (número entero):</label>
                <input type="number" class="form-control" id="victorias" name="victorias" required>
            </div>

            <div class="form-group">
                <label for="derrotas">Derrotas (número entero):</label>
                <input type="number" class="form-control" id="derrotas" name="derrotas" required>
            </div>

            <button type="submit" class="btn btn-primary">Crear Tenista</button>
        </form>
    </div>

@include('footer')

@section('styles')
    <style>
        .container {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #1a202c;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #1abc9c;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #16a085;
        }
    </style>
@endsection
@sectiom
