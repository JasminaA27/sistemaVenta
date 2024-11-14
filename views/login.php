<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
</head>
<script> const base_url = '<?php echo BASE_URL;?>';</script>
<body style= "background: url('./views/plantilla/') no-repeat center center fixed;background-size: cover;">
    <div class="login-container text-center h-500"style="max-width: 400px;background: linear-gradient(to bottom right, #fbb8ff, #ffe4e4 );
    margin: 100px auto;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);max-width: 400px; padding: 20px;border-radius: 10px;">
        <img src="./views/plantilla/img/logo.png" alt="Logo" height="70" width="70">
        <h1 class="h3 mb-3 font-weight-normal" style="text-shadow: 0 0 5px #f40398,
        0 0 25px #f403e8,
        0 0 50px #e04c4c,
        0 0 100px #c5587c;">¡BIENVENIDA!</h1>
        <img src="./views/plantilla/img/esika.png" alt="ÉSIKA" style="width: 80px; margin: 5px;">
        <img src="./views/plantilla/img/lbel.png" alt="L'BEL" style="width: 80px; margin: 5px;">
        <img src="./views/plantilla/img/cyzone.png" alt="CYZONE" style="width: 80px; margin: 5px;" >

        <form id="frm_iniciar_sesion">
            <div class="form-group">
                <span class="icons bi bi-person"></span>
                <input type="text" class="form-control"  placeholder="Usuario" style="margin-bottom: 15px; border-radius: 0%;" id="usuario" name="usuario" class="form-control"required>
            </div>
           
            <div class="form-group">
                <span class="icons bi bi-lock"></span>
                <input type="password" class="form-control" style="border-radius: 0%;" placeholder="contraseña" id="password" name="password" class="form-control"  required>
            </div>
            <button class="btn btn-primary" type="submit" style="margin-top: 30px; color: black; background-color:  #f79be0; border: 1px solid  #f79be0; margin-bottom: 10px;
                box-shadow: 0 0 5px #c42115,
                0 0 25px #ec56ae,
                0 0 50px #cc5fab,
                0 0 100px #cc5fa2;"> Ingresar
            </button>
            
            <p class="mt-3">
                ¿Ya tienes cuenta? <a href="<?php echo BASE_URL; ?>registrate" style="color: black; text-decoration: none;">Registrate</a>
                 <br>Panel : <a href="<?php echo BASE_URL; ?>nuevoProducto" style="color: black; text-decoration: none;">  Administrador</a>
            </p>
            
        </form>
    </div>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL;?>views/js/functionsLogin.js"></script>
</html>