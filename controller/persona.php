<?php
require_once('../model/personaModel.php');


//instanciar la clase categoria model

$objpersona = new personaModel();
$tipo = $_REQUEST['tipo'];

if ($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=>false,'contenido'=>'');
    $arr_personas = $objpersona->obtener_personas();
    if (!empty($arr_personas)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_personas); $i++) { 
            $id_personas = $arr_personas[$i]->id;
            $personas = $arr_personas[$i]->razon_social;
            $opciones = '';
            $arr_personas[$i] ->options = $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_personas;
    }
    echo json_encode($arr_Respuesta);

}

?>