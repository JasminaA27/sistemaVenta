<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
        body {
            background-color:white;
        }
    </style>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
               
                <h2 class="mb-4">REGÍSTRATE</h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control mb-3" placeholder="Nombre" style=" border: 2px solid  #f79be0;"  required>
                        <input type="text" class="form-control mb-3" placeholder="Apellido paterno" style=" border: 2px solid  #f79be0;"  required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control mb-3" style=" border: 2px solid  #f79be0;" placeholder="Apellido materno" required>
                        <input type="email" class="form-control mb-3" placeholder="Correo electrónico" style=" border: 2px solid  #f79be0;"  required>
                    </div>
                    <div class="form-group">
                        <label>Fecha nacimiento</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control mb-3" style=" border: 2px solid  #f79be0;"  placeholder="Día" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control mb-3" style=" border: 2px solid  #f79be0;"  placeholder="Mes" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control mb-3" style=" border: 2px solid  #f79be0;"  placeholder="Año" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control mb-3" style=" border: 2px solid  #f79be0;"  placeholder="Contraseña" required>
                        <input type="password" class="form-control mb-3" style=" border: 2px solid  #f79be0;"  placeholder="Repite la contraseña" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" style=" border: 2px solid  #f79be0;"  required>
                        <label class="form-check-label">
                            He leído y acepto los <a href="#">Términos y condiciones de compra</a>
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">
                            Autorizo el <a href="#">Uso de mis datos para finalidades adicionales</a>
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" required>
                        <label class="form-check-label">
                            He leído y acepto las <a href="#">Condiciones de tratamiento de datos personales</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary" style=" box-shadow: 0 0 5px #fc04c6,
                    0 0 25px #ec56ae,
                    0 0 50px #cc5fab,
                    0 0 100px #cc5fa2; color: black; background-color:  #e0dfe0; border: 1px solid  #f79be0; width: 550px;" onclick="redirigir()">Crear cuenta</button>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <img src="./views/plantilla/img/fondo copy.png" alt="Lavender background" style="margin-top: 60px;" class="img-fluid">
            </div>
        </div>
    </div>
    <script>
        function redirigir() {
            window.location.href = "<?php echo BASE_URL; ?>esika"; // Cambia la URL a la página deseada
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>