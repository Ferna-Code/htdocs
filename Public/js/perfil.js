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