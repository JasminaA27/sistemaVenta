
async function listar_compras() {
    try {
        let respuesta = await fetch(base_url+'controller/compras.php?tipo=listar');
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
                <td>${item.producto.nombre}</td>
                <td>${item.cantidad}</td>
                <td>${item.precio}</td>
                <td>${item.fecha_compra}</td>
                <td>${item.trabajador.razon_social}</td>
                
                <td>${item.options}</td>
                `;
               document.querySelector('#tbl_compras').appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error"+error);
    }
}
 if (document.querySelector('#tbl_compras')) {
    listar_compras();
 }


async function registrarCompras() {
    // Capturamos los valores de los campos del formulario de compra
    let id_producto = document.getElementById('producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
   
    let id_trabajador = document.querySelector('#trabajador').value;

    // Validación de campos vacíos
    if (
        id_producto === "" || cantidad === "" || precio === "" || 
         id_trabajador === ""
    ) {
        alert("Error: ¡Hay campos vacíos!");
        return;
    }

    try {
        // Capturamos los datos del formulario HTML
        
        const datos = new FormData(frmRegistrar);

        // Enviar los datos hacia el controlador mediante el método POST
        let respuesta = await fetch(base_url + 'controller/compras.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        // Procesamos la respuesta JSON
        let json = await respuesta.json();
        if (json.status) {
            swal("Compra Registrada", json.mensaje, "success");
            frmRegistrar.reset(); 
        } else {
            swal("Error", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}
async function listar_productos() {
    try{
        let respuesta = await fetch(base_url+'controller/producto.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value = "">Seleccione una producto</option>';

            datos.forEach(element => {
                contenido_select += '<option value="'+ element.id +'">' + element.nombre + '</option>';
                
            });
            
            document.getElementById('producto').innerHTML = contenido_select;
        }

        console.log(respuesta);

    }catch(e){
        console.log("Error al cargar producto"+e);
    }
}

async function listar_trabajadores() {
    try{
        let respuesta = await fetch(base_url+'controller/persona.php?tipo=listar_trabajadores');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value = "">Seleccione un trabajador </option>';

            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
                
            });
            document.getElementById('trabajador').innerHTML = contenido_select;
        }

        console.log(respuesta);

    }catch(e){
        console.log("Error al cargar trbajador"+e);
    }
}
async function ver_compras(id) {
    const formData=new FormData();
    formData.append('id_compra', id);
    try {
        let respuesta= await fetch(base_url + 'controller/compras.php?tipo=ver',{
            method:'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        // envia solicitud al controlador compras
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_compra').value = json.contenido.id;
            document.querySelector('#producto').value = json.contenido.id_producto;
            document.querySelector('#cantidad').value = json.contenido.cantidad;
            document.querySelector('#precio').value = json.contenido.precio;        
            document.querySelector('#trabajador').value = json.contenido.id_trabajador;
            
      
        }else{
            window.location = base_url+"compras";
        }

        console.log(json);
    } catch (error) {
        console.log("Oops ocurrio un error"+error)
        
    }
    
}
 //para actualizar
async function actualizarCompras() {
    const datos = new FormData(frmActualizar);
   try{
    let respuesta = await fetch(base_url+'controller/compras.php?tipo=actualizar',{
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    json = await respuesta.json();
    if(json.status){
        swal("Actualizado", json.mensaje, "success");
    }else{
        swal("No actualizado", json.mensaje, "error");
    }

    console.log(json);
   } catch (e){
    console.log("Oops, ocurrio un error"+e);
   }
}


async function eliminarCompra(id) {
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
        let respuesta = await fetch(base_url+'controller/compras.php?tipo=eliminar',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if(json.status){
            swal({
                title: "Eliminado",
                text: "Compra eliminada correctamente",
                icon: "success",
                buttons: {
                    confirm: {
                        text: "Aceptar",
                        className: "btn btn-success",
                    }
                }
            });
            document.querySelector('#fila'+id).remove();
        } else {
            swal({
                title: "Eliminar",
                text: "Error al eliminar",
                icon: "warning",
                buttons: {
                    confirm: {
                        text: "Reintentar",
                        className: "btn btn-warning",
                    }
                }
            });
        }        
    } catch (e) {
        console.log("ocurrio error" + e);
        
    }
}
