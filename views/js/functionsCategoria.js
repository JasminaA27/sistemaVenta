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
                
                <td> 
                    <button class="btn btn-outline-success" onclick="editarPersona(${item.id})">Editar</button>
                    <button class="btn btn-outline-danger" onclick="eliminarPersona(${item.id})">Eliminar</button>
                </td>
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
