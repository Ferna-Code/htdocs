$("#formOferta").on("submit", function (event) {
    event.preventDefault();

    var formData = {//guardamos el cuerpo del mensaje por medio del ID
        tipoTrabajo: $("#tipo-trabajo").val(),
        categoriaTrabajo: $("#categoria-trabajo").val(),
        cargo: $("#cargo").val(),
        nombreEmpresa: $("#nombre-empresa").val(),
        rutEmpresa: $("#rut-empresa").val(),
        email: $("#email").val(),
        descripcionCargo: $("#descripcion-cargo").val(),
        rangoSalarial: $("#rango-salarial").val(),
    };
    fetch("/empresa/checkData", {//Se envia el cuerpo del mensaje a la funcion
        headers: {
            "Content-Type": "application/json",
        },
        method: "POST",
        body: JSON.stringify(formData),
        //Convierte un valor de JavaScript en una cadena de notación de objetos de JavaScript (JSON)
    }).then((response) => {
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.text();
    }).then((data) => {
        if (!data.success) {
            ofertaCreada()
            //resto del cuerpo para manejar respuesta exitosa
            
            $(
                "#tipo-trabajo, #categoria-trabajo, #cargo, #nombre-empresa, #rut-empresa, #email, #descripcion-cargo, #rango-salarial"
            ).val("");

        } else {
            alert("Error" + data.message);
        }


    }).catch((error) => {
        console.error("Error en la solicitud Fetch: ", error);
    });
});//FIN CUERPO 


function ofertaCreada(){
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Oferta enviada exitosamente",
      showConfirmButton: false,
      timer: 1500
    });
  }