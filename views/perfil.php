<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
        }
        .profile-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .profile-header {
            background-color: #d3a1c5;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;
        }
        .profile-header h3 {
            margin: 0;
        }
        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            
            display: block;
            margin: 10px auto;
            position: relative;
        }
        .profile-picture .camera-icon {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #fff;
            border-radius: 50%;
            padding: 5px;
        }
        .form-group {
            margin-bottom: 1rem;
            
        }
        .btn-danger{
            background-color:#d3a1c5;
            border: #d3a1c5;
        }
    </style>
</head>
<body>

    <div class="profile-card mt-5">
        <a href="pagprincipal.html"><a href="<?php echo BASE_URL; ?>esika" onclick="redirigir()" class="btn btn-link" style="color: black;">&larr; Regresar a inicio</a>
        <div class="profile-header">
            <h3>Mi perfil</h3>
        </div>
        <div class="text-center mt-3">
            <div class="profile-picture">
                <img src="../img/perfi.png" alt="" class="img-fluid">
                <span class="camera-icon"><img src="" alt="" width="20"></span>
            </div>
        </div>
        <div class="mt-3">
            <h5>Nombre</h5>
            <p>Avalos Gonzales Jasmina Yanet</p>
            <p>Gerente zona; Huaman Medina Maria</p>
            <p>Telefono de GZ<br>910522787</p>
            <hr>
            <div class="form-group">
                <label><i class="fas fa-lock"></i> Cambiar contraseña</label>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control" id="email">
                <button class="btn btn-sm btn-secondary mt-2"style="background-color: #d3a1c5; border: #d3a1c5;">Editar</button>
                <button class="btn btn-sm btn-primary mt-2"style="background-color: #d3a1c5; border: #d3a1c5;">Confirmar</button>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" id="celular">
                <button class="btn btn-sm btn-secondary mt-2"style="background-color: #d3a1c5; border: #d3a1c5;">Editar</button>
                <button class="btn btn-sm btn-primary mt-2" style="background-color: #d3a1c5; border: #d3a1c5;">Confirmar</button>
            </div>
            <button class="btn btn-danger btn-block mt-4"> <a href="<?php echo BASE_URL; ?>principal" style="text-decoration: none;color: black; ">Cerrar sesión</a></button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>