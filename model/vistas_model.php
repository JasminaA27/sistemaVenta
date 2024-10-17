<?php
class vistaModelo
{

    protected static function obtener_vista($vista)
    {
        $palabras_permitidas = ['usuario', 'producto', 'esika', 'lbel', 'cyzone', 'descripcion', 'producto1', 
        'producto11','producto2', 'producto21', 'producto22', 'producto3', 'producto31',
         'producto4', 'producto41', 'producto5', 'producto51', 'producto52', 'producto32','nuevoProducto'];
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "index" || $vista == "index") {
            $contenido = "index";
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
        }else{
            
            $contenido = "404";
        }
        return $contenido;
    }
}
