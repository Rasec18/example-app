<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Formulario de Contacto</h2>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su correo">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="4" placeholder="Escriba su mensaje"></textarea>
            </div>
            <div class="mb-3">
                <label for="clasificacion" class="form-label">Clasificación</label>
                <select class="form-select" id="clasificacion">
                    <option value="contratacion">Contratación</option>
                    <option value="personal">Personal</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>