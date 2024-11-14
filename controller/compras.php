<?php
require_once('../model/comprasModel.php');

$tipo = $_REQUEST['tipo'];

// Instancia la clase CompraModel
$objcompras = new comprasModel();

if ($tipo == "registrar") {
    if ($_POST) {
        // Capturamos los datos enviados desde el formulario de compra
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $fecha_compra = $_POST['fecha_compra'];
        $id_trabajador = $_POST['id_trabajador'];

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
            $arrcompras = $objcompras->registrarCompras(
                $id_producto, $cantidad, $precio, $fecha_compra, $id_trabajador
            );

            // Comprobamos si el registro fue exitoso
            if ($arrcompras->id > 0) {
                // Actualizamos el stock del producto
                $objcompras->actualizarStock($id_producto, $cantidad);

                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Compra registrada exitosamente'
                );
            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error al registrar compra'
                );
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
    if (!empty($arr_categorias)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_compras); $i++) { 
            $id_compras = $arr_compras[$i]->id;
            $compras = $arr_compras[$i]->nombre;
            $opciones = '';
            $arr_compras[$i] ->options = $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_compras;
    }
    echo json_encode($arr_Respuesta);

}
?>
