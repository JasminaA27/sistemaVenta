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
    }else{
        swal("registro", json.mensaje, "error");
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
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#categoria').value = json.contenido.categoria;
            document.querySelector('#fecha_ven').value = json.contenido.fecha_ven;
            document.querySelector('#proveedor').value = json.contenido.proveedor;
      
        }else{
            window.location = base_url+"productos";
        }

        console.log(json);
    } catch (error) {
        console.log("Oops ocurrio un error"+error)
        
    }
    
}
