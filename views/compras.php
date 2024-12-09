<div class="container-fluid py-5"> <!-- Cambiado a container-fluid para más ancho -->
    <div class="row justify-content-center">
        <div class="col-lg-11 col-md-12"> <!-- Incrementar ancho del contenedor interno -->
            <div class="card shadow-lg">
                <div class="card-header" style="background-color: #F5A5EC;">
                    <h4 class="text-center" style="margin: 0;">COMPRAS</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center mb-0" style="width: 100%; table-layout: fixed;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="width: 50px;">#</th> <!-- Columna más estrecha -->
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Fecha Compra</th>
                                <th scope="col">Trabajador</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_compras">
                            <!-- Aquí se llenará la tabla dinámicamente -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo BASE_URL;?>views/js/functionsCompras.js"></script>

