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
}
