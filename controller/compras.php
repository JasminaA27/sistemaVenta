<?php
require_once('../model/comprasModel.php');

$tipo = $_REQUEST['tipo'];

// Instancia la clase CompraModel
$objcompras = new comprasModel();

if ($tipo == "registrar") {
    if ($_POST) {
        // Capturamos los datos enviados desde el formulario de compra
        $id_producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $fecha_compra = $_POST['fecha_compra'];
        $id_trabajador = $_POST['trabajador'];

        // Validación de campos vacíos
        if ($id_producto == "" || $cantidad == "" || $precio == "" || 
            $fecha_compra == "" || $id_trabajador == ""
        ) {
            // Respuesta si hay campos vacíos
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacíos'
            );
        } else {
            // Llamada al método del modelo para registrar la compra
            $arrProducto = $objcompras->registrarCompras(
                $id_producto, $cantidad, $precio, $fecha_compra, $id_trabajador
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
 

 
