<?php
require_once('../model/categoriaModel.php');

$tipo = $_REQUEST['tipo'];

//instanciar la clase categoria model

$objcategoria = new categoriaModel();

if ($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array
    ('status'=>false,'contenido'=>'');
    $arr_categorias = $objcategoria->obtener_categorias();

    print_r($arr_categorias);

}
?>