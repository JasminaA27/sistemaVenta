
<div class="container">
    FORMULARIO DE REGISTRO DE CATEGORIA
    <form action="" class="p-4 border rounded shadow" id="frmRegistrarCategoria">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="detalle">Detalle:</label>
            <input type="text" class="form-control" id="detalle" name="detalle" required>
        </div>
        <br>
        <button type="button" class="btn btn-success" onclick="registrarCategoria();">Registrar</button>

        <a href="<?php echo BASE_URL; ?>panel"onclick="redirigir()" class="btn btn-link" style="color: black;">&larr; Regresar</a>
        
    </form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functionsCategoria.js"></script>