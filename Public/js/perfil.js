// Variables para almacenar los datos originales
let userDataOriginal;
//cargar el contenido del usuario
document.addEventListener("DOMContentLoaded", function() {
    function getUsuarios() {
        fetch("/perfil/getdata/", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
        })
        .then(response => {
           
            // Verifica que la respuesta es de tipo JSON antes de intentar parsearla
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text(); 
        })
        .then(text => {
         
            try {
                const result = JSON.parse(text);
            
                if (result) {
                    if (result.success) {
                        const userData = result.data;
                       
                        // Input=value H1=innerText
                        document.getElementById('nombreH1').innerText = userData.nombre;
                        document.getElementById('nombrePS').innerText = userData.nombre;
                        document.getElementById('rut').value = userData.rut;
                        document.getElementById('email').value = userData.correo;
                        document.getElementById('fechanac').value = userData.fechaNacimiento;
                        document.getElementById('telefono').value = userData.telefono;
                        document.getElementById('direccion').value = userData.direccion;
                        document.getElementById('password').value = userData.clave;
                        userDataOriginal = result.data;
                    } else {
                        console.error("Error message:", result.message);
                    }
                } else {
                    console.error('No se recibió ninguna respuesta del servidor');
                }
            } catch (error) {
                console.error('Error al parsear JSON:', error, text);
            }
        })
        .catch(error => {
            console.error('Error al obtener los datos del usuario:', error);
        });
    }

    getUsuarios();
});

function guardarCambiosUsuario() {
    console.log("guardarDatosAlumno");
    const rut = document.getElementById('rut').value;
    const correo = document.getElementById('email').value;
    const telefono = document.getElementById('telefono').value;
    const direccion = document.getElementById('direccion').value;
    const fechaNacimiento = document.getElementById('fechanac').value;
    const clave = document.getElementById('password').value;
    const imagen = document.getElementById('imagen').value;
    
    // Comparar los datos nuevos con los originales
    const camposModificados = {};
    if (rut !== userDataOriginal.rut) {
        camposModificados.rut = rut;
    }
        if (correo !== userDataOriginal.correo) {
        camposModificados.correo = correo;
    }
        if (telefono !== userDataOriginal.telefono) {
        camposModificados.telefono = telefono;
    }
        if (direccion !== userDataOriginal.direccion) {
        camposModificados.direccion = direccion;
    }
        if (fechaNacimiento !== userDataOriginal.fechaNacimiento) {
        camposModificados.fechaNacimiento = fechaNacimiento;
    }
        if (clave !== userDataOriginal.clave) {
        camposModificados.clave = clave;
    }
    

    const formData = new FormData();
    for (const key in camposModificados) {
        formData.append(key, camposModificados[key]);
    }
    
    // Agregar la imagen si se ha seleccionado una nueva
    const imagenInput = document.getElementById('imagen');
    if (imagenInput.files.length > 0) {
        formData.append('imagen', imagenInput.files[0]);
    }
    
    // Enviar los cambios al servidor solo si hay campos modificados y la imagen seleccionada
    if (Object.keys(camposModificados).length > 0 || imagenInput.files.length > 0) {
        fetch("/perfil/guardardatosalumno", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                // Actualizar los datos originales con los nuevos datos
                userDataOriginal = { ...userDataOriginal, ...camposModificados };
                console.log('¡Cambios guardados correctamente!');
            } else {
                console.error(result.message);
            }
        })
        .catch(error => {
            console.error('Error al guardar los cambios del usuario:', error);
        });
    } else {
        console.log('No se han realizado cambios.');
    }
}

