<div class="container">
    <form action="" class="p-4 border rounded shadow" id="frmRegistrarCategoria">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="detalle">Detalle:</label>
            <input type="text" class="form-control" id="detalle" name="detalle" required>
        </div>
        <button type="button" class="btn btn-success" onclick="registrarCategoria();">Registrar</button>
    </form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functionsCategoria.js"></script>