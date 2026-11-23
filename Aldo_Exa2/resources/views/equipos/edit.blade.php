@extends('layouts.app')

@section('contenido')
    <h1>Editar equipo</h1>
    <form method="POST" action="{{ route('equipos.update', $equipo->id) }}">
        @csrf
        @method('PUT')

        <label for="codigo">Código</label>
        <input id="codigo" name="codigo" type="text" maxlength="255" value="{{ old('codigo', $equipo->codigo) }}" required>

        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" maxlength="100" value="{{ old('nombre', $equipo->nombre) }}" required>

        <label for="marca">Marca</label>
        <input id="marca" name="marca" type="text" maxlength="80" value="{{ old('marca', $equipo->marca) }}" required>

        <label for="fecha_adquisicion">Fecha de adquisición</label>
        <input id="fecha_adquisicion" name="fecha_adquisicion" type="date" value="{{ old('fecha_adquisicion', $equipo->fecha_adquisicion) }}" required>

        <label for="estado">Estado</label>
        <input id="estado" name="estado" type="text" maxlength="20" value="{{ old('estado', $equipo->estado) }}" required>

        <button type="submit">Actualizar</button>
        <a href="{{ route('equipos.index') }}">Cancelar</a>
    </form>
@endsection