<?php
require_once('../model/productoModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modeloproducto
$objProducto = new ProductoModel();

if($tipo=="registrar"){
    //print_r($_POST);
    //echo $_FILES['imagen'] ['name'];

   if ($_POST){
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle= $_POST['detalle'];
        $precio= $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $fecha_ven = $_POST['fecha_ven'];
        $imagen = 'imagen';
        $proveedor = $_POST['proveedor'];

        if($codigo=="" || $nombre=="" || 
        $detalle=="" || $precio=="" ||
         $stock=="" || $categoria=="" ||
          $fecha_ven=="" || $imagen=="" ||
           $proveedor==""){
            //respuesta
            $arr_Respuesta = array
            ('status'=>false,
            'mensaje'=>'Error, campos
            vacios');
        }else{
            $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $fecha_ven, $imagen, $proveedor);

            if($arrProducto->id > 0){
                $arr_Respuesta = array
                ('status'=>true,
                'mensaje'=>'Registro exitoso');

                // CARAGAR ARCHIVOS
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = './assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

                $nombre = $arrProducto->id.".".$tipoArchivo;

                if (move_uploaded_file($archivo,$destino.$nombre)) {
                    $arr_imagen = $objProducto->actualizar_imagen($id, $nombre);

                }else{
                    $arr_Respuesta = array('status' => true,
                    'mensaje'=> 'Registro Exitoso, error al subir imagen');
                }

            }else{
                $arr_Respuesta = array('status'=>false,
                'mensaje'=> 'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);


        }
    }
}

//instanciar la clase categoria model
$tipo = $_REQUEST['tipo'];

if ($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=>false,'contenido'=>'');
    $arr_Producto = $objProducto->obtener_productos();
    if (!empty($arr_Producto)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_Producto); $i++) { 
            $id_personas = $arr_Producto[$i]->id;
            $nombre = $arr_Producto[$i]->nombre;
            $opciones = '';
            $arr_Producto[$i] ->options = $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Producto;
    }
    echo json_encode($arr_Respuesta);

}
?>