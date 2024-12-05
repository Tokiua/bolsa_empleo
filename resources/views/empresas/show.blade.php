@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Lista de Empresas</h1>

    <!-- Botón para crear una nueva empresa -->
    <a href="{{ route('empresas.create') }}" class="btn btn-success mb-3">Nueva Empresa</a>

    <!-- Tabla de empresas -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Nombre Empresa</th>
                <th>Página Web</th>
                <th>Descripción Empresa</th>
                <th>Actividad Empresa</th>
                <th>Email</th>
                <th>País</th>
                <th>Código Área</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->id }}</td>
                    <td>{{ $empresa->usuario }}</td>
                    <td>{{ $empresa->contrasena }}</td>
                    <td>{{ $empresa->nombre_empresa }}</td>
                    <td>{{ $empresa->pagina_web }}</td>
                    <td>{{ $empresa->descripcion_empresa }}</td>
                    <td>{{ $empresa->activida_empresa }}</td>
                    <td>{{ $empresa->email }}</td>
                    <td>{{ $empresa->pais }}</td>
                    <td>{{ $empresa->codigo_area }}</td>
                    <td>
                        <!-- Contenedor con flexbox para los botones -->
                        <div class="d-flex gap-2">
                            <!-- Botón para editar -->
                            <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-warning">Editar</a>

                            <!-- Formulario para eliminar -->
                            <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta empresa?')">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
