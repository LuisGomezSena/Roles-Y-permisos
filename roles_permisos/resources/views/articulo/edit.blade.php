<!-- Vista del dashboad -->

@extends('adminlte::page')

@section('title', 'CRUD con Laravel')

@section('content_header')
    <h1>Editar Registros</h1>
@stop

@section('content')
<form action="/articulos/{{$articulo->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="mt-3">
        <label for="" class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{$articulo->precio}}">
    </div><br>
    <a href="/articulos" class="btn btn-outline-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-outline-success" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop