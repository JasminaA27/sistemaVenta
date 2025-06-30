<?php
require_once('../model/personaModel.php'); // Carga el modelo correspondiente para personas
$tipo = $_REQUEST['tipo'];

// Instancia la clase modeloPersona
$objPersona = new PersonaModel();

if ($tipo == "registrar") {
    if ($_POST) {
        // Capturamos los datos enviados desde el formulario
        $nro_identidad = $_POST['nro_identidad'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $cod_postal = $_POST['cod_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $password = $_POST['password'];
        $estado = $_POST['estado'];
        $fecha_registro = $_POST['fecha_registro'];

        // Validación de campos vacíos
        if (
            $nro_identidad == "" || $razon_social == "" || $telefono == "" || 
            $correo == "" || $departamento == "" || $provincia == "" || 
            $distrito == "" || $cod_postal == "" || $direccion == "" || 
            $rol == "" || $password == "" || $estado == "" || $fecha_registro == ""
        ) {
            // Respuesta si hay campos vacíos
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacíos'
            );
        } else {
            // Llamada al método del modelo para registrar a la persona
            $arrPersona = $objPersona->registrarPersona(
                $nro_identidad, $razon_social, $telefono, $correo, 
                $departamento, $provincia, $distrito, $cod_postal, 
                $direccion, $rol, $password, $estado, $fecha_registro
            );

            // Comprobamos si el registro fue exitoso
            if ($arrPersona->id > 0) {
                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Registro exitoso'
                );
            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error al registrar persona'
                );
            }
        }
        echo json_encode($arr_Respuesta);
    }
}
?>
