@extends('layouts.app')

@section('contenido')
    <h1>Equipos registrados</h1>

    <a href="{{ route('equipos.create') }}">Crear equipo</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Fecha de Adquisición</th>
                <th>Estado</th>
                <th>Creado</th>
                <th>Actualizado</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->id }}</td>
                    <td>{{ $equipo->codigo }}</td>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->marca }}</td>
                    <td>{{ $equipo->fecha_adquisicion }}</td>
                    <td>{{ $equipo->estado }}</td>
                    <td>{{ $equipo->created_at }}</td>
                    <td>{{ $equipo->updated_at }}</td>
                    <td>
                        <a href="{{ route('equipos.edit', $equipo->id) }}">Editar</a>
                   <form method="POST" action="{{ route('equipos.destroy', $equipo->id) }}"
                              onsubmit="return confirm('¿Eliminar este equipo?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                </tr>
            @empty
                <tr>
                    <td colspan="8">No hay equipos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
