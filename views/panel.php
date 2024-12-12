<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Administrador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f9f9f9;
    }
    .navbar {
      background: linear-gradient(90deg, #F5A5EC, #F6C6EF);
    }
    .navbar-brand {
      font-weight: bold;
      color: #fff;
    }
    .navbar-brand:hover {
      color: #f2f2f2;
    }
    .card {
      border-radius: 15px;
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .icon-container {
      width: 80px;
      height: 80px;
      margin-top: -40px;
      margin-bottom: 20px;
      background: #fff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    .icon-container i {
      font-size: 2.5rem;
      color: #F5A5EC;
    }
    h5 {
      font-weight: bold;
    }
    .btn-custom {
      background-color: #F5A5EC;
      border: none;
      color: white;
    }
    .btn-custom:hover {
      background-color: #e09cd4;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo BASE_URL; ?>esika">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container py-5">
  <h2 class="text-center mb-5" style="color: #F5A5EC; font-weight: bold;">Panel de Administrador</h2>
  <div class="row g-4 justify-content-center">
    <!-- Nuevo Producto -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card text-center shadow-sm">
        <div class="icon-container rounded-circle d-flex justify-content-center align-items-center mx-auto">
          <i class="bi bi-box-seam"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Nuevo Producto</h5>
          <p class="card-text">Añade productos a la base de datos.</p>
          <a href="<?php echo BASE_URL; ?>nuevoProducto" class="btn btn-custom">Nuevo</a>
          <a href="<?php echo BASE_URL; ?>productos" class="btn btn-outline-primary">Ver</a>
        </div>
      </div>
    </div>

    <!-- Nueva Categoría -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card text-center shadow-sm">
        <div class="icon-container rounded-circle d-flex justify-content-center align-items-center mx-auto">
          <i class="bi bi-tags"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Nueva Categoría</h5>
          <p class="card-text">Crea y organiza categorías.</p>
          <a href="<?php echo BASE_URL; ?>nuevoCategoria" class="btn btn-custom">Nuevo</a>
          <a href="<?php echo BASE_URL; ?>categorias" class="btn btn-outline-primary">Ver</a>
        </div>
      </div>
    </div>

    <!-- Nueva Compra -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card text-center shadow-sm">
        <div class="icon-container rounded-circle d-flex justify-content-center align-items-center mx-auto">
          <i class="bi bi-cart"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Nueva Compra</h5>
          <p class="card-text">Registra compras.</p>
          <a href="<?php echo BASE_URL; ?>nuevoCompras" class="btn btn-custom">Nuevo</a>
          <a href="<?php echo BASE_URL; ?>compras" class="btn btn-outline-primary">Ver</a>
        </div>
      </div>
    </div>

    <!-- Nueva Persona -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card text-center shadow-sm">
        <div class="icon-container rounded-circle d-flex justify-content-center align-items-center mx-auto">
          <i class="bi bi-person-plus"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Nueva Persona</h5>
          <p class="card-text">Añade nuevos usuarios al sistema.</p>
          <a href="<?php echo BASE_URL; ?>nuevoPersona" class="btn btn-custom">Nuevo</a>
          <a href="<?php echo BASE_URL; ?>personas" class="btn btn-outline-primary">Ver</a>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



