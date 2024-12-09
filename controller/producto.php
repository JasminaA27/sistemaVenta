<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];

//instancio la clase modeloproducto
$objProducto = new ProductoModel();
$objCategoria = new CategoriaModel();
$objPersona = new PersonaModel();

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
            // CARAGAR ARCHIVOS
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = '../assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

                $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $fecha_ven, $imagen, $proveedor,$tipoArchivo);

            if($arrProducto->id_n > 0){
                $newid = $arrProducto->id_n;
                $arr_Respuesta = array
                ('status'=>true,
                'mensaje'=>'Registro exitoso');

                
                $nombre = $arrProducto->id_n.".".$tipoArchivo;

                if (move_uploaded_file($archivo,$destino.''.$nombre)) {

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

//listar la tabla productos
$tipo = $_REQUEST['tipo'];

if ($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=>false,'contenido'=>'');
    $arr_Producto = $objProducto->obtener_productos();
    if (!empty($arr_Producto)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_Producto); $i++) { 

            // para categoria
            $id_categoria = $arr_Producto[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categoria ($id_categoria);
            $arr_Producto[$i]->categoria=$r_categoria;


            // para proveedor
            $id_proveedor = $arr_Producto[$i]->id_proveedor;
            $r_proveedor = $objPersona->obtener_proveedor ($id_proveedor);
            $arr_Producto[$i]->proveedor=$r_proveedor;
        

            $id_producto = $arr_Producto[$i]->id;
            $nombre = $arr_Producto[$i]->nombre;
            // localhost//editar-producto/id del productto 4     // opcion eliminar llama a la funcion eliminar producto/id del producto
            $opciones = '<a href="'.BASE_URL.'editarProducto/'.$id_producto.'"class="btn btn-outline-success">Editar</a>
            <button onclick="editarProducto('.$id_producto.');"class="btn btn-outline-danger" >Eliminar</button>';
            $arr_Producto[$i] ->options = $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Producto;
    }
    echo json_encode($arr_Respuesta);

}

if($tipo == "ver"){
    //print_r($_POST);
    $id_producto = $_POST['id_producto'];
    $arr_Respuesta = $objProducto->verProducto($id_producto);
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
    //print_r($_POST);
    //echo $_FILES['imagen'] ['name'];

   if ($_POST){

        $id_producto = $_POST['id_producto'];
        $img = $_POST['img'];
        $nombre = $_POST['nombre'];
        $detalle= $_POST['detalle'];
        $precio= $_POST['precio'];
        $categoria = $_POST['categoria'];
        $fecha_ven = $_POST['fecha_ven'];
        //$imagen = 'imagen';
        $proveedor = $_POST['proveedor'];

        if( $nombre=="" || 
        $detalle=="" || $precio==""|| $categoria=="" ||
          $fecha_ven=="" || 
           $proveedor==""){
            //respuesta
            $arr_Respuesta = array
            ('status'=>false,
            'mensaje'=>'Error, campos
            vacios');
        }else{
              
             $arrProducto = $objProducto->actualizarProducto($id_producto,$nombre, $detalle, $precio, $categoria, $fecha_ven, $proveedor);

            if($arrProducto->p_id > 0){
                $arr_Respuesta = array
                ('status'=>true,
                'mensaje'=>' Producto Actualizado ');

                //funcion para actualizar imagen por id
                if ($_FILES['imagen']['tmp_name'] !="") {
                    unlink('../assets/img_productos/' . $img);

                   // CARAGAR ARCHIVOS
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = '../assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

                if (move_uploaded_file($archivo,$destino.''.
                $id_producto.'.'.$tipoArchivo)) {   
                }

             }

            }else{
                $arr_Respuesta = array('status'=>false,
                'mensaje'=> 'Error al actualizar producto');
            }
            echo json_encode($arr_Respuesta);


        }
    }
}

?>