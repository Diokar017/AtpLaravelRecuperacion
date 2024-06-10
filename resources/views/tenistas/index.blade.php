<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking de Tenistas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    @yield('styles')
</head>
<body>
@include('header')

<main class="py-4">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-4 text-primary">Ranking de Tenistas</h1>
            <a href="{{ route('tenistas.create') }}" class="btn btn-primary btn-lg">Crear Tenista</a>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle">
                        <thead class="bg-dark text-white">
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
                                <td>
                                    <img src="{{ asset('storage/app/public/images/tenistas/' . $tenista->imagen) }}" alt="{{ $tenista->nombre }}" class="img-fluid rounded-circle" style="width: 80px; height: 80px;">

                                </td>
                                <td>{{ $tenista->nombre }}</td>
                                <td>{{ $tenista->victorias }}</td>
                                <td>{{ $tenista->derrotas }}</td>
                                <td>
                                    <a href="{{ route('tenistas.show', $tenista->id) }}" class="btn btn-info btn-sm">Más información</a>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('tenistas.edit', $tenista->id) }}" class="btn btn-warning btn-sm me-2">Editar</a>
                                        <form action="{{ route('tenistas.destroy', $tenista->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $tenistas->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</main>

@include('footer')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
@yield('scripts')
</body>

</html>
