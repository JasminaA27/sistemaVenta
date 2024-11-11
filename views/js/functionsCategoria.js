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
