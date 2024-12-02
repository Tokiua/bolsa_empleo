

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Oferta de Trabajo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Crear Oferta de Trabajo</h1>

    <!-- Formulario para crear una oferta de trabajo -->
    <form action="{{ route('empleo.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_empresa" class="form-label">Empresa</label>
            <select id="id_empresa" name="id_empresa" class="form-control" required>
                <option value="">Seleccione una empresa</option>
                @foreach($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->nombre_empresa }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="salario" class="form-label">Salario</label>
            <input type="number" id="salario" name="salario" class="form-control" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="requisitos" class="form-label">Requisitos</label>
            <textarea id="requisitos" name="requisitos" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Crear Oferta</button>
    </form>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
