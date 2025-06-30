
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card shadow-lg">
            <div class="card-header" style="background-color: #F5A5EC;">
                    <h4 class="text-center" style="margin: 0;">LISTA DE CATEGORIAS</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Detalle</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_categoria">    
                        </tbody>
                    </table>
                </div>
                
            </div>
            <div class="container mt-3">
  <a href="<?php echo BASE_URL; ?>panel" class="btn text-white" style="background-color: #F5A5EC; border: none;">
    <i class="bi bi-arrow-right"></i> Ir al inicio
  </a>
</div>
        </div>
        
    </div>
    
</div>
<script src="<?php echo BASE_URL; ?>views/js/functionsCategoria.js"></script>
