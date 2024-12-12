async function listar_personas() {
    try {
        let respuesta = await fetch(base_url+'controller/persona.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item=>{
                let nueva_fila = document.createElement("tr");
                nueva_fila.id= "fila"+item.id;// este es id que viene de la base de datos
                cont+=1;
                nueva_fila.innerHTML= `
                <th>${cont}</th>
                <td>${item.nro_identidad}</td>
                <td>${item.razon_social}</td>
                <td>${item.telefono}</td>
                <td>${item.correo}</td>
                <td>${item.departamento}</td>
                <td>${item.provincia}</td>
                <td>${item.distrito}</td>
                <td>${item.cod_postal}</td>
                <td>${item.direccion}</td>
                <td>${item.rol}</td>

               <td>${item.options}</td>
                `;
               document.querySelector('#tbl_persona').appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error"+error);
    }
}
 if (document.querySelector('#tbl_persona')) {
    listar_personas();
 }

async function registrarPersona() {
    // Capturamos los valores de los campos del formulario de persona
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let cod_postal = document.querySelector('#cod_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
   

    // Validación de campos vacíos
    if (nro_identidad === "" || razon_social === "" || telefono === "" || 
        correo === "" || departamento === "" || provincia === "" || 
        distrito === "" || cod_postal === "" || direccion === "" || 
        rol === ""  ) { alert("Error: ¡Hay campos vacíos!");
        return;
    }

    try {
        // Capturamos los datos del formulario HTML
        
        const datos = new FormData(frmRegistrar);

        // Enviar los datos hacia el controlador mediante el método POST
        let respuesta = await fetch(base_url + 'controller/persona.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        // Procesamos la respuesta JSON
        let json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
            frmRegistrar.reset();  // Limpiar el formulario después del registro exitoso
        } else {
            swal("Error", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}
async function ver_persona(id) {
    const formData=new FormData();
    formData.append('id_persona', id);
    try {
        let respuesta= await fetch(base_url + 'controller/persona.php?tipo=ver',{
            method:'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        // envia solicitud al controlador personas
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_producto').value = json.contenido.id;
            document.querySelector('#nro_identidad').value = json.contenido.nro_identidad;
            document.querySelector('#razon_social').value = json.contenido.razon_social;
            document.querySelector('#telefono').value = json.contenido.telefono;
            document.querySelector('#correo').value = json.contenido.correo;
            document.querySelector('#departamento').value = json.contenido.departamento;
            document.querySelector('#provincia').value = json.contenido.provincia;
            document.querySelector('#distrito').value = json.contenido.distrito;
            document.querySelector('#cod_postal').value = json.contenido.cod_postal;
            document.querySelector('#direccion').value = json.contenido.direccion;
            document.querySelector('#rol').value = json.contenido.rol;
            document.querySelector('#password').value = json.contenido.password;
      
        }else{
            window.location = base_url+"personas";
        }

        console.log(json);
    } catch (error) {
        console.log("Oops ocurrio un error"+error)
        
    }
    
}
async function actualizarPersona() {
    const datos = new FormData(frmActualizar);
   try{
    let respuesta = await fetch(base_url+'controller/persona.php?tipo=actualizar',{
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    json = await respuesta.json();
    if(json.status){
        swal("Actualizado", json.mensaje, "success");
    }else{
        swal("Actualizado", json.mensaje, "error");
    }

    console.log(json);
   } catch (e){
    console.log("Oops, ocurrio un error"+e);
   }
}
async function eliminarPersona(id) {
    swal({
        title: "Confirmar eliminación",
        text: "¿Estás seguro de que deseas eliminar este producto? Esta acción no se puede deshacer.",
        icon: "warning",
        buttons: {
            cancel: {
                text: "Cancelar",
                value: null,
                visible: true,
                className: "btn btn-secondary",
                closeModal: true,
            },
            confirm: {
                text: "Eliminar",
                value: true,
                visible: true,
                className: "btn btn-danger",
                closeModal: false,
            }
        },
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            fnt_eliminar(id)
                
        }
          
    });
    async function fnt_eliminar(id) {
        const formData = new FormData();
        formData.append('id_persona',id);
        try{
            let respuesta = await fetch(base_url+'controller/persona.php?tipo=eliminar',{
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: formData
            });
            json = await respuesta.json();
            if(json.status){
                swal("Eliminado","Persona eliminado correctamente","success");
                document.querySelector('#fila'+id).remove();
            }else{
                swal("Eliminar",json.mensaje,"warning");
            }
        } catch (e) {
            console.log("ocurrio error" + e);
            
        }
    }
}

// async function eliminarProducto(id) {
//     swal({
//         title: "¿Realmente desea eliminar este producto?",
//         text:'',
//         icon:"Warning",
//         buttons: true,
//         dangerMode:true
//     }).then((willDelete)=>{
//         if (willDelete) {
//             fnt_eliminar(id);
//         }

//     });
// }

