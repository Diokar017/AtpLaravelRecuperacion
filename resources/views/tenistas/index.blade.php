@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Ranking de Tenistas</h1>
        <div class="table-responsive">
            <div class="container mt-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Tenistas</h1>
                    <a href="{{ route('tenistas.create') }}" class="btn btn-success">Crear Tenista</a>
                </div>
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>Ranking</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Victorias</th>
                    <th>Derrotas</th>
                    <th>Más Información</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tenistas as $tenista)
                    <tr>
                        <td>{{ $tenista->ranking }}</td>
                        <td><img src="{{ asset('storage/images/tenistas/' . $tenista->imagen) }}" alt="{{ $tenista->nombre }}" class="img-thumbnail" style="width: 100px; height: 100px;"></td>
                        <td>{{ $tenista->nombre }}</td>
                        <td>{{ $tenista->victorias }}</td>
                        <td>{{ $tenista->derrotas }}</td>
                        <td>
                            <a href="{{ route('tenistas.show', $tenista->id) }}" class="btn btn-success">Más información</a>
                        </td>
                        <td>
                            <form action="{{ route('tenistas.destroy', $tenista->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $tenistas->links() }}
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .table {
            background-color: #fff;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .table thead {
            background-color: #343a40;
            color: #fff;
        }
        .img-thumbnail {
            object-fit: cover;
        }
    </style>
@endsection
