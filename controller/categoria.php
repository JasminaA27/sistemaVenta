<?php
require_once('../model/categoriaModel.php');


$objCategoria = new categoriaModel();

$tipo = $_REQUEST['tipo'];

if ($tipo == "registrar") {
    if ($_POST) {
        // Capturamos los datos enviados desde el formulario
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];

        // Validación de campos vacíos
        if ($nombre == "" || $detalle == "") {
            // Respuesta si hay campos vacíos
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacíos'
            );
        } else {
            // Llamada al método del modelo para registrar la categoría
            $arrCategoria = $objCategoria->registrarCategoria($nombre, $detalle);

            // Comprobamos si el registro fue exitoso
            if ($arrCategoria->id > 0) {
                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Categoría registrada exitosamente'
                );
            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error al registrar categoría'
                );
            }
        }
        echo json_encode($arr_Respuesta);
    }
}

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

            $opciones = '<a href="'.BASE_URL.'editarCategoria/'.$id_categoria.'"class="btn btn-outline-success">Editar</a>
            <button onclick="eliminarCategoria('.$id_categoria.');"class="btn btn-outline-danger" >Eliminar</button>';
            $arr_categorias[$i] ->options = $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_categorias;
    }
    echo json_encode($arr_Respuesta);

}

if($tipo == "ver"){
    //print_r($_POST);
    $id_categoria = $_POST['id_categoria'];
    $arr_Respuesta = $objcategoria->verCatergoria($id_categoria);
    //print_r($arr_Respuesta);
    if (empty($arr_Respuesta)) {
        $response = array('status'=> false,'mensaje'=>"Error, no hay informacion");
    }else {
        $response = array('status'=> true,'mensaje'=>"Datos encontrados",'contenido'=>$arr_Respuesta);
    }
    echo json_encode($response);

}
if($tipo=="actualizar"){

    if ($_POST) {
        $id_producto = $_POST['id_producto'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];

        // Validación de campos vacíos
        if ($nombre == "" || $detalle == "") {
            // Respuesta si hay campos vacíos
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacíos'
            );
        } else {
            // Llamada al método del modelo para registrar la categoría
            $arrCategoria = $objCategoria->actualizarCategoria($id_producto, $nombre, $detalle);

            // Comprobamos si el registro fue exitoso
            if ($arrCategoria->p_id > 0) {
                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Categoría Actualizada'
                );
            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error al actualizar categoría'
                );
            }
        
        echo json_encode($arr_Respuesta);
        }
    }
}
if($tipo=="eliminar"){
    
    if ($_POST){
    $id_categoria = $_POST['id_compra'];
    $arr_Respuesta = $objcategoria->eliminarCategoria($id_categoria);
    //print_r($arr_Respuesta);
    if (empty($arr_Respuesta)) {
        $response = array('status'=> false);
    }else {
        $response = array('status'=> true);
    }
    echo json_encode($response);
  }
}

?>