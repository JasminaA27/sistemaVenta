<?php
require_once('../model/trabajadorModel.php');
$tipo = $_REQUEST['tipo'];

// Instancio la clase CategoriaModel
$objCategoria = new trabajadorModel();

if ($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=>false,'contenido'=>'');
    $arr_Trabajador = $objTrabajador->obtener_trabajadores();
    if (!empty($arr_Trabajador)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_Trabajador); $i++) { 
            $id_trabajador = $arr_Trabajador[$i]->id;
            $nombre =  $arr_Trabajador[$i]->nombre;
            $opciones = '';
            $Trabajador[$i] ->options = $opciones;
        }
        
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Trabajador;
    }
    echo json_encode($arr_Respuesta);

}