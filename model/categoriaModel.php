<?php

require_once('../librerias/conexion.php');

class categoriaModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function obtener_categorias(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM categoria");
        while($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }

    // registrar categoria 
    
    public function registrarCategoria($nombre, $detalle) {
        // Llamada al procedimiento almacenado que inserta una categoría
        $sql = $this->conexion->query("CALL insertCategoria('{$nombre}', '{$detalle}')");
        
        // Se obtiene el objeto de resultado
        $sql = $sql->fetch_object();
        return $sql;
    }
    // creamos para obtener categoria
    public function obtener_categoria($id){
        $respuesta= $this->conexion->query("SELECT * FROM categoria WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
    // para edditar
    public function verCatergoria($id){
        $sql= $this->conexion->query("SELECT * FROM categoria WHERE id='$id'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function actualizarCategoria($id,$nombre, $detalle){
        $sql = $this->conexion->query("CALL actualizarCategoria('{$id}','{$nombre}', '{$detalle}')");
        $sql = $sql->fetch_object();
        return$sql;

    }
   
    public function productosAsociados($id){
        $sql = $this->conexion->query("SELECT COUNT(*) as count FROM producto WHERE id_categoria ='{$id}'");
        $resultado = $sql->fetch_object();
        return $resultado -> count > 0;
    }
    
    public function eliminarCategoria($id){
        $sql = $this->conexion->query("CALL eliminarCategoria('{$id}')");
        if (!$sql){
            die("Error en la ejecucuión " . $this->conexion->error);
        }
        return $sql;
    }
  
}
