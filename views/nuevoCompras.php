
<div class="container">
    FORMULARIO DE RESGISTRO DE COMPRAS
    <form action="" class="p-4 border rounded shadow" id="frmRegistrar">
        <div class="form-group">
            <label for="producto">Producto:</label>
            <select name= "producto" id="producto" class="form-control" required>
                <option>Seleccione un producto</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
        </div>
       <!--  <div class="form-group">
            <label for="fecha_compra">Fecha de Compra:</label>
            <input type="datetime-local" class="form-control" id="fecha_compra" name="fecha_compra" required>
        </div> -->
        <div class="form-group">
            <label for="trabajador">Trabajador:</label>
            <select name= "trabajador" id="trabajador" class="form-control" required>
                <option>Seleccione un Trabajador</option>
            </select>
        </div>
      <br>
        <button type="button" class="btn btn-success" onclick="registrarCompras();">Registrar</button>
        <a href="<?php echo BASE_URL; ?>panel"onclick="redirigir()" class="btn btn-link" style="color: black;">&larr; Regresar</a>
</div>
<script src="<?php echo BASE_URL;?>views/js/functionsCompras.js"></script>
<script>listar_productos();</script>
<script>listar_trabajadores();</script>