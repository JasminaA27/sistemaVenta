<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg" style="background-color:#F5A5EC "> 
            <div class="container-fluid row d-block">
                <div class="col-12 row">
                    <a class="navbar-brand col-1" href="<?php echo BASE_URL; ?>esika"style=" width: 70px;"  >
                        <img src="./views/plantilla/img/esika.png" alt="Bootstrap"
                            width="80" height="40">
                        </a>
                        <a class="navbar-brand col-1" href="<?php echo BASE_URL; ?>lbel" style=" width: 70px;">
                            <img src="./views/plantilla/img/lbel.png" alt="Bootstrap"
                                width="80" height="40">
                            </a>
                            <a class="navbar-brand col-1" href="<?php echo BASE_URL; ?>cyzone" style=" width: 70px;">
                                <img src="./views/plantilla/img/cyzone.png" alt="Bootstrap"
                                    width="80" height="40">
                                </a>  
                    <form class="d-flex col-5" role="search" style="margin-left:100px;">
                        <input class="form-control me-2" type="text" placeholder="Estoy buscando....." aria-label="Search">
                    </form>
                    <div class="row justify-content-end ">
                      <div class="col-auto"  style="margin-top: -45px;">
                        <a href="<?php echo BASE_URL; ?>formulario" style="color: black;text-decoration: none">
                        | Quiero ser <br>
                        consultora
                        </a>
                      </div>
                      <div class="col-auto" style="margin-top: -45px;">
                        <a href="<?php echo BASE_URL; ?>login"style="color: black;text-decoration: none">
                          <img src="./views/plantilla/img/usu.png" class="profile-pic" width="30px" height="auto">
                          Inicia sesion
                        </a>
                      </div>
                      <div class="col-auto " style="margin-top: -50px;">
                        <a href="<?php echo BASE_URL; ?>carrito">
                          <img  src="./views/plantilla/img/carrito.png " class="profile-pic" width="40px" height="auto" >
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
                        </ul>
                    </div>
        </nav>
    </div>
<div id="carouselExampleIndicators" class="carousel slide"  >
                <div class="carousel-indicators"style="background-color: blue;">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/3f69ee3f-4300-4fdf-addb-6dc848916f7e___12380fd675234c60d6f0535a903ec021.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/f396a085-7433-49bd-8db7-4d162c36fbe7___82287ed0cd6566494fa87f17d78cb7ba.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/2d852032-9908-4489-8d04-b3b257c2b991___bdec50daaf2e547e565db3b9470e75ec.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container-fluid m-0 p-0 mt-5 row">
            <div class="col-lg-3 col-md-3 col-sm-5 p-2">
                <div class="card">
                    <img src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/cd7eface-0c5d-4cb6-998c-ee7eef434636___011deafd0af39a66973b9fae8e033d5f.jpg"
                        class="card-img-top" alt="...">

                </div>
                <div class="card-body">
                    <p class="card-text">CUIDADO PERSONAL</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 p-2">
                <div class="card">
                    <img src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/366073cb-ec79-4408-afa7-00cbde0ad8b4___245ca7ae4692fde4dd4e49576e992a77.jpg"
                        class="card-img-top" alt="...">

                </div>
                <div class="card-body">
                    <p class="card-text">PERFUMES</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 p-2">
                <div class="card">
                    <img src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/5bd6fa80-063a-467b-b9fa-8899e812812b___da6554e229ff5b2167ae388b0f2cb76a.jpg"
                        class="card-img-top" alt="...">

                </div>
                <div class="card-body">
                    <p class="card-text">MAQUILLAJE</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-5 p-2">
                <div class="card">
                    <img src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/125b1e36-2694-4eb4-a307-07c07c0c1b93___d1da400e266db3fed5a1359f0930b48c.jpg"
                        class="card-img-top" alt="...">

                </div>
                <div class="card-body">
                    <p class="card-text">JOYERIA</p>
                </div>
            </div>

        </div>
        <div class="container mt-4">
          <h3 class="text-center">MEJORES PERFUMES PARA HOMBRE Y MUJER</h3>
          <!-- Contenido -->
          <div id="productCarousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/258036-500-auto?v=638242206655200000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 1">
                      <div class="card-body " style="text-align: start;">
                        
                        <h5 class="text-center mb-2">Colonia Paradisso Cascade Illusion, 200 ml</h5>
                        <p class="card-text">S/ 3,299 <span class="discount"><s class="text-muted">S/ 115</s></span></p>
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/258351-500-auto?v=638242278960630000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 2">
                      <div class="card-body " style="text-align: start;">
                        
                        <h5 class="text-center mb-2">Colonia Paradisso Cascade Illusion, 200 ml</h5>
                        <p class="card-text">S/ 85 </span><s class="text-muted">S/ 115</s></p>
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/310921-500-auto?v=638562300335570000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 3">
                      <div class="card-body " style="text-align: start;">
                     
                        <h5 class="card-title mb-2">D'orsay Inspire Perfume de Hombre, 90 ml</h5>
                        <p class="card-text">S/ 99 <span class="discount"><s class="text-muted">S/ 115</s></span></p>
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/316249-500-auto?v=638628030130170000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 4">
                      <div class="card-body " style="text-align: start;">
             
                        <h5 class="card-title mb-2">Leyenda Absolute Perfume de Hombre, 100 ml</h5>
                        <p class="card-text">S/ 126<span class="discount"><s class="text-muted">S/ 115</s></span></p>
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/315524-500-auto?v=638616900163670000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 5">
                      <div class="card-body " style="text-align: start;">
                        
                        <h5 class="card-title mb-2">
                          Vibranza Addiction Perfume de Mujer, 45ml</h5>
                        <p class="card-text">S/ 125<span class="discount"> <s class="text-muted">S/ 153</s></span></p>
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/315532-500-auto?v=638617518189430000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 6">
                      <div class="card-body " style="text-align: start;">
                       
                        <h5 class="card-title mb-2">Vibranza Addiction Perfume de Mujer, 45ml</h5>
                        <p class="card-text">S/ 121<span class="discount"> <s class="text-muted">S/ 153</s></span></p>
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/258916-500-auto?v=638242291798900000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 7">
                      <div class="card-body " style="text-align: start;">
                        
                        <h5 class="card-title mb-2">Bela Perfume de Mujer, 45 ml</h5>
                        <p class="card-text">S/ 125<span class="discount"> <s class="text-muted">S/ 153</s></span></p>
                       
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/260178-500-auto?v=638242317276870000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 8">
                      <div class="card-body " style="text-align: start;">
                    
                        <h5 class="card-title mb-2">Salvaje Colonia para Hombre, 90 ml</h5>
                        <p class="card-text">S/ 85<span class="discount"> <s class="text-muted">S/ 153</s></span></p>
                      
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Controles -->
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel1" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <h1 class="text-center";>Lo mas vendido
              <h6 class="text-center">Productos de alta calidad, mas de 36h de color y aromas duraderos</h6>
          </h1>
           <div id="productCarousel2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/316121-500-auto?v=638623566186930000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 1">
                      <div class="card-body " style="text-align: start;">
                        
                        <h5 class="card-title mb-2">Kromo Black Perfume de Hombre, 90 ml</h5>
                        <p class="card-text">S/ 86<span class="discount"><s class="text-muted">S/ 119</s></span></p>
                        
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/257535-500-auto?v=638242191735600000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 2">
                      <div class="card-body " style="text-align: start;">
                       
                        <h5 class="card-title mb-2">Crema exfoliante para pies Multicare</h5>
                        <p class="card-text">S/ 30<span class="discount"><s class="text-muted">S/ 48</s></span></p>
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/288033-500-auto?v=638367090719970000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 3">
                      <div class="card-body " style="text-align: start;">
                      
                        <h5 class="card-title mb-2">crema-facial-tiple-accion-aclaradora</h5>
                        <p class="card-text">S/ 45 <span class="discount"><s class="text-muted">S/ 48</s></span></p>
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/313503-500-auto?v=638591676187870000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 4">
                      <div class="card-body " style="text-align: start;">
                        <h5 class="card-title mb-2">Labial COLORFIX Duo Tattoo</h5>
                        <p class="card-text">S/ 29.80 <span class="discount"><s class="text-muted">S/ 48</s></span></p>
                        
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/307474-500-auto?v=638537388180970000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 5">
                      <div class="card-body " style="text-align: start;">
                  
                        <h5 class="card-title mb-2">Sérum Facial Hydra Max Triple Acción Max</h5>
                        <p class="card-text">S/ 63 <span class="discount"><s class="text-muted">S/ 48</s></span></p>
                       
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/307891-500-auto?v=638542608195630000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 6">
                      <div class="card-body " style="text-align: start;">
          
                        <h5 class="card-title mb-2">Delineador de Ojos Líquido Punta Plumón Eye PRO</h5>
                        <p class="card-text">S/ 38<span class="discount"> <s class="text-muted">S/ 55</s></span></p>
                       
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/307816-500-auto?v=638542404225600000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 7">
                      <div class="card-body " style="text-align: start;">
                       
                        <h5 class="card-title mb-2">Delineador de Ojos Líquido Punta Plumón Eye PRO</h5>
                        <p class="card-text">S/ 42<span class="discount"><s class="text-muted">S/ 65</s></span></p>
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                      <img src="https://esikaperu.vtexassets.com/arquivos/ids/315532-500-auto?v=638617518189430000&width=500&height=auto&aspect=true" class="card-img-top" alt="Producto 8">
                      <div class="card-body " style="text-align: start;">
                        <h5 class="card-title mb-2">Vibranza Addiction Perfume de Mujer, 45ml</h5>
                        <p class="card-text">S/ 50<span class="discount"> <s class="text-muted">S/ 95</s></span></p>
                       
                        <a href="<?php echo BASE_URL; ?>descripcion" class="btn btn-primary"style="margin-left: 60px;"> Ver detalle </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
              <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#productCarousel2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
    <div class="col-12 row m-0 container-fluid p-0" >
        
        <div id="imagenes_productos" class="col-6 row m-0">
            <div id="imagen_principal" class="col-12 p-2" style=" height: auto;"> 
                <img src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/7b302599-3aa3-42fb-afb6-85a213b88e41___8f499b538925faa84c5523843ba5eaae.jpg" 
                alt="" width="400" height="600">
                <button class="" style="background-color: red; border: red; color: white; "> 
                    <a href="html/sobrenosotros.html"></a>Conoce mas</button>
        </div>

        </div>
        <div id="detalles" class="col-6 p-2" style=" height: 700px;">
            <img src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/c6197a59-2d09-4ea9-8261-0efa8dbe3b56___4d9147c65f393963c98881a49a9a145a.jpg" 
            alt="" width="400" height="600"> 
            <button class="" style="background-color: red; border: red; color: white;">
                 <a href="https://issuu.com/somosbelcorp/docs/cyzone.peru.c11.2024?fr=xKAE9_zU1NQ"></a>Ir a catalogo</button>
    </div>
    </div>
    <footer>
      <div class="container-fluid p-0">
          <nav class="navbar  navbar-expand-lg" style=" background-color:#F5A5EC; height: 120px; margin-top: 30px;">
              <div class="container-fluid row d-block">
                  <div class="col-12 row">
                      <h4 style="text-align: center;">Se lo que tu quieres ser</h4>
                      <p style="text-align: center;">Productos de alta calidad | Dermatologicamente probado | Metales 100% regulados</p>
                  </div>
              </div> 
          </nav>
      </div>
      <div class="container-fluid">
          <nav class="navbar  navbar-expand-lg" style=" background-color:white; height: auto">
              <div class="container-fluid row d-block">
                  <div class="col-12 row">
                      <div class="col-md-3">
                          <h5>NUESTRAS MARCAS</h5>
                          <ul class="list-unstyled">
                              <li>Esika</li>
                              <li>Lbel</li>
                              <li>Cyzone</li>
                          </ul>
                      </div>
                      <div class="col-md-3">
                          <h5>CONOCENOS</h5>
                          <ul class="list-unstyled">
                              <a href="<?php echo BASE_URL; ?>sobrenosotros"style="color: black; text-decoration: none;">Sobre nosotros <br>
                                 
                              </a>
                              <a href="https://cdn1-prd.beautymovers.com/nextgencommerce/docs/legal/pe/condiciones-de-uso-web/2022.pdf"style="color: black; text-decoration: none;">Innovacion <br>
                                  
                              </a>
                              <a href="https://cdn1-prd.beautymovers.com/nextgencommerce/docs/legal/pe/condiciones-de-uso-web/2022.pdf"style="color: black; text-decoration: none;">Calidad <br>
                               
                              </a>
                              <a href="<?php echo BASE_URL; ?>sobrenosotros"style="color: black; text-decoration: none;">Preguntas frecuentes <br>
                                 
                              </a>
                          </ul>
                      </div>
                      <div class="col-md-3">
                          <h5>LEGAL</h5>
                          <ul class="list-unstyled">
                              <a href="https://cdn1-prd.beautymovers.com/nextgencommerce/docs/legal/pe/politica-de-privacidad/2022.pdf"style="color: black; text-decoration: none;">Condiciones de uso <br>
                                  
                              </a>
                              <a href="https://cdn1-prd.beautymovers.com/nextgencommerce/docs/legal/pe/politica-de-privacidad/2022.pdf" style="color: black; text-decoration: none;">Política de privacidad <br>
                                  
                              </a>
                              <a href="https://cdn1-prd.beautymovers.com/nextgencommerce/docs/legal/pe/politica-de-privacidad/2022.pdf" style="color: black; text-decoration: none;">Términos y condiciones <br>
                                  
                              <a href="https://cdn1-prd.beautymovers.com/nextgencommerce/docs/legal/pe/politica-de-privacidad/2022.pdf" style="color: black; text-decoration: none;">Política de cambio y devoluciones <br>
                          
                              </a>
                              
                          </ul>
                      </div>
                      <div class="col-md-3">
                          <h5>Quiero ser consultora</h5>
                          <ul class="list-unstyled">

                              <a href="<?php echo BASE_URL; ?>contactanos"style="text-decoration: none; color: black;">contactenos</a> <br>
                             
                              <a href="<?php echo BASE_URL; ?>libroreclam" style="text-decoration: none; color: black;">Libro de reclamaciones</a> <br>
                              
                          </ul>
                      </div>
                  </div>
                  <div class="row text-center social-icons mt-3" style="left: auto;">
                      <div class="col">
                          <a href="https://www.instagram.com/"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                          <a href="https://www.tiktok.com/"><img src="https://img.icons8.com/fluent/48/000000/tiktok.png"/></a>
                          <a href="https://www.facebook.com/"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/></a>
                          <a href="https://www.youtube.com/"><img src="https://img.icons8.com/fluent/48/000000/youtube-play.png"/></a>
                      </div>
                  </div>
              </div>
                  </div>
              </div> 
          </nav>
      </div>
      <div class="container-fluid p-0">
          <nav class="navbar  navbar-expand-lg" style=" background-color:black; height: 120px;">
              <div class="container-fluid row d-block">
                  <div class="col-12 row">
                      <div class="footer-bottom">
                          <p style="text-align: center; color: white;">Pagos 100% seguros | Entrega a todo el Perú | Productos de calidad</p>
                          <div class="d-flex justify-content-center">
                              <img style="width: 40px;height: 40px;margin-right: 10px;" src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/1c4431a3-e2c3-4343-a132-9463b3aad5ed___e23f3fad75f802fab144d6cb968354fe.png"/>
                              <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/cdc6d589-4afc-4bfe-bcfd-8e2beb4b3362___2863bc3a6d5a65f0389e310440396a49.png"/>
                              <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/1672e7c1-8c43-4e4a-b36e-0f6f13dcd56f___f44ab2250e1a6a9f54711849f1db0dd0.png"/>
                              <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/338de717-2752-4b00-af72-cd14293d6134___882e3d8fc45011cd89ef77d43df84e1d.png"/>
                              <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/a1a99d11-772e-4c2b-b5a3-7c376a9b478c___12569e7ce2457f50da80246d982d3c4f.png"/>
                              <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/3c4af8c3-49eb-4d5d-915a-4ae06235defe___907a5bf7f9ed5501616fb3c1bccd5efa.png"/>
                              <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/506ee878-1699-45b8-a9b0-8cee40ddc5d2___4615ed79e4371cf0963d3a6a6a9c952d.png"/>
                              <img style="width: 40px;height: 40px;margin-right: 10px;"  src="https://esikaperu.vtexassets.com/assets/vtex.file-manager-graphql/images/968dd3f4-90ce-49f7-b838-059ac1af8690___e0c56c5c20470f3238b6b0cb6ede6a27.png"/> 
                          </div>
                      </div>
                  </div>
              </div> 
          </nav>
      </div>
            
     
  </footer>

</body>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
