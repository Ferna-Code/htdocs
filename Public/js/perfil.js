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
            console.log("Response received:", response);
            // Verifica que la respuesta es de tipo JSON antes de intentar parsearla
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text(); // Usamos text() temporalmente para inspeccionar la respuesta
        })
        .then(text => {
            console.log("Response text:", text); // Log de la respuesta cruda
            try {
                const result = JSON.parse(text); // Intentamos parsear manualmente
                console.log("Parsed JSON result:", result);
                if (result) {
                    if (result.success) {
                        const userData = result.data;
                        console.log("User Data:", userData);
                        // Actualizar el DOM con los datos obtenidos
                        document.getElementById('nombre').innerText = userData.nombre;
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

// Función para guardar los cambios
function guardarCambiosUsuario() {

    console.log("guardarDatosAlumno");
    // Obtener los nuevos datos del formulario
    const userDataNuevo = {
        nombre: document.getElementById('nombre').value,
        rut: document.getElementById('rut').value,
        correo: document.getElementById('correo').value,
        telefono: document.getElementById('telefono').value,
        direccion: document.getElementById('direccion').value,
        fechanac: document.getElementById('fechanac').value,
        clave: document.getElementById('direccion').value,
        // Añadir más campos según sea necesario
    };

    // Comparar los datos nuevos con los originales
    const camposModificados = {};
    for (const key in userDataNuevo) {
        if (userDataNuevo[key] !== userDataOriginal[key]) {
            camposModificados[key] = userDataNuevo[key]; // Agregar campo modificado al objeto
        }
    }

    // Enviar los cambios al servidor solo si hay campos modificados
    if (Object.keys(camposModificados).length > 0) {
        fetch("/perfil/guardardatosalumno", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(camposModificados), // Enviar solo los campos modificados
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