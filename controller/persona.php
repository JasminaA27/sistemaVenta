<?php
require_once('../model/personaModel.php');

// Instancia la clase modeloPersona
$objPersona = new PersonaModel();

$tipo = $_REQUEST['tipo'];

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
      
        // cifrar contraseña
        $secure_password = password_hash($nro_identidad, PASSWORD_DEFAULT);

        // Validación de campos vacíos
        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || 
            $correo == "" || $departamento == "" || $provincia == "" || 
            $distrito == "" || $cod_postal == "" || $direccion == "" || 
            $rol == "" || $secure_password == "" 
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
                $direccion, $rol, $secure_password
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
        
        echo json_encode($arr_Respuesta);
        }
    }
}


$objpersona = new personaModel();
$tipo = $_REQUEST['tipo'];

if ($tipo=="listar_proveedores"){
    //respuesta
    $arr_Respuesta = array('status'=>false,'contenido'=>'');
    $arr_personas = $objpersona->obtener_proveedores();
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

$objpersona = new personaModel();
$tipo = $_REQUEST['tipo'];

if ($tipo=="listar_trabajadores"){
    //respuesta
    $arr_Respuesta = array('status'=>false,'contenido'=>'');
    $arr_Trabajadores = $objpersona->obtener_trabajadores();
    if (!empty($arr_Trabajadores)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_Trabajadores); $i++) { 
            $id_Trabajadores = $arr_Trabajadores[$i]->id;
            $razon_social = $arr_Trabajadores[$i]->razon_social;
            $opciones = '';
            $arr_Trabajadores[$i] ->options = $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Trabajadores;
    }
    echo json_encode($arr_Respuesta);

}


$tipo = $_REQUEST['tipo'];

if ($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=>false,'contenido'=>'');
    $arr_personas = $objPersona->obtener_personas();
    if (!empty($arr_personas)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_personas); $i++) { 
            
            $id_persona = $arr_personas[$i]->id;
            $nombre = $arr_personas[$i]->razon_social;
            $opciones = '';
            $arr_personas[$i] ->options = $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_personas;
    }
    echo json_encode($arr_Respuesta);

}

?>