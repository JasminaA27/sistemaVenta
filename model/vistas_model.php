<?php
class vistaModelo
{

    protected static function obtener_vista($vista)
    {
        $palabras_permitidas = ['usuario', 'producto', 'index', 'esika', 'lbel', 'cyzone', 'descripcion', 'producto1', 'contactanos'];
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } elseif ($vista == "carrito") {
            $contenido = "carrito";
        }else{
            $contenido = "404";
        }
        return $contenido;
    }
}
