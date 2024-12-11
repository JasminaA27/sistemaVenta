<?php
require_once('../model/comprasModel.php');
require_once('../model/productoModel.php');
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];


// Instancia la clase CompraModel
$objcompras = new comprasModel();
$objProducto = new ProductoModel();
$objPersona = new personaModel();

if ($tipo == "registrar") {
    if ($_POST) {
        // Capturamos los datos enviados desde el formulario de compra
        $id_producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        /* $fecha_compra = $_POST['fecha_compra']; */
        $id_trabajador = $_POST['trabajador'];

        // Validación de campos vacíos
        if ($id_producto == "" || $cantidad == "" || $precio == "" || 
           /*  $fecha_compra == "" || */ $id_trabajador == ""
        ) {
            // Respuesta si hay campos vacíos
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacíos'
            );
        } else {
            // Llamada al método del modelo para registrar la compra
            $arrProducto = $objcompras->registrarCompras(
                $id_producto, $cantidad, $precio, $id_trabajador
            );

            // Comprobamos si el registro fue exitoso
            if ($arrProducto->id > 0) {

                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Compra registrada exitosamente' );

            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error al registrar compra');
                }
            }
        
        echo json_encode($arr_Respuesta);
    
  }
 }
 $tipo = $_REQUEST['tipo'];

if ($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=>false,'contenido'=>'');
    $arr_compras = $objcompras->obtener_compras();
    if (!empty($arr_compras)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_compras); $i++) { 

             // para producto
             $id_producto = $arr_compras [$i]->id_producto;
             $r_producto = $objProducto->obtener_productoid($id_producto);
             $arr_compras [$i]->producto=$r_producto;
 

            // para trabajador
             $id_trabajador = $arr_compras [$i]->id_trabajador;
             $r_trabajador = $objPersona->obtener_trabajador($id_trabajador);
             $arr_compras [$i]->trabajador=$r_trabajador;

            $id_compras = $arr_compras[$i]->id;
            $cantidad = $arr_compras[$i]->cantidad;
            $opciones = '<a href="'.BASE_URL.'editarCompras/'.$id_compras.'"class="btn btn-outline-success">Editar</a>
            <button onclick="editarCompras('.$id_compras.');"class="btn btn-outline-danger" >Eliminar</button>';
            $arr_compras[$i] ->options = $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_compras;
    }
    echo json_encode($arr_Respuesta);

}

if($tipo == "ver"){
    //print_r($_POST);
    $id_compras = $_POST['id_compra'];
    $arr_Respuesta = $objcompras->verCompras($id_compras);
    //print_r($arr_Respuesta);
    if (empty($arr_Respuesta)) {
        $response = array('status'=> false,'mensaje'=>"Error, no hay informacion");
    }else {
        $response = array('status'=> true,'mensaje'=>"Datos encontrados",'contenido'=>$arr_Respuesta);
    }
    echo json_encode($response);

}
 
 // para actualizar

if($tipo=="actualizar"){

    if ($_POST) {
        // Capturamos los datos enviados desde el formulario de compra
        $id_compra = $_POST['id_compra'];
        $id_producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        /* $fecha_compra = $_POST['fecha_compra']; */
        $id_trabajador = $_POST['trabajador'];
       

        // Validación de campos vacíos
        if ($id_producto == "" || $cantidad == "" || $precio == "" || 
             $id_trabajador == ""
        ) {
            // Respuesta si hay campos vacíos
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacíos'
            );
        } else {
            
            $arrProducto = $objcompras->actualizarCompras(
                $id_compra, $id_producto, $cantidad, $precio, $id_trabajador
            );

            if ($arrProducto->p_id > 0) {

                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Compra Actualizado' );

            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error al actualizar compra');
                }
           
        echo json_encode($arr_Respuesta);

     }
        
  }
 }

 
