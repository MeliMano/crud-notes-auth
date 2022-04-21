@extends('layouts.app')

@section('content')

<div class="card-header d-flex justify-content-between align-items-center">
    <span>Editar</span>
    <a href="/notas" class="btn btn-primary btn-sm">Volver a lista de notas...</a>
</div>

@if (session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

<form action="{{ route('notas.update', $nota->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" 
    value="{{ $nota->nombre }}">
    <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" 
    value="{{ $nota->descripcion }}">
    <button class="btn btn-warning btn-block" type="submit">Guardar cambio</button>
</form>


@endsection