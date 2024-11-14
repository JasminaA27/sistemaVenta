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

   public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento,
   $provincia, $distrito, $cod_postal, $direccion, $rol, $password) {
    // Llamada al procedimiento almacenado que inserta una categoría
    $sql = $this->conexion->query("CALL insertPersona('{$nro_identidad}', '{$razon_social}', '{$telefono}', 
    '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}', '{$cod_postal}', '{$direccion}', '{$rol}', '{$password}'");
    
    // Se obtiene el objeto de resultado
    $sql = $sql->fetch_object();
    return $sql;
}
public function buscarPersonaPorDNI($dni){
    $sql = $this->conexion->query("SELECT * FROM persona WHERE nro_identidad='{$dni}'");
    $sql = $sql->fetch_object();
    return $sql;
}
}
?>