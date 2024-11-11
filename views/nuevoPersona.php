<div class="container">
    <form action="" class="p-4 border rounded shadow" id="frmRegistrar">
        <div class="form-group">
            <label for="nro_identidad">Número de Identidad:</label>
            <input type="text" class="form-control" id="nro_identidad" name="nro_identidad" required>
        </div>
        <div class="form-group">
            <label for="razon_social">Razón Social:</label>
            <input type="text" class="form-control" id="razon_social" name="razon_social" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="form-group">
            <label for="departamento">Departamento:</label>
            <input type="text" class="form-control" id="departamento" name="departamento" required>
        </div>
        <div class="form-group">
            <label for="provincia">Provincia:</label>
            <input type="text" class="form-control" id="provincia" name="provincia" required>
        </div>
        <div class="form-group">
            <label for="distrito">Distrito:</label>
            <input type="text" class="form-control" id="distrito" name="distrito" required>
        </div>
        <div class="form-group">
            <label for="cod_postal">Código Postal:</label>
            <input type="text" class="form-control" id="cod_postal" name="cod_postal" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="form-group">
            <label for="rol">Rol:</label>
            <input type="text" class="form-control" id="rol" name="rol" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado"  name="estado"  required>
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Registro:</label>
            <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
        </div>
        <button type="button" class="btn btn-success" onclick="registrarPersona();">Registrar</button>
    </form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functionsPersona.js"></script>