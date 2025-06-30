
<div class="container">
    FORMULARIO DE EDITAR CATEGORIA
    <form action="" class="p-4 border rounded shadow" id="frmActualizar">
        <!--impust ocultos-->
    <input type="hidden" id="id_producto" name="id_producto">
    
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="detalle">Detalle:</label>
            <input type="text" class="form-control" id="detalle" name="detalle" required>
        </div>
        <button type="button" class="btn btn-success" onclick="actualizarCategoria();">Actualizar</button>
        <a href="<?php echo BASE_URL; ?>categorias"onclick="redirigir()" class="btn btn-link" style="color: black;"> Regresar</a>
    </form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functionsCategoria.js"></script>

<script>
    //http://localhost/sistemaVenta/categorias
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1'];  ?>;
    ver_categoria(id_p);
</script>