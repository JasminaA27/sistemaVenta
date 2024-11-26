
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
                <td> 
                    <button class="btn btn-outline-success" onclick="editarPersona(${item.id})">Editar</button>
                    <button class="btn btn-outline-danger" onclick="eliminarPersona(${item.id})">Eliminar</button>
                </td>
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
    let producto = document.getElementById('producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let fecha_compra = document.querySelector('#fecha_compra').value;
    let id_trabajador = document.querySelector('#trabajador').value;

    // Validación de campos vacíos
    if (
        producto === "" || cantidad === "" || precio === "" || 
        fecha_compra === "" || id_trabajador === ""
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
