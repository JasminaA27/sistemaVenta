<?php
require_once('../model/personaModel.php');

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
      
        
        $password = password_hash($nro_identidad, PASSWORD_DEFAULT);

        // Validación de campos vacíos
        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || 
            $correo == "" || $departamento == "" || $provincia == "" || 
            $distrito == "" || $cod_postal == "" || $direccion == "" || 
            $rol == "" || $password == "" 
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
                $direccion, $rol, $password
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

//instanciar la clase categoria model

$objpersona = new personaModel();
$tipo = $_REQUEST['tipo'];

if ($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=>false,'contenido'=>'');
    $arr_personas = $objpersona->obtener_personas();
    if (!empty($arr_personas)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_personas); $i++) { 
            $id_personas = $arr_personas[$i]->id;
            $personas = $arr_personas[$i]->razon_social;
            $opciones = '';
            $arr_personas[$i] ->options = $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_personas;
    }
    echo json_encode($arr_Respuesta);

}


?>