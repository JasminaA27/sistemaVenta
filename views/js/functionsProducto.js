async function listar_productos() {
    try {
        let respuesta = await fetch(base_url+'controller/producto.php?tipo=listar');
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
                <td>${item.codigo}</td>
                <td>${item.nombre}</td>
                <td>${item.detalle}</td>
                <td>${item.precio}</td>
                <td>${item.stock}</td>
                <td>${item.categoria.nombre}</td>
                <td>${item.proveedor.razon_social}</td>

                <td>${item.options}</td>
               
                `;
               document.querySelector('#tbl_producto').appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error"+error);
    }
}
 if (document.querySelector('#tbl_producto')) {
    listar_productos();
 }



async function registrarProducto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio= document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let fecha_ven = document.querySelector('#fecha_ven').value;
    let imagen = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#proveedor').value;
    if (codigo==""|| nombre==""|| detalle==""|| precio==""|| 
        stock==""|| categoria==""|| fecha_ven==""|| imagen==""||proveedor=="" ){ 
        alert("error!!, campos vacios");
        return;
    }
   try{
    // capturamos datpos del formulario html
    const datos = new FormData(frmRegistrar);
    // enviar datod hacia el controlador esto es por el metodod pst
    let respuesta = await fetch(base_url+'controller/producto.php?tipo=registrar',{
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    json = await respuesta.json();
    if(json.status){
        swal("registro", json.mensaje, "success");
        frmRegistrar.reset(); 
    }else{
        swal("Error", json.mensaje, "error");
    }

    console.log(json);
   } catch (e){
    console.log("Oops, ocurrio un error"+e);
   }
}

async function listar_categorias() {
    try{
        let respuesta = await fetch(base_url+'controller/categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value = "">Seleccione una categoria</option>';

            datos.forEach(element => {
                contenido_select += '<option value="'+ element.id +'">' + element.nombre + '</option>';
                
            });
            // este codigo es para trabajar con jquery

             /*datos.forEach(element => {
                $('#categoria').append($('<option />',{
                    text:`${element.nombre}`,
                    value: `${element.id}`
                }));
            });*/
            document.getElementById('categoria').innerHTML = contenido_select;
        }

        console.log(respuesta);

    }catch(e){
        console.log("Error al cargar categorias"+e);
    }
}

async function listar_proveedores() {
    try{
        let respuesta = await fetch(base_url+'controller/persona.php?tipo=listar_proveedores');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value = "">Seleccione proveedor </option>';

            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
                
            });
            document.getElementById('proveedor').innerHTML = contenido_select;
        }

        console.log(respuesta);

    }catch(e){
        console.log("Error al cargar proveedor"+e);
    }
}

// para editar
async function ver_producto(id) {
    const formData=new FormData();
    formData.append('id_producto', id);
    try {
        let respuesta= await fetch(base_url + 'controller/producto.php?tipo=ver',{
            method:'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        // envia solicitud al controlador productos
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#codigo').value = json.contenido.codigo;
            document.querySelector('#id_producto').value = json.contenido.id;
            document.querySelector('#img').value = json.contenido.imagen;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#categoria').value = json.contenido.id_categoria;
            document.querySelector('#fecha_ven').value = json.contenido.fecha_vencimiento;
            document.querySelector('#proveedor').value = json.contenido.id_proveedor;
      
        }else{
            window.location = base_url+"productos";
        }

        console.log(json);
    } catch (error) {
        console.log("Oops ocurrio un error"+error)
        
    }
    
}
async function actualizarProducto() {
    const datos = new FormData(frmActualizar);
   try{
    let respuesta = await fetch(base_url+'controller/producto.php?tipo=actualizar',{
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
async function eliminarProducto(id) {
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
    formData.append('id_producto',id);
    try{
        let respuesta = await fetch(base_url+'controller/producto.php?tipo=eliminar',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if(json.status){
            swal("Eliminado","Producto eliminado correctamente","success");
            document.querySelector('#fila'+id).remove();
        }else{
            swal("Eliminar","error al eliminar","warning");
        }
    } catch (e) {
        console.log("ocurrio error" + e);
        
    }
}
