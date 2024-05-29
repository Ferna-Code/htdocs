
//Reportes
function controlVisi1() {
  var elemento = document.getElementById("modulo1");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento);
}

//Publicaciones
function controlVisi2() {
  var elemento2 = document.getElementById("modulo2");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento2.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento2);
}

//Carreras
function controlVisi3() {
  var elemento3 = document.getElementById("modulo3");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento3.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento3);
}

//Cursos
function controlVisi4() {
  var elemento4 = document.getElementById("modulo4");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento4.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento4);
}

//Perfiles
function controlVisi5() {
  var elemento5 = document.getElementById("modulo5");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento5.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento5);
}

//Usuarios
function controlVisi6() {
  var elemento6 = document.getElementById("modulo6");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento6.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento6);
}

//Categorias
function controlVisi7() {
  var elemento7 = document.getElementById("modulo7");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento7.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento7);
}

//Diccionario
function controlVisi8() {
  var elemento8 = document.getElementById("modulo8");

  // Oculta todos los módulos
  ocultarModulos();
  getPalabra();
  // Muestra el módulo 1
  elemento8.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento8);

}

//OfertasLaborales
function controlVisi9() {
  var elemento9 = document.getElementById("modulo9");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento9.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento9);
}

//verOferta
function controlVisi10() {
  var eleme = document.getElementById("modulo10");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo correspondiente
  eleme.style.display = "flex";

  // Centra el módulo mostrado
  centrarModulo(eleme);
}

//ingresarCurso
function controlVisi11() {
  var eleme = document.getElementById("modulo11");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

//verCurso
function controlVisi12() {
  var eleme = document.getElementById("modulo12");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

//verCarrera
function controlVisi13() {
  var eleme = document.getElementById("modulo13");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

//carrerasCategoria
function controlVisi14() {
  var eleme = document.getElementById("modulo14");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

//verReporte
function controlVisi15() {
  var eleme = document.getElementById("modulo15");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

//verPublicaciones
function controlVisi16() {
  var eleme = document.getElementById("modulo16");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

//verUsuario
function controlVisi17() {
  var eleme = document.getElementById("modulo17");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

//perfilSupervisor
function controlVisi18() {
  var eleme = document.getElementById("modulo18");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}



function ocultarModulos() {
  console.log("estoy aqui");
  var modulos = document.getElementsByClassName("contenedor-body");
  for (var i = 0; i < modulos.length; i++) {
    modulos[i].style.display = "none"; // Oculta todos los módulos
  }
}

function centrarModulo(modulo) {
  modulo.style.justifyContent = "center"; // Centra horizontalmente
  modulo.style.alignItems = "center"; // Centra verticalmente
}

//INGRESAR CATEGORIA
$("#addCategoria").on("submit", function (event) {
  event.preventDefault();

  var formData = { // guardamos el cuerpo del mensaje por medio del ID
    nuevaCategoria: $("#nuevaCategoria").val(),
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
        alert("Categoria agregada");
        //resto del cuerpo para manejar respuesta exitosa

        $(
          "#nuevaCategoria"
        ).val("");
        // Cerrar el modal
        $("#exampleModal").modal("hide");

      } else {
        alert("Error" + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});// FIN CUERPO

//FUNCIONES CURSO
$("#crearCurso").on("submit", function (event) {
  event.preventDefault();

  var formData = { // guardamos el cuerpo del mensaje por medio del ID
    categoria: $("#categoria-curso").val(),
    nombre: $("#Nombre").val(),
    descripcionCurso: $("#descripcion-curso").val(),
    fechaInicio: $("#fecha-inicio").val(),
    link: $("#link-inscripcion").val(),
    activo: $("#activo").val(),

  };

  fetch("/supervisor/insertCurso", { // Asegúrate de que esta ruta sea correcta
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
        alert("Curso agregado");
        //resto del cuerpo para manejar respuesta exitosa

        $(
          "#categoria-curso, #Nombre, #descripcion-curso, #fecha-inicio, #link-inscripcion, #activo"
        ).val("");

      } else {
        alert("Error" + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});// FIN CUERPO



//INGRESAR PERFIL
$("#FormPerfil").on("submit", function (event) {
  event.preventDefault();

  var formData = { // guardamos el cuerpo del mensaje por medio del ID
    nuevoPerfil: $("#nuevoPerfil").val(),
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
        alert("Perfil agregado");
        //resto del cuerpo para manejar respuesta exitosa

        $(
          "#nuevoPerfil"
        ).val("");
        // Cerrar el modal
        $("#exampleModal1").modal("hide");

      } else {
        alert("Error" + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});// FIN CUERPO

//INGRESAR PALABRA
$("#formPalabra").on("submit", function (event) {
  event.preventDefault();

  var formData = { // Guardamos el cuerpo del mensaje por medio del ID
    palabra: $("#nuevaPalabra").val(),
  };

  fetch("/supervisor/insertPalabra", { // Asegúrate de que esta ruta sea correcta
    headers: {
      "Content-Type": "application/json",
    },
    method: "POST",
    body: JSON.stringify(formData),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json(); // Parseamos la respuesta como JSON
    })
    .then((data) => {

      if (data.success) {
        alert("Nueva palabra agregada");
        $("#nuevaPalabra").val("");
        // Cerrar el modal
        $("#exampleModal2").modal("hide");
        // Actualizar la tabla con los datos más recientes
        console.log(data);
        console.log(data.palabras)
        tableName = 'diccionario';
        getPalabra();
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});
 function getPalabra() {
   fetch("/supervisor/getPalabra")
   .then((response) => {
     if(!response.ok){
       throw new Error(`HTTP error: ${response.status}`);
     }
     return response.json();
   })
   .then((data) => {
     if(data && data.length > 0){
       const tbody = $("#tbodyPalabra");
       tbody.empty()
       //itera sobre cada elemento en la data y añade fila a la tabla
       //data.array.forEach(element => {});
       data.forEach(row => {
         console.log("Cuerpo del mensaje: ", row);
         const fila = `
         <tr>
           <td class="widthCheck"><input type="checkbox" id="checkAllPalabra" name="select-all"></td>
           <td>${row.palabra}</td>
           <td>${row.fechaCreacion}</td>
           <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
         </tr>`;
         tbody.append(fila);
       });
     }else{
       alert("No se encontraron datos para actualizar");
     }
   })
   .catch((error) => {
     console.error("Error en la solicitud Fetch: ",error);
     alert("Error en la solicitud: ", error.message);
   });
 }

 

// function getPalabra(tableName) {
//   fetch("/supervisor/getPalabra")
//     .then((response) => {
//       if (!response.ok) {
//         throw new Error(`HTTP error: ${response.status}`);
//       }
//       return response.json();
//     })
//     .then((data) => {
//       if (data && data.length > 0) {
//         const tbody = $("#tbodyPalabra");
//         tbody.empty();

//         //itera sobre cada elemento en la data y añade fila a la tabla
//         //data.array.forEach(element => {});
//         data.forEach(row => {
//           console.log("Cuerpo del mensaje: ", row);
//           if (tableName == 'diccionario') {
//             const fila = `
//               <tr>
//                 <td class="widthCheck"><input type="checkbox" id="checkAllPalabra" name="select-all"></td>
//                 <td>${row.palabra}</td>
//                 <td>${row.fechaCreacion}</td>
//                 <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
//               </tr>`;
//             tbody.append(fila);
//           }
//         });
//       } else {
//         alert("No se encontraron datos para actualizar");
//       }
//     })
//     .catch((error) => {
//       console.error("Error en la solicitud Fetch: ", error);
//       alert("Error en la solicitud: ", error.message);
//     });
// }

//INGRESAR USUARIO
$("#formUsuario").on("submit", function (event) {
  event.preventDefault();

  var formData = { // guardamos el cuerpo del mensaje por medio del ID
    nombre: $("#nombre").val(),
    rut: $("#rut").val(),
    nacimiento: $("#fechaNacimiento").val(),
    direccion: $("#direccion").val(),
    telefono: $("#telefono").val(),
    perfil: $("#perfil").val(),
    correo: $("#correo").val(),
    carrera: $("#carrera").val(),
    avance: $("#avance").val(),
    cargo: $("#cargo").val(),
    estado: $("#estado").val(),


  };

  fetch("/supervisor/insertUsuario", { // Asegúrate de que esta ruta sea correcta
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
        alert("Usuario agregado");
        //resto del cuerpo para manejar respuesta exitosa

        $(
          "#nombre, #rut, #fechaNacimiento, #direccion, #telefono, #perfil, #correo, #carrera, #avance, #cargo, #estado"
        ).val("");


      } else {
        alert("Error" + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});// FIN CUERPO
