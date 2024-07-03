async function agregarCategoria() {
    const { value: formValues } = await Swal.fire({
        title: "Nueva Categoría",
        html: `
        <input id="swal-input2" style="width: 80%;" class="swal2-input" placeholder="Nueva categoría" value="">
      `,
        confirmButtonText: 'Agregar',
        focusConfirm: false,
        preConfirm: () => {
            return [
                document.getElementById("swal-input2").value
            ];
        }
    });

    if (formValues) {
        const nuevoNombre = formValues[0];

        var formData = {
            nuevaCategoria: nuevoNombre // utilizamos el valor ingresado en SweetAlert
        };

        fetch("/supervisor/insertData", { // Asegúrate de que esta ruta sea correcta
            headers: {
              "Content-Type": "application/json",
            },
            method: "POST",
            body: JSON.stringify(formData),
            // Convierte un valor de JavaScript en una cadena de notación de objetos de JavaScript (JSON)
          })
            .then((response) => {
              if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
              }
              return response.text(); // Temporalmente usa text() para verificar la respuesta
            })
            .then((data) => {
              if (!data.success) {
                Swal.fire('Categoría actualizada con éxito');
                //resto del cuerpo para manejar respuesta exitos
                getCategoria();
        
              } else {
                Swal.fire("Error" + data.message);
              }
            })
            .catch((error) => {
              console.error("Error en la solicitud Fetch: ", error);
            });
    }
}

async function agregarPerfil() {
    const { value: formValues } = await Swal.fire({
        title: "Nuevo Perfil",
        html: `
        <input id="swal-input2" style="width: 80%;" class="swal2-input" placeholder="Nuevo perfil" value="">
      `,
        confirmButtonText: 'Agregar',
        focusConfirm: false,
        preConfirm: () => {
            return [
                document.getElementById("swal-input2").value
            ];
        }
    });

    if (formValues) {
        const nuevoNombre = formValues[0];

        var formData = {
            nuevoPerfil: nuevoNombre // utilizamos el valor ingresado en SweetAlert
        };

        fetch("/supervisor/insertPerfil", { // Asegúrate de que esta ruta sea correcta
            headers: {
              "Content-Type": "application/json",
            },
            method: "POST",
            body: JSON.stringify(formData),
            // Convierte un valor de JavaScript en una cadena de notación de objetos de JavaScript (JSON)
          })
            .then((response) => {
              if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
              }
              return response.text(); // Temporalmente usa text() para verificar la respuesta
            })
            .then((data) => {
              if (!data.success) {
                Swal.fire('Perfil agregado con éxito');
                //resto del cuerpo para manejar respuesta exitos
                getPerfil();
        
              } else {
                Swal.fire("Error" + data.message);
              }
            })
            .catch((error) => {
              console.error("Error en la solicitud Fetch: ", error);
            });
    }
}

async function agregarPalabra() {
    const { value: formValues } = await Swal.fire({
        title: "Nueva palabra",
        html: `
        <input id="swal-input2" style="width: 80%;" class="swal2-input" placeholder="Nueva palabra" value="">
      `,
        confirmButtonText: 'Agregar',
        focusConfirm: false,
        preConfirm: () => {
            return [
                document.getElementById("swal-input2").value
            ];
        }
    });

    if (formValues) {
        const nuevoNombre = formValues[0];

        var formData = {
            palabra: nuevoNombre // utilizamos el valor ingresado en SweetAlert
        };

        fetch("/supervisor/insertPalabra", { // Asegúrate de que esta ruta sea correcta
            headers: {
              "Content-Type": "application/json",
            },
            method: "POST",
            body: JSON.stringify(formData),
            // Convierte un valor de JavaScript en una cadena de notación de objetos de JavaScript (JSON)
          })
            .then((response) => {
              if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
              }
              return response.text(); // Temporalmente usa text() para verificar la respuesta
            })
            .then((data) => {
              if (!data.success) {
                Swal.fire('Palabra agregada con éxito');
                //resto del cuerpo para manejar respuesta exitos
                getPalabra();
        
              } else {
                Swal.fire("Error" + data.message);
              }
            })
            .catch((error) => {
              console.error("Error en la solicitud Fetch: ", error);
            });
    }
}