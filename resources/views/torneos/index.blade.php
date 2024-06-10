@extends('layouts.app')

@section('title', 'Torneos')


    @include('header')


    <div class="container mt-5">
        <h1 class="text-center mb-4" style="color: #1abc9c; font-size: 36px;">Torneos</h1>
        <a href="{{ route('torneos.create') }}" class="btn btn-primary btn-lg">Crear Torneo</a>

        @foreach ($torneos as $torneo)
            <div class="card mb-3">
                <div class="card-header">
                    {{ $torneo->ubicacion }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $torneo->modo }}</h5>
                    <!-- Agrega más detalles del torneo aquí según tus necesidades -->
                </div>
            </div>
        @endforeach
    </div>
    @include('footer')

