
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<SCript>
    const base_url = '<?php echo BASE_URL;?>';
</SCript>
<body>
    <div class="container-fluid p-0">
        <!-- Navbar Principal -->
        <nav class="navbar navbar-expand-lg" style="background-color:#F5A5EC">
            <div class="container-fluid">
                <!-- Logos Section -->
                <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <a href="<?php echo BASE_URL; ?>esika">
                            <img src="<?php echo BASE_URL; ?>./views/plantilla/img/esika.png" alt="Esika" width="80" height="40">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo BASE_URL; ?>lbel">
                            <img src="<?php echo BASE_URL; ?>./views/plantilla/img/lbel.png" alt="Lbel" width="80" height="40">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo BASE_URL; ?>cyzone">
                            <img src="<?php echo BASE_URL; ?>./views/plantilla/img/cyzone.png" alt="Cyzone" width="80" height="40">
                        </a>
                    </div>
                    <!-- Search Bar -->
                    <div class="col">
                        <form class="d-flex" role="search">
                            <input class="form-control me" type="text" placeholder="Estoy buscando..." aria-label="Search">
                            <button class="btn btn-outline-light" type="submit" style="margin-left: 10px ">Buscar</button>
                        </form>
                    </div>
                    <!-- Icons Section -->
                    <div class="col-auto d-flex align-items-center">
                        <a href="<?php echo BASE_URL; ?>descripcion" class="me-2">
                            <img src="<?php echo BASE_URL; ?>./views/plantilla/img/megus.png" width="50" height="30" alt="Me Gusta">
                        </a>
                        <a href="<?php echo BASE_URL; ?>carrito" class="me-2">
                            <img src="<?php echo BASE_URL; ?>./views/plantilla/img/carrito.png" width="45" height="45" alt="Carrito">
                        </a>
                        
                        <div class="dropdown">
    <a 
        class="btn btn-outline-dark" d-flex align-items-center justify-content-between
        href="#" 
        id="dropdownMenuButton" 
        data-bs-toggle="dropdown" 
        aria-expanded="false"
    >
        <span>Panel Administrador</span>
        <i class="bi bi-caret-down-fill ms-2"></i>
    </a>
    <div class="dropdown-menu p-3 shadow" aria-labelledby="dropdownMenuButton">
        <!-- Usuario -->
        <div class="d-flex align-items-center mb-2">
            <i class="bi bi-person-fill me-2"></i>
            <span><?php echo $_SESSION['sesion_ventas_nombres']; ?></span>
        </div>
        <hr class="dropdown-divider">
        <!-- Opciones -->
        <ul class="list-unstyled mb-0">
            <li>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>perfil">
                    <i class="bi bi-person-circle me-2"></i> Perfil
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>panel">
                    <i class="bi bi-layout-text-sidebar-reverse me-2"></i> Ver Panel
                </a>
            </li>
            <li>
                <a class="dropdown-item text-danger" href="#" onclick="cerrar_sesion();">
                    <i class="bi bi-box-arrow-right me-2"></i> Cerrar Sesión
                </a>
            </li>
        </ul>
    </div>
</div>

                        
                    </div>
                    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg" style="background-color:#F5A5EC ">
            <div class="container-fluid row d-block">
               <div class="col-12 d-flex">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tratamiento Facial
                            </a>
                            <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" > <h5>Limpieza Facial</h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto1"><p>Desmaquillador</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto1"><p>Esfoliante facial</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto1"><p>Limpiador facial</p></a>
                                    </li>
                                    <li><a class="dropdown-item"> <h5>Ekincare</h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto11"><p>Mascarilla</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto11"><p>crema hidratante</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto11"><p>Crema antimancha</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto11"><p>Bloqueador</p></a>
                                    </li>
                                  
                                </ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Cuidado Personal
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"> <h5>Cuerpo</h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto2"><p>Crema corporal</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto21"><p>Crema de manos</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto21"><p>Jabones</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto21"><p>Exfoliante corporal</p></a>
                                    </li>
                                    <li><a class="dropdown-item" ><h5>Cabello </h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto22"><p>Shampoo y acondicionador</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto22"><p>Crema para peinar</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto22"><p>Tratamiento capilar</p></a>
                                    </li>
                                
                                </ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Maquillaje
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" ><h5>Rostro</h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto3"><p>Base</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto3"><p>Rubor</p></a>  
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto3"><p>Polvo</p></a>    
                                    </li>
                                    <li><a class="dropdown-item" > <h5>Ojos</h5> </a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto31"><p>Mascara de pestañas</p></a> 
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto31"><p>Delineador de ojos</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto31"><p>Sombra de ojos</p></a>   
                                    </li>
                                    <li><a class="dropdown-item" ><h5>Labios</h5> </a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>pruducto32"><p>Labial</p></a>  
                                    </li>
                                    <li><a class="dropdown-item"><h5>Uñas</h5> </a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>pruducto32"><p>Esmaltes</p></a>  
                                    </li>
                                </ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Perfume
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"> <h5>Hombre</h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto4"><p>Perfumes</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto4"><p>Colonias</p></a>
                                    </li>
                                    <li><a class="dropdown-item" > <h5>Mujer</h5> </a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto41"><p>Perfumes</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto41"><p>Colonias</p></a>
                                    </li>
                                </ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Joyeria
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" ><h5>Joyeria</h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto5"><p>Aretes</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto5"><p>Collares</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto5"><p>Anillos</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto5"><p>Pulseras</p></a>
                                    </li>
                                    <li><a class="dropdown-item" ><h5>Relojes</h5> </a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto51"><p>Reloj de mujer</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto51"><p>Reloj de hombre</p></a>
                                    <li><a class="dropdown-item" ><h5>Accesorio</h5> </a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto52"><p>Carteras y mochilas</p></a>
                                    </li>
                                </ul>
                            </li>
                            <a style="margin-left: 250px;" class="nav-link " href="<?php echo BASE_URL; ?>sobrenosotros" role="button" 
                        aria-expanded="false">
                       | Sobre nostros
                    </a>
                    <a class="nav-link " href="<?php echo BASE_URL; ?>contactanos" role="button" 
                        aria-expanded="false">
                       | Contactenos
                    </a>
                    <a class="nav-link " href="<?php echo BASE_URL; ?>formulario" role="button" 
                        aria-expanded="false">
                       | Quiero ser consultora
                    </a>
                 </ul>

                    
                  </ul>
                </div>

            </div>
                
          </nav>

       </div>

     </div>

   </div>

</nav>


