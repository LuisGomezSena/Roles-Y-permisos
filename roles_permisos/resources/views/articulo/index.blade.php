<!-- Vista del dashboad -->

@extends('adminlte::page')

@section('title', 'CRUD con Laravel')

@section('content_header')
    <h1>Lista de articulos</h1>
@stop

@section('content')
<a  href="articulos/create" class="btn btn-outline-primary mb-3">CREAR</a>

<table id="articulos" class="table table-dark table-striped mt-4">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{ $articulo->id}}</td>
            <td>{{ $articulo->codigo}}</td>
            <td>{{ $articulo->descripcion}}</td>
            <td>{{ $articulo->cantidad}}</td>
            <td>{{ $articulo->precio}}</td>
            <td>
                <form action="{{ route ('articulos.destroy', $articulo->id)}}" method="post">
                    <a href="/articulos/{{ $articulo->id}}/edit" class="btn btn-outline-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#articulos').DataTable({
                "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "ALL"]]
            });
        });
    </script>
@stop