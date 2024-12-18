<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Cuenta</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5" >
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="background-color:#F5A5EC">
                    <div class="card-body">
                        <a href="<?php echo BASE_URL; ?>login"onclick="redirigir()" class="btn btn-link" style="color: black; text-decoration: none">&larr; Regresar </a>
                        <h2 class="mt-3">Creación de cuenta</h2>
                        <p>Paso 1: Ingresa los siguientes datos.</p>
                        <form>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" placeholder="Ingresa tu apellido">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="Ingresar correo electrónico">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Ingresa tu contraseña</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" placeholder="Ingresar contraseña">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="bi bi-eye-slash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirma tu contraseña</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="confirm-password" placeholder="Ingresar contraseña">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="bi bi-eye-slash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="promociones">
                                <label class="form-check-label" for="promociones">
                                    Acepto recibir descuentos exclusivos, promociones, muestras, novedades y contenido de los productos. (Opcional)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="terminos" required>
                                <label class="form-check-label" for="terminos">
                                    Acepto <a href="#" class="text-decoration-none">Términos y Condiciones</a> y <a href="#" class="text-decoration-none">Política de privacidad</a>.
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" style="background-color: #c74fa5; border:  #080808;"> <a href="<?php echo BASE_URL; ?>login" style="text-decoration: none; color: black;">Continuar</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css"></script>
</body>
</html>