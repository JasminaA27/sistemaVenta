<?php
require_once('../model/categoriaModel.php');


//instanciar la clase categoria model

$objcategoria = new categoriaModel();
$tipo = $_REQUEST['tipo'];

if ($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=>false,'contenido'=>'');
    $arr_categorias = $objcategoria->obtener_categorias();
    if (!empty($arr_categorias)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_categorias); $i++) { 
            $id_categoria = $arr_categorias[$i]->id;
            $categoria = $arr_categorias[$i]->nombre;
            $opciones = '';
            $arr_categorias[$i] ->options = $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_categorias;
    }
    echo json_encode($arr_Respuesta);

}

?>