<?php
require_once "../librerias/conexion.php";

class comprasModel {

    private $conexion;
    
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    // Método para registrar una compra
    public function registrarCompras($id_producto, $cantidad, $precio, $fecha_compra, $id_trabajador) {
        $sql = $this->conexion->query("CALL insertCompras('{$id_producto}', '{$cantidad}', '{$precio}', '{$fecha_compra}', '{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

 //funcion para crear productos en la tabla producto
 public function obtener_compras(){
    $arrRespuesta = array();
    $respuesta = $this->conexion->query("SELECT * FROM compras");
    while($objeto = $respuesta->fetch_object()){
        array_push($arrRespuesta,$objeto);
    }
    return $arrRespuesta;
}  
  // para edditar
  public function verCompras($id){
    $sql= $this->conexion->query("SELECT * FROM compras WHERE id='$id'");
    $sql = $sql->fetch_object();
    return $sql;
}
public function actualizarCompras($id, $id_producto, $cantidad, $precio, $fecha_compra, $id_trabajador) {
    $sql = $this->conexion->query("CALL actualizarCompras('{$id}','{$id_producto}', '{$cantidad}', '{$precio}', '{$fecha_compra}', '{$id_trabajador}')");
    $sql = $sql->fetch_object();
    return $sql;
}

}


?>
