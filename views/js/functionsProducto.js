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
            datos.forEach(element => {
                $('#categoria').append($('<option />'),{
                    text:`${element.nombre}`,
                    value: `${element.id}`
                });
            });
        }

        console.log(respuesta);

    }catch(e){
        console.log("Error al cargar categorias"+e);
    }
}
