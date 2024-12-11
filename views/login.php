<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> <!-- Para el icono del ojo -->
</head>
<script> const base_url = '<?php echo BASE_URL;?>';</script>

<body style="background: url('./views/plantilla/img/fondo.png') no-repeat center center fixed;background-size: cover;">
    <div class="login-container text-center h-500" style="max-width: 400px;background: linear-gradient(to bottom right, #fbb8ff, #ffe4e4 );
    margin: 100px auto;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);max-width: 400px; padding: 20px;border-radius: 10px;">
        <img src="./views/plantilla/img/logo.png" alt="Logo" height="90" width="90">
        <h1 class="h3 mb-4 font-weight-normal" style="text-shadow: 0 0 5px #f40398,
        0 0 25px #f403e8,
        0 0 50px #e04c4c,
        0 0 100px #c5587c;">¡BIENVENIDA!</h1>
        <img src="./views/plantilla/img/esika.png" alt="ÉSIKA" style="width: 80px; margin: 5px;">
        <img src="./views/plantilla/img/lbel.png" alt="L'BEL" style="width: 80px; margin: 5px;">
        <img src="./views/plantilla/img/cyzone.png" alt="CYZONE" style="width: 80px; margin: 5px;">

        <form id="frm_iniciar_sesion">
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" placeholder="Usuario" style="border-radius: 0%;" id="usuario" name="usuario" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" style="border-radius: 0%;" placeholder="Contraseña" id="password" name="password" required>
                <span toggle="#password" class="bi bi-eye-slash" id="toggle-password" style="position: absolute; right: 15px; top: 10px; cursor: pointer;"></span>
            </div>
            
            <!-- Botón Ingresar más ancho -->
            <button class="btn btn-primary" type="submit" style="width: 80%; margin-top: 30px; color: black; background-color:  #f79be0; border: 1px solid  #f79be0; margin-bottom: 15px;
                box-shadow: 0 0 5px #c42115,
                0 0 25px #ec56ae,
                0 0 50px #cc5fab,
                0 0 100px #cc5fa2;"> Ingresar
            </button>
            
            <!-- Nueva opción para crear cuenta -->
            <p class="mt-3">
                ¿Aún no tienes cuenta? <a href="<?php echo BASE_URL; ?>registrate" style="color: black; text-decoration: none;">Crea una aquí</a>
            </p>
        </form>

        <!-- Términos de privacidad -->
        <p class="mt-3" style="font-size: 12px; color: #666;">
            Este sitio esta protegido por nuestra empresa con. <a href="https://cdn1-prd.beautymovers.com/nextgencommerce/docs/legal/pe/politica-de-privacidad/2022.pdf" style="color: black; text-decoration: none;">Términos de privacidad</a>. y las
            <a href="https://cdn1-prd.beautymovers.com/nextgencommerce/docs/legal/pe/politica-de-privacidad/2022.pdf" style="color: black; text-decoration: none;">Políticas de privacidad</a>.
        </p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL;?>views/js/functionsLogin.js"></script>

    <script>
        // Mostrar/ocultar contraseña
        document.getElementById('toggle-password').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });
    </script>
</body>
</html>
