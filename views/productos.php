<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow-lg">
                <div class="card-header" style="background-color: #F5A5EC;">
                    <h4 class="text-center" style="margin: 0;">PRODUCTOS</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center mb-0" style="width: 100%; table-layout: fixed;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="width: 50px;">#</th> 
                                <th scope="col">Código</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Proveedor</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="tbl_producto">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo BASE_URL;?>views/js/functionsProducto.js"></script>