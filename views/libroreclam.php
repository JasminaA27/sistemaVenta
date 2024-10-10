<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Reclamaciones</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
       
        .form-section {
            margin: auto;
            max-width: 800px;
            padding: 20px;
        }
        .form-section h3 {
            color: #ac407f;
            margin-bottom: 20px;
        }
        .form-section .form-control {
            background-color: #f5d6e6;
            border: 1px solid #ac407f;
        }
        .form-section .btn-primary {
            background-color: #ac407f;
            border: none;
        }
        .progress-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-section bg-white p-4 rounded">
        <div class="text-center">
            <img src="./views/plantilla/img/esika.png" alt="Lbel" class="mx-2">
            <img src="./views/plantilla/img/lbel.png" alt="Esika" class="mx-2">
            <img src="./views/plantilla/img/cyzone.png" alt="Cyzone" class="mx-2">
        </div>
        <h3 class="text-center">LIBRO DE RECLAMACIONES</h3>
        <div class="progress-container">
            <div class="progress" style="height: 1rem;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex justify-content-between mt-2">
                <span>Información personal</span>
                <span>Bien contratado</span>
                <span>Detalle de reclamo</span>
                <span>Resumen final</span>
            </div>
        </div>
        <h5>Información del consumidor reclamante</h5>
        <form>
            <div class="row mb-3">
                <div class="col">
                    <label for="tipoDocumento" class="form-label">Tipo de documento</label>
                    <select class="form-select" id="tipoDocumento">
                        <option selected>Selecciona...</option>
                        <option value="1">DNI</option>
                        <option value="2">Pasaporte</option>
                    </select>
                </div>
                <div class="col">
                    <label for="numeroDocumento" class="form-label">Número de documento</label>
                    <input type="text" class="form-control" id="numeroDocumento">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="nombres">
                </div>
                <div class="col">
                    <label for="apellidoPaterno" class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" id="apellidoPaterno">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="apellidoMaterno" class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" id="apellidoMaterno">
                </div>
                <div class="col">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tipoRespuesta" class="form-label">Tipo de respuesta</label>
                    <select class="form-select" id="tipoRespuesta">
                        <option selected>Selecciona...</option>
                        <option value="1">Correo electrónico</option>
                        <option value="2">Teléfono</option>
                    </select>
                </div>
                <div class="col">
                    <label for="correoElectronico" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="correoElectronico">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion">
                </div>
                <div class="col">
                    <label for="departamento" class="form-label">Departamento</label>
                    <input type="text" class="form-control" id="departamento">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="provincia" class="form-label">Provincia</label>
                    <select class="form-select" id="provincia">
                        <option selected>Selecciona...</option>
                        <option value="1">Provincia 1</option>
                        <option value="2">Provincia 2</option>
                    </select>
                </div>
                <div class="col">
                    <label for="distrito" class="form-label">Distrito</label>
                    <input type="text" class="form-control" id="distrito">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">¿Eres menor de edad?</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="menorEdad" id="menorEdadSi" value="si">
                        <label class="form-check-label" for="menorEdadSi">Sí</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="menorEdad" id="menorEdadNo" value="no" checked>
                        <label class="form-check-label" for="menorEdadNo">No</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Continuar</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>