<div class="container">
    <form action="" class="p-4 border rounded shadow" id="frmRegistrar">
        <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" id="codigo" name= "codigo" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name= "nombre" required>
        </div>
        <div class="form-group">
            <label for="detalle">Detalle:</label>
            <input type="text" class="form-control" id="detalle" name= "detalle" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" class="form-control" id="precio" name= "precio" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" class="form-control" id="stock" name= "stock" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría:</label>
            <input type="text" class="form-control" id="categoria" name= "categoria" required>
        </div>
        <div class="form-group">
            <label for="fecha_ven">Fecha de Vencimiento:</label>
            <input type="date" class="form-control" id="fecha_ven" name= "fecha_ven" required>
        </div>
        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="text" class="form-control" id="imagen" name= "imagen" placeholder="url" required>
        </div>
        <div class="form-group">
            <label for="proveedor">Proveedor:</label>
            <input type="number" class="form-control" id="proveedor" name= "proveedor" required>
        </div>
        <button type="button" class="btn btn-success" onclick="registrarProducto();">Registrar</button>
    </form>
</div>

<script src="<?php echo BASE_URL;?>views/js/functionsProducto.js"></script>
<script>listar_categorias();</script>