<?php
session_start();
class vistaModelo{

    protected static function obtener_vista($vista)
    {
        $palabras_permitidas = ['usuario','login', 'esika', 'lbel', 'cyzone', 'descripcion', 'producto1', 
        'producto11','producto2', 'producto21', 'producto22', 'producto3', 'producto31',
         'producto4', 'producto41', 'producto5', 'producto51', 'producto52', 'producto32','nuevoProducto','nuevoPersona',
        'nuevoCategoria', 'nuevoCompras','productos', 'personas','categorias','compras','editarProducto','editarPersona',
         'editarCompras','editarCategoria'];
       
        if (!isset($_SESSION['sesion_ventas_id'])) {
            return "login";
        }
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "esika" || $vista == "login") {
            $contenido = "login";
        } elseif ($vista == "login") {
            $contenido = "login";
        } elseif ($vista == "carrito") {
            $contenido = "carrito";
        } elseif ($vista == "perfil") {
            $contenido = "perfil";
        } elseif ($vista == "sobrenosotros") {
            $contenido = "sobrenosotros";
        } elseif ($vista == "registrate") {
            $contenido = "registrate";
        } elseif ($vista == "contactanos") {
            $contenido = "contactanos";
        } elseif ($vista == "formulario") {
            $contenido = "formulario";
        } elseif ($vista == "libroreclam") {
            $contenido = "libroreclam";
        } elseif ($vista == "panel") {
            $contenido = "panel";
        } elseif ($vista == "admin") {
            $contenido = "admin";
        }else{

            $contenido = "404";
        }
        return $contenido;
    }
}
