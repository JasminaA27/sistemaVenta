<?php
require_once "../librerias/conexion.php";

class PersonaModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password, $estado, $fecha_inicio) {
        // Llamada al procedimiento almacenado que inserta una persona
        $sql = $this->conexion->query("CALL insertPersona('{$nro_identidad}', '{$razon_social}', '{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}', '{$cod_postal}', '{$direccion}', '{$rol}', '{$password}', '{$estado}', '{$fecha_inicio}')");
        
        // Se obtiene el objeto de resultado
        $sql = $sql->fetch_object();
        return $sql;
    }
}

?>
