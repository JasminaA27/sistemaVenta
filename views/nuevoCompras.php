<div class="container">
    <form action="" class="p-4 border rounded shadow" id="frmRegistrarCompras">
        <div class="form-group">
            <label for="id_producto">ID Producto:</label>
            <input type="text" class="form-control" id="id_producto" name="id_producto" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="fecha_compra">Fecha de Compra:</label>
            <input type="date" class="form-control" id="fecha_compra" name="fecha_compra" required>
        </div>
        <div class="form-group">
            <label for="id_trabajador">ID Trabajador:</label>
            <input type="text" class="form-control" id="id_trabajador" name="id_trabajador" required>
        </div>
        <button type="button" class="btn btn-success" onclick="registrarCompras();">Registrar</button>
    </form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functionsCompras.js"></script>