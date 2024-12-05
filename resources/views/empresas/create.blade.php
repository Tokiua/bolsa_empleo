@extends('layout.app')

@section('content')
<div class="container">
    <h1>Crear Empresa</h1>

    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="{{ old('usuario') }}" required>
            @error('usuario')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contrasena" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" value="{{ old('contrasena') }}">
            @error('contrasena')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nombre_empresa" class="form-label">Nombre de la Empresa</label>
            <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" value="{{ old('nombre_empresa') }}" required>
            @error('nombre_empresa')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pagina_web" class="form-label">Página Web</label>
            <input type="url" class="form-control" id="pagina_web" name="pagina_web" value="{{ old('pagina_web') }}">
            @error('pagina_web')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="descripcion_empresa" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion_empresa" name="descripcion_empresa" rows="3" required>{{ old('descripcion_empresa') }}</textarea>
            @error('descripcion_empresa')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="activida_empresa" class="form-label">Actividad</label>
            <input type="text" class="form-control" id="activida_empresa" name="activida_empresa" value="{{ old('activida_empresa') }}" required>
            @error('activida_empresa')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pais" class="form-label">País</label>
            <input type="text" class="form-control" id="pais" name="pais" value="{{ old('pais') }}" required>
            @error('pais')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="codigo_area" class="form-label">Código de Área</label>
            <input type="text" class="form-control" id="codigo_area" name="codigo_area" value="{{ old('codigo_area') }}" required>
            @error('codigo_area')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection