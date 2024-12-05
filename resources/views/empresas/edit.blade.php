<!-- resources/views/empresas/edit.blade.php -->

@extends('layout.app')

@section('content')
<div class="container">
    <h1>Editar Empresa</h1>

    <form action="{{ route('empresas.update', $empresa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" class="form-control" value="{{ $empresa->usuario }}" required>
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" class="form-control" value="{{ $empresa->contrasena }}" required>
        </div>

        <div class="form-group">
            <label for="nombre_empresa">Nombre Empresa</label>
            <input type="text" name="nombre_empresa" id="nombre_empresa" class="form-control" value="{{ $empresa->nombre_empresa }}" required>
        </div>

        <div class="form-group">
            <label for="pagina_web">Página Web</label>
            <input type="text" name="pagina_web" id="pagina_web" class="form-control" value="{{ $empresa->pagina_web }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion_empresa">Descripción Empresa</label>
            <textarea name="descripcion_empresa" id="descripcion_empresa" class="form-control" required>{{ $empresa->descripcion_empresa }}</textarea>
        </div>

        <div class="form-group">
            <label for="activida_empresa">Actividad Empresa</label>
            <input type="text" name="activida_empresa" id="activida_empresa" class="form-control" value="{{ $empresa->activida_empresa }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $empresa->email }}" required>
        </div>

        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" name="pais" id="pais" class="form-control" value="{{ $empresa->pais }}" required>
        </div>

        <div class="form-group">
            <label for="codigo_area">Código Área</label>
            <input type="text" name="codigo_area" id="codigo_area" class="form-control" value="{{ $empresa->codigo_area }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
</div>
@endsection
