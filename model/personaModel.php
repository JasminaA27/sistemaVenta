<?php

require_once('../librerias/conexion.php');

class personaModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function obtener_personas(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona where rol='proveedor'");
        while($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }
    // funcion para agregar personas 

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password, $estado, $fecha_registro) {
        // Llamada al procedimiento almacenado que inserta una persona
        $sql = $this->conexion->query("CALL insertPersona('{$nro_identidad}', '{$razon_social}', '{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}', '{$cod_postal}', '{$direccion}', '{$rol}', '{$password}', '{$estado}', '{$fecha_registro}')");
        
        // Se obtiene el objeto de resultado
        $sql = $sql->fetch_object();
        return $sql;
    }
}
?>