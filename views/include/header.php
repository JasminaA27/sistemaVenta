
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<SCript>
    const base_url = '<?php echo BASE_URL;?>';
</SCript>
<body>
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg" style="background-color:#F5A5EC ">
        <div class="container-fluid row d-block">
            <div class="col-12 row">
                <a class="navbar-brand col-1" href="<?php echo BASE_URL; ?>esika"style=" width: 70px;"  >
                    <img src="<?php echo BASE_URL; ?>./views/plantilla/img/esika.png" alt="Bootstrap"
                        width="80" height="40">
                    </a>
                    <a class="navbar-brand col-1" href="<?php echo BASE_URL; ?>lbel"style=" width: 70px; margin-left: -10px; ">
                        <img src="<?php echo BASE_URL; ?>./views/plantilla/img/lbel.png" alt="Bootstrap"
                            width="80" height="40">
                        </a>
                        <a class="navbar-brand col-1" href="<?php echo BASE_URL; ?>cyzone" style=" width: 70px; margin-left: -10px;">
                            <img src="<?php echo BASE_URL; ?>./views/plantilla/img/cyzone.png" alt="Bootstrap"
                                width="80" height="40">
                            </a>  
                <form class="d-flex col-5" role="search" style="margin-left:100px;">
                    <input class="form-control me-2" type="text" placeholder="Estoy buscando....." aria-label="Search">
                </form>
                <div class="row justify-content-end">
                  <div class="col-auto" style="margin-top: -42px; justify-content: center;">
                    <a href="<?php echo BASE_URL; ?>descripcion">
                        <img src="<?php echo BASE_URL; ?>./views/plantilla/img/megus.png" class="profile-pic" width="50" height="30">
                    </a>
                  </div>
                  <div class="col-auto  "style="margin-top: -50px;">
                    <a href="<?php echo BASE_URL; ?>carrito">
                      <img src="<?php echo BASE_URL; ?>./views/plantilla/img/carrito.png" class="profile-pic"width="45" height="45" >
                    </a>                         
                  </div>
                  <div class="col-auto"style="margin-top: -45px;">
                    <a href="<?php echo BASE_URL; ?>perfil">
                      <img src="<?php echo BASE_URL; ?>./views/plantilla/img/usu.png" class="profile-pic" width="35" height="35">
                    
                    </a>
                  </div>
              </div>
            </div>
            <div class="col-12 d-flex">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tratamiento Facial
                            </a>
                            <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href=""> <h5>Limpieza Facial</h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto1"><p>Desmaquillador</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto1"><p>Esfoliante facial</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto1"><p>Limpiador facial</p></a>
                                    </li>
                                    <li><a class="dropdown-item" href=""> <h5>Ekincare</h5></a>
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
                                    <li><a class="dropdown-item" href=""> <h5>Cuerpo</h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto2"><p>Crema corporal</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto21"><p>Crema de manos</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto21"><p>Jabones</p></a>
                                        <a class="dropdown-item" href=""><p>Exfoliante corporal</p></a>
                                    </li>
                                    <li><a class="dropdown-item" href=""><h5>Cabello </h5></a>
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
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>producto3"><h5>Rostro</h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto3"><p>Base</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto3"><p>Rubor</p></a>  
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto3"><p>Polvo</p></a>    
                                    </li>
                                    <li><a class="dropdown-item" href="#"> <h5>Ojos</h5> </a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto31"><p>Mascara de pestañas</p></a> 
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto31"><p>Delineador de ojos</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto31"><p>Sombra de ojos</p></a>   
                                    </li>
                                    <li><a class="dropdown-item" href="#"><h5>Labios</h5> </a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto32"><p>Labial</p></a>  
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>producto32"><h5>Uñas</h5> </a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto32"><p>Esmaltes</p></a>  
                                    </li>
                                </ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Perfume
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"> <h5>Hombre</h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto4"><p>Perfumes</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto4"><p>Colonias</p></a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"> <h5>Mujer</h5> </a>
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
                                    <li><a class="dropdown-item" href="#"><h5>Joyeria</h5></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto5"><p>Aretes</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto5"><p>Collares</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto5"><p>Anillos</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto5"><p>Pulseras</p></a>
                                    </li>
                                    <li><a class="dropdown-item" href=""><h5>Relojes</h5> </a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto51"><p>Reloj de mujer</p></a>
                                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>producto51"><p>Reloj de hombre</p></a>
                                    <li><a class="dropdown-item" href="#"><h5>Accesorio</h5> </a>
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
                    <li><a class="dropdown-item" href="#" onclick="cerrar_sesion();">Cerrar Sesión</a></li>
                        </ul>
                </div>
                
    </nav>
</div>
