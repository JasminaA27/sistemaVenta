async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url+'controller/categoria.php?tipo=listar');
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
                <td>${item.nombre}</td>
                <td>${item.detalle}</td>
                
                <td>${item.options}</td>
                `;
               document.querySelector('#tbl_categoria').appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error"+error);
    }
}
 if (document.querySelector('#tbl_categoria')) {
    listar_categorias();
 }


async function registrarCategoria() {
    // Capturamos los valores de los campos del formulario de categoría
    let nombre = document.getElementById('nombre').value;
    let detalle = document.querySelector('#detalle').value;

    // Validación de campos vacíos
    if (nombre === "" || detalle === "") {
        alert("Error: ¡Hay campos vacíos!");
        return;
    }

    try {
        // Capturamos los datos del formulario HTML
        const frmRegistrar = document.getElementById('frmRegistrarCategoria');
        const datos = new FormData(frmRegistrar);

        // Enviar los datos hacia el controlador mediante el método POST
        let respuesta = await fetch(base_url + 'controller/categoria.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        // Procesamos la respuesta JSON
        let json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
            frmRegistrar.reset(); // Limpiar el formulario después del registro exitoso
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}
// para editar
async function ver_categoria(id) {
    const formData=new FormData();
    formData.append('id_categoria', id);
    try {
        let respuesta= await fetch(base_url + 'controller/categoria.php?tipo=ver',{
            method:'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        // envia solicitud al controlador categorias
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_producto').value = json.contenido.id;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
      
        }else{
            window.location = base_url+"categorias";
        }

        console.log(json);
    } catch (error) {
        console.log("Oops ocurrio un error"+error)
        
    }
    
}
async function actualizarCategoria() {
    const datos = new FormData(frmActualizar);
   try{
    let respuesta = await fetch(base_url+'controller/categoria.php?tipo=actualizar',{
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
async function eliminarCategoria(id) {
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
async function fnt_eliminar(id) {
    const formData = new FormData();
    formData.append('id_compra',id);
    try{
        let respuesta = await fetch(base_url+'controller/categoria.php?tipo=eliminar',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if(json.status){
            swal("Eliminado","Compra eliminado correctamente","success");
            document.querySelector('#fila'+id).remove();
        }else{
            swal("Eliminar","error al eliminar","warning");
        }
    } catch (e) {
        console.log("ocurrio error" + e);
        
    }
}



