
    @extends('layouts.app')

@section('title', 'Editar Tenista')


    @include('header')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Tenista</div>

                    <div class="card-body">
                        <form action="{{ route('tenistas.update', $tenista) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" style="color: black" name="nombre" value="{{ $tenista->nombre }}" required>
                            </div>

                            <div class="form-group">
                                <label for="pais">País:</label>
                                <input type="text" class="form-control" id="pais"  style="color: black"name="pais" value="{{ $tenista->pais }}" required>
                            </div>

                            <div class="form-group">
                                <label for="ranking">Ranking:</label>
                                <input type="number" class="form-control" id="ranking"  style="color: black" name="ranking" value="{{ $tenista->ranking }}" required>
                            </div>

                            <div class="form-group">
                                <label for="imagen">Imagen:</label>
                                <input type="file" class="form-control" id="imagen" name="imagen">
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar Tenista</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')


