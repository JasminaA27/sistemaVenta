<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Administrador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: #F5A5EC;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> Perfil
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
          <li>
                        <button type="button" class="dropdown-item d-flex align-items-center">
                            <i class="bi bi-person-fill me-2"></i> 
                            <?php echo $_SESSION['sesion_ventas_nombres']; ?>
                        </button>
                    </li>    
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>esika">Salir</a></li>
            <li>
          <a class="dropdown-item text-danger" href="#" onclick="cerrar_sesion();">Cerrar Sesión</a>
          </li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container my-5">
  <h2 class="text-center mb-4">Panel de Administrador</h2>

  <!-- Opciones en cuadrícula -->
  <div class="row g-4 justify-content-center">

    <!-- Nuevo Producto -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm border-0">
        <div class="card-body text-center">
          <div class="icon-container bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3" style="width: 70px; height: 70px;">
            <i class="bi bi-box-seam" style="font-size: 2rem;"></i>
          </div>
          <h5 class="card-title">Nuevo Producto</h5>
          <p class="card-text">Añade productos a la base de datos.</p>
          <a href="<?php echo BASE_URL; ?>nuevoProducto" class="btn btn-primary">Nuevo</a>
          <a href="<?php echo BASE_URL; ?>productos" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>

    <!-- Nueva Categoría -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm border-0">
        <div class="card-body text-center">
          <div class="icon-container bg-success text-white rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3" style="width: 70px; height: 70px;">
            <i class="bi bi-tags" style="font-size: 2rem;"></i>
          </div>
          <h5 class="card-title">Nueva Categoría</h5>
          <p class="card-text">Crea y organiza categorías.</p>
          <a href="<?php echo BASE_URL; ?>nuevoCategoria" class="btn btn-success">Nuevo</a>
          <a href="<?php echo BASE_URL; ?>categorias" class="btn btn-success">Ver</a>
        </div>
      </div>
    </div>

    <!-- Nueva Compra -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm border-0">
        <div class="card-body text-center">
          <div class="icon-container bg-warning text-white rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3" style="width: 70px; height: 70px;">
            <i class="bi bi-cart" style="font-size: 2rem;"></i>
          </div>
          <h5 class="card-title">Nueva Compra</h5>
          <p class="card-text">Registra compras .</p>
          <a href="<?php echo BASE_URL; ?>nuevoCompras" class="btn btn-warning text-white">Nuevo</a>
          <a href="<?php echo BASE_URL; ?>compras" class="btn btn-warning text-white">Ver</a>
        </div>
      </div>
    </div>

    <!-- Nueva Persona -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm border-0">
        <div class="card-body text-center">
          <div class="icon-container bg-danger text-white rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3" style="width: 70px; height: 70px;">
            <i class="bi bi-person-plus" style="font-size: 2rem;"></i>
          </div>
          <h5 class="card-title">Nueva Persona</h5>
          <p class="card-text">Añade nuevos usuarios al sistema.</p>
          <a href="<?php echo BASE_URL; ?>nuevoPersona"class="btn btn-danger">Nuevo</a>
          <a href="<?php echo BASE_URL; ?>personas" class="btn btn-danger">Ver</a>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



