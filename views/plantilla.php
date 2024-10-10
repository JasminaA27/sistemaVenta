<?php

require_once "./controller/vistas_control.php";
require_once "./config/config1.php";

$mostrar = new vistasControlador();

$vista = $mostrar->obtenerVistaControlador();
if ($vista == "login" || $vista == "carrito" || $vista == "perfil" || $vista == "sobrenosotros" || $vista == "registrate"
|| $vista == "contactanos" || $vista == "formulario" || $vista == "libroreclam" || $vista == "index" ||$vista == "404") {
     require_once "./views/" . $vista . ".php";
} else {
     include "./views/include/header.php";
     include $vista;
     include "./views/include/footer.php";
}
