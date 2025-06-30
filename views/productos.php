

<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow-lg">
                <div class="card-header" style="background-color: #F5A5EC;">
                    <h4 class="text-center" style="margin: 0;">PRODUCTOS</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center table-sm mb-0" style="width: 100%; table-layout: fixed;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="width: 30px;">Nro</th>
                                <th scope="col" style="width: 100px;">Código</th>
                                <th scope="col" style="width: 150px;">Nombre</th>
                                <th scope="col" style="width: 100px;">Detalle</th>
                                <th scope="col" style="width: 80px;">Precio</th>
                                <th scope="col" style="width: 80px;">Stock</th>
                                <th scope="col" style="width: 120px;">Categoría</th>
                                <th scope="col" style="width: 120px;">Proveedor</th>
                                <th scope="col" style="width: 150px;"></th>
                            </tr>
                        </thead>
                        <tbody id="tbl_producto">
                            <!-- Datos de productos dinámicos -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container mt-3">
  <a href="<?php echo BASE_URL; ?>panel" class="btn text-white" style="background-color: #F5A5EC; border: none;">
    <i class="bi bi-arrow-right"></i> Ir al inicio
  </a>
</div>
    </div>
</div>

<script src="<?php echo BASE_URL;?>views/js/functionsProducto.js"></script>
