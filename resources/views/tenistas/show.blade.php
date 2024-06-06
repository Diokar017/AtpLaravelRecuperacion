
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Información del Tenista</h1>
        <div class="row">
            <div class="col-md-6">
                <h3>{{ $tenista->nombre }}</h3>
                <p><strong>Ranking:</strong> {{ $tenista->ranking }}</p>
                <p><strong>País:</strong> {{ $tenista->pais }}</p>
                <p><strong>Edad:</strong> {{ $tenista->edad }}</p>
                <p><strong>Altura:</strong> {{ $tenista->altura }}</p>
                <p><strong>Peso:</strong> {{ $tenista->peso }}</p>
                <p><strong>Profesional desde:</strong> {{ $tenista->profesionalDesde }}</p>
                <p><strong>Mano dominante:</strong> {{ $tenista->mano }}</p>
                <p><strong>Reves:</strong> {{ $tenista->reves }}</p>
                <p><strong>Entrenador:</strong> {{ $tenista->entrenador }}</p>
                <p><strong>Dinero Ganado:</strong> {{ $tenista->dineroGanado }}</p>
                <p><strong>Mejor Ranking:</strong> {{ $tenista->bestRanking }}</p>
                <p><strong>Win Rate:</strong> {{ $tenista->winRate }}</p>
            </div>
            <div class="col-md-6">
                <!-- Aquí puedes agregar la imagen del tenista -->
                <img src="{{ asset('storage/' . $tenista->imagen) }}" alt="{{ $tenista->nombre }}" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('tenistas.index') }}" class="btn btn-primary">Volver al Listado de Tenistas</a>
            </div>
        </div>
    </div>
@endsection

