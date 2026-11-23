@extends('layouts.app')

@section('contenido')
    <h1>Crear equipo</h1>
    <form method="POST" action="{{ route('equipos.store') }}">
        @csrf

        <label for="codigo">Código</label>
        <input id="codigo" name="codigo" type="text" maxlength="255" value="{{ old('codigo') }}" required>

        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" maxlength="100" value="{{ old('nombre') }}" required>

        <label for="marca">Marca</label>
        <input id="marca" name="marca" type="text" maxlength="80" value="{{ old('marca') }}" required>

        <label for="fecha_adquisicion">Fecha de adquisición</label>
        <input id="fecha_adquisicion" name="fecha_adquisicion" type="date" value="{{ old('fecha_adquisicion') }}" required>

        <label for="estado">Estado</label>
        <input id="estado" name="estado" type="text" maxlength="20" value="{{ old('estado') }}" required>

        <label for="existencias">Existencias</label>
        <input id="existencias" name="existencias" type="number" min="0" max="4294967295" step="1" value="{{ old('existencias') }}" required>

        <button type="submit">Guardar</button>
        <a href="{{ route('equipos.index') }}">Cancelar</a>
    </form>
@endsection