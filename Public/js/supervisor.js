document.addEventListener("DOMContentLoaded", function () {
  let userDataOriginal;

  function getUsuarios() {
    fetch("/Supervisor/getdataUsuario/", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then(response => response.json())
      .then(result => {
        console.log(result)
        if (result.success) {
          const userData = result.data;
          document.getElementById('nombrep').innerText = userData.nombre;
          document.getElementById('rut').value = userData.rut;
          document.getElementById('email').value = userData.correo;
          document.getElementById('fechanac').value = userData.fechaNacimiento;
          document.getElementById('telefono').value = userData.telefono;
          document.getElementById('direccion').value = userData.direccion;
          document.getElementById('password').value = userData.clave;
          document.getElementById('cargo').innerText = userData.cargo;
          cargo
          userDataOriginal = userData;
        } else {
          console.error("Error obtener datos Usuario:", result.message);
        }
      })
      .catch(error => {
        console.error('Error al obtener los datos del usuario:', error);
      });
  }

  getUsuarios();

  function guardarCambiosPersonales(event) {
    event.preventDefault();

    const camposModificados = {};
    const rut = document.getElementById('rut').value;
    const correo = document.getElementById('email').value;
    const telefono = document.getElementById('telefono').value;
    const direccion = document.getElementById('direccion').value;
    const fechaNacimiento = document.getElementById('fechanac').value;
    const clave = document.getElementById('password').value;
    const imagenInput = document.getElementById('imagen');

    if (correo !== userDataOriginal.correo) camposModificados.correo = correo;
    if (telefono !== userDataOriginal.telefono) camposModificados.telefono = telefono;
    if (direccion !== userDataOriginal.direccion) camposModificados.direccion = direccion;
    if (fechaNacimiento !== userDataOriginal.fechaNacimiento) camposModificados.fechaNacimiento = fechaNacimiento;
    if (clave !== userDataOriginal.clave) camposModificados.clave = clave;

    const formData = new FormData();
    formData.append('rut', rut);

    for (const key in camposModificados) {
      formData.append(key, camposModificados[key]);
    }

    if (imagenInput.files.length > 0) {
      formData.append('imagen', imagenInput.files[0]);
    }

    fetch("/Supervisor/guardardatospersonales", {
      method: "POST",
      body: formData
    })
      .then(response => response.json())
      .then(result => {
        if (result.success) {
          cambiosGuardados()
        } else {
          console.error(result.message);
        }
      })
      .catch(error => {
        console.error('Error al guardar los cambios del usuario:', error);
      });
  }

  document.getElementById('guardar-cambios-usuario-btn').addEventListener('click', guardarCambiosPersonales);
});

function cambiosGuardados() {
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "¡Cambios guardados correctamente!",
    showConfirmButton: false,
    timer: 1500
  });
}

//Reportes
function controlVisi1() {
  var elemento = document.getElementById("modulo1");

  // Oculta todos los módulos
  ocultarModulos();
  getReporte();
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
  getPublicacion();
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
  getCarrera();
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
  getCurso();
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
  getPerfil();
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
  getUsuario();
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
  getCategoria();
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
  getOferta();
  // Muestra el módulo 1
  elemento9.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento9);
}

//verOferta
function controlVisi10(id) {
  var eleme = document.getElementById("modulo10");
  getOfertaById(id);
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
function controlVisi12(id) {
  console.log("veroferta alumnos.js");
  getCursoById(id);
  console.log(id);
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
function controlVisi17(id) {
  var eleme = document.getElementById("modulo17");
  getUsuarioById(id);
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

function controlVisi19() {
  var eleme = document.getElementById("modulo19");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

function controlVisi20() {
  var eleme = document.getElementById("modulo20");

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

//CATEGORIA
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
        getCategoria();

      } else {
        alert("Error" + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});
function getCategoria() {
  fetch("/supervisor/getCategoria")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#tbodyCategoria");
        tbody.empty()
        //itera sobre cada elemento en la data y añade fila a la tabla
        //data.array.forEach(element => {});
        data.forEach(row => {
          console.log("Cuerpo del mensajeeeeee: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxCategoria" name="checkId"></td>
          <td class="hidden">${row.id}</td>
          <td><a href="#" class="linkTabla" onclick="controlVisi14()">${row.nombre}</a></td>
          <td>${row.fechaCreacion}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;

          tbody.append(fila);
        });
        initializeCheckboxMaster('checkAllCategoria', 'checkboxCategoria');
          // Implementación del filtro
          const filtroInput = $("#filtroCategoria");
          filtroInput.on('input', function () {
            const filtro = filtroInput.val().trim().toLowerCase();
  
            // Filtrar las filas de la tabla
            const filas = tbody.find('tr');
            filas.each(function () {
              const textoColumna = $(this).find('td:nth-child(3)').text().toLowerCase(); // Obtener texto de la segunda columna (palabra)
              console.log(textoColumna);
              const filaVisible = textoColumna.includes(filtro);
              $(this).toggle(filaVisible);
            });
          });
      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

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
    centro: $("#centro").val(),

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
function getCurso() {
  fetch("/supervisor/getCurso")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#tbodyCurso");
        tbody.empty()
        //itera sobre cada elemento en la data y añade fila a la tabla
        //data.array.forEach(element => {});
        data.forEach(row => {
          console.log("Cuerpo del mensajeeeeee: ", row);

          const fila = `
        <tr>
          <td><input type="checkbox" class="checkboxCurso" id="tableUsersCurso" name="checkId"></td>
          <td class="hidden">${row.id}</td>
          <td class="widthName"><a href="#" class="linkTabla" onclick="controlVisi12(${row.id})">${row.nombre}</a></td>
          <td>${row.emitidopor}</td>
          <td>${row.fechaCreacion}</td>
        </tr>`;
          tbody.append(fila);
        });
        initializeCheckboxMaster('checkAllCurso', 'checkboxCurso');
         // Implementación del filtro
         const filtroInput = $("#filtroCurso");
         filtroInput.on('input', function () {
           const filtro = filtroInput.val().trim().toLowerCase();
 
           // Filtrar las filas de la tabla
           const filas = tbody.find('tr');
           filas.each(function () {
             const textoColumna = $(this).find('td:nth-child(3)').text().toLowerCase(); // Obtener texto de la segunda columna (palabra)
             console.log(textoColumna);
             const filaVisible = textoColumna.includes(filtro);
             $(this).toggle(filaVisible);
           });
         });
      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getCursoById(id) {
  fetch("/supervisor/getCursoById", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ id: id }),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {

      // Asignar datos a los elementos de la vista
      const curso = data.curso;
      if (curso.idcategoria == 1) {
        categoria = "Educación, bienestar y calidad";
      } else if (curso.idcategoria == 2) {
        categoria = "Informática, tecnología y productividad";
      } else if (curso.idcategoria == 3) {
        categoria = "Negocios, gestión e innovación";
      } else {
        categoria = "Categoría desconocida"; // Si hay más categorías o ninguna coincide
      }
      document.getElementById("verNombreCurso").value = curso.nombre;
      document.getElementById("verCodigoCurso").value = curso.id;
      document.getElementById("verIdCurso").value = curso.id;
      document.getElementById("verCategoriaCurso").value = categoria;
      document.getElementById("verCentroCurso").value = curso.emitidopor;
      document.getElementById("verFechaCurso").value = curso.fechaCreacion;
      document.getElementById("verEliminacionCurso").value = (curso.fechaEliminacion || '');
      document.getElementById("verDescripcionCurso").value = curso.descripcion;
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });
}



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
        getPerfil();

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
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#tbodyPalabra");
        tbody.empty();

        data.forEach(row => {
          const fila = `
                      <tr>
                          <td><input type="checkbox" class="checkboxPalabra" id="checkboxPalabra" name="checkboxPalabra"></td>
                          <td class="hidden">${row.id}</td>
                          <td>${row.palabra}</td>
                          <td>${row.fechaCreacion}</td>
                          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
                      </tr>`;
          tbody.append(fila);
        });

        initializeCheckboxMaster('checkAllPalabra', 'checkboxPalabra');

        // Implementación del filtro
        const filtroInput = $("#filtroDiccionario");
        filtroInput.on('input', function () {
          const filtro = filtroInput.val().trim().toLowerCase();

          // Filtrar las filas de la tabla
          const filas = tbody.find('tr');
          filas.each(function () {
            const textoColumna = $(this).find('td:nth-child(3)').text().toLowerCase(); // Obtener texto de la segunda columna (palabra)
            console.log(textoColumna);
            const filaVisible = textoColumna.includes(filtro);
            $(this).toggle(filaVisible);
          });
        });
      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });
}



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

//PUBLICACIONES
function getPublicacion() {
  fetch("/supervisor/getPublicacion")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#tbodyPublicacion");
        tbody.empty()
        //itera sobre cada elemento en la data y añade fila a la tabla
        //data.array.forEach(element => {});
        data.forEach(row => {
          console.log("Cuerpo del mensajeeeeee: ", row);
          const fila = `
        <tr class="table table-striped">
          <td><input type="checkbox" id="tableUsers" class="checkboxPublicacion" name="checkId"></td>
          <td class="hidden">${row.id}</td>
          <td>${row.rutusuario}</a></td>
          <td><a href="#" class="linkTabla" onclick="showModal('${row.id}')">${row.publicacion}</a></td>
          <td>${row.nreportes ? row.nreportes : 'SIN REPORTES'}</a></td>
          <td>${row.fechaCreacion}</td>
         
        </tr>`;

          tbody.append(fila);
        });
        initializeCheckboxMaster('checkAllPublicacion', 'checkboxPublicacion');
         // Implementación del filtro
         const filtroInput = $("#filtroPublicaciones");
         filtroInput.on('input', function () {
           const filtro = filtroInput.val().trim().toLowerCase();
 
           // Filtrar las filas de la tabla
           const filas = tbody.find('tr');
           filas.each(function () {
             const textoColumna = $(this).find('td:nth-child(4)').text().toLowerCase(); // Obtener texto de la segunda columna (palabra)
             console.log(textoColumna);
             const filaVisible = textoColumna.includes(filtro);
             $(this).toggle(filaVisible);
           });
         });
      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getPublicacionById(id) {
  fetch("/supervisor/getPublicacionById", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ id: id }),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      // Llama a la función showModal con los datos de la publicación
      showModal(data.curso.publicacion);

    })

}

//REPORTE
function getReporte() {
  fetch("/supervisor/getReporte")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#tbodyReporte");
        tbody.empty()
        //itera sobre cada elemento en la data y añade fila a la tabla
        //data.array.forEach(element => {});
        data.forEach(row => {
          console.log("Cuerpo del mensajeeeeee: ", row);
          const fila = `
        <tr class="table table-striped">
          <td><input type="checkbox" id="checkboxReporte" class="checkboxReporte"></td>
          <td class="hidden">${row.id}</a></td>
          <td>${row.rutusuario}</a></td>
          <td >${row.idcomentario}</a></td>
          <td>${row.idpublicacion}</a></td>
          <td>${row.fechaCreacion}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
          <td><a href="#" class="linkTabla" onclick="controlVisi15()">Ver reporte</a></td>
        </tr>`;
          tbody.append(fila);
        });
        initializeCheckboxMaster('checkAllReportes', 'checkboxReporte');
         // Implementación del filtro
         const filtroInput = $("#filtroReporte");
         filtroInput.on('input', function () {
           const filtro = filtroInput.val().trim().toLowerCase();
 
           // Filtrar las filas de la tabla
           const filas = tbody.find('tr');
           filas.each(function () {
             const textoColumna = $(this).find('td:nth-child(3)').text().toLowerCase(); // Obtener texto de la segunda columna (palabra)
             console.log(textoColumna);
             const filaVisible = textoColumna.includes(filtro);
             $(this).toggle(filaVisible);
           });
         });
      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

//OFERTA
function getOferta() {
  fetch("/supervisor/getOferta")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#tbodyOferta");
        tbody.empty()
        //itera sobre cada elemento en la data y añade fila a la tabla
        //data.array.forEach(element => {});
        data.forEach(row => {
          console.log("Cuerpo del mensajeeeeee: ", row);
          const fila = `
        <tr class="table table-striped">
          <td><input type="checkbox" class="checkboxOfertas" id="checkboxOfertas" name="checkId"></td>
          <td class="hidden">${row.id}</a></td>
          <td><a href="#" class="linkTabla" onclick="controlVisi10(${row.id})">${row.cargo}</a></td>
          <td>${row.nombreEmpresa}</a></td>
          <td>${row.tipoOferta}</a></td>
          <td>${row.fechacreacion}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;

          tbody.append(fila);
        });
        initializeCheckboxMaster('checkAllOferta', 'checkboxOfertas');
         // Implementación del filtro
         const filtroInput = $("#filtroOfertas");
         filtroInput.on('input', function () {
           const filtro = filtroInput.val().trim().toLowerCase();
 
           // Filtrar las filas de la tabla
           const filas = tbody.find('tr');
           filas.each(function () {
             const textoColumna = $(this).find('td:nth-child(3)').text().toLowerCase(); // Obtener texto de la segunda columna (palabra)
             console.log(textoColumna);
             const filaVisible = textoColumna.includes(filtro);
             $(this).toggle(filaVisible);
           });
         });
      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getOfertaById(id) {
  fetch("/supervisor/getOfertaById", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ id: id }),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {

      // Asignar datos a los elementos de la vista
      const oferta = data.curso;
      if (oferta.idcategoria == 1) {
        categoria = "Educación, bienestar y calidad";
      } else if (oferta.idcategoria == 2) {
        categoria = "Informática, tecnología y productividad";
      } else if (oferta.idcategoria == 3) {
        categoria = "Negocios, gestión e innovación";
      } else {
        categoria = "Categoría desconocida"; // Si hay más categorías o ninguna coincide
      }
      document.getElementById("verIdOferta").value = oferta.id;
      document.getElementById("cargoOferta").value = oferta.cargo;
      document.getElementById("tipoOferta").value = oferta.tipoOferta;
      document.getElementById("categoriaOferta").value = categoria;
      document.getElementById("empresaOferta").value = oferta.nombreEmpresa;
      document.getElementById("rutEmpresa").value = oferta.rutempresa;
      document.getElementById("correoOferta").value = oferta.correocontacto;
      document.getElementById("salarioOferta").value = oferta.rangosalarial;
      document.getElementById("creacionOferta").value = oferta.fechacreacion;
      document.getElementById("descripcionOferta").value = oferta.descripcion;
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });
}
//PERFILES
function getPerfil() {
  fetch("/supervisor/getPerfil")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#tbodyPerfil");
        tbody.empty()
        //itera sobre cada elemento en la data y añade fila a la tabla
        //data.array.forEach(element => {});
        data.forEach(row => {
          console.log("Cuerpo del mensajeeeeee: ", row);
          const fila = `
        <tr class="">
          <td><input type="checkbox" id="checkboxPerfil" class="checkboxPerfil" name="checkId"></td>
          <td class="hidden">${row.id}</td>
          <td><a href="#" class="linkTabla" onclick="">${row.nombre}</a></td>
          <td>${row.activo}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;


          tbody.append(fila);
        });
        initializeCheckboxMaster('checkAllPerfil', 'checkboxPerfil');
      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

//CARRERAS
function getCarrera() {
  fetch("/supervisor/getCarrera")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#tbodyCarrera");
        tbody.empty()
        //itera sobre cada elemento en la data y añade fila a la tabla
        //data.array.forEach(element => {});
        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr class="">
          <td><input type="checkbox" class="checkboxCarrera" name="checkboxCarrera"></td>
          <td class="hidden">${row.id}</td>
          <td><a href="#" class="linkTabla" onclick="">${row.nombre}</a></td>
          <td>${row.idcategorias}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;

          tbody.append(fila);
        });
        initializeCheckboxMaster('checkAllCarrera', 'checkboxCarrera');
          // Implementación del filtro
          const filtroInput = $("#filtroCarrera");
          filtroInput.on('input', function () {
            const filtro = filtroInput.val().trim().toLowerCase();
  
            // Filtrar las filas de la tabla
            const filas = tbody.find('tr');
            filas.each(function () {
              const textoColumna = $(this).find('td:nth-child(3)').text().toLowerCase(); // Obtener texto de la segunda columna (palabra)
              console.log(textoColumna);
              const filaVisible = textoColumna.includes(filtro);
              $(this).toggle(filaVisible);
            });
          });
      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

//USUARIO
function getUsuario() {
  fetch("/supervisor/getUsuario")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#tbodyUsuario");
        tbody.empty()
        //itera sobre cada elemento en la data y añade fila a la tabla
        //data.array.forEach(element => {});
        data.forEach(row => {
          console.log("Cuerpo del mensajeeeeee: ", row);
          const fila = `
        <tr class="">
          <td><input type="checkbox" id="checkboxUsuarios" class="checkboxUsuarios" name="checkId"></td>
          <td>${row.rut}</td>
          <td><a href="#" class="linkTabla" onclick="controlVisi17(${row.rut})">${row.nombre}</a></td>
          <td>${row.fechaNacimiento}</td>
          <td>${row.cargo}</td>
          <td>${row.correo}</td>
          <td>${row.fechaCreacion}</td>
          
        </tr>`;
          tbody.append(fila);
        });
        initializeCheckboxMaster('checkAllUsuario', 'checkboxUsuarios');
        const filtroInput = $("#filtroUsuario");
        filtroInput.on('input', function () {
          const filtro = filtroInput.val().trim().toLowerCase();

          // Filtrar las filas de la tabla
          const filas = tbody.find('tr');
          filas.each(function () {
            const textoColumna = $(this).find('td:nth-child(2)').text().toLowerCase(); // Obtener texto de la segunda columna (palabra)
            console.log(textoColumna);
            const filaVisible = textoColumna.includes(filtro);
            $(this).toggle(filaVisible);
          });
        });
      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getUsuarioById(rut) {
  fetch("/supervisor/getUsuarioById", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ rut: rut }), // Cambiado a `rut` para que coincida con el PHP
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        // Asignar datos a los elementos de la vista
        const usuario = data.curso;
        document.getElementById("verNombreUser").value = usuario.nombre;
        document.getElementById("rutUser").value = usuario.rut;
        document.getElementById("verIdUser").value = usuario.rut;
        document.getElementById("idUser").value = usuario.idperfil;
        document.getElementById("nacimientoUser").value = usuario.fechaNacimiento;
        document.getElementById("telefonoUser").value = usuario.telefono;
        document.getElementById("direccionUsers").value = usuario.direccion;
        document.getElementById("correoUser").value = usuario.correo;
      } else {
        alert(data.message || 'Error al obtener los datos del usuario');
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });
}


//------------------CATEGORIA-----------------------
// Evento para seleccionar las filas marcadas con checkbox
document.getElementById('deleteSelected').addEventListener('click', function () {
  const selectedIds = [];
  document.querySelectorAll('.checkboxCategoria:checked').forEach(checkbox => {
    selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
  });

  if (selectedIds.length > 0) {
    confirmarDelete(selectedIds).then(confirmar => {
      if (confirmar) {
        deleteCategoria(selectedIds);
      }
    });
  } else {
    notData();
  }
});

function deleteCategoria(ids) {
  console.log("Actualizar categorias:", ids);
  fetch("/supervisor/deleteCategoria", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ ids })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        confirmarEliminado();
        getCategoria();
      } else {
        errorEliminar();
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });

}

//------------------CARRERAS-----------------------
document.getElementById('deleteSelected1').addEventListener('click', function () {
  const selectedIds = [];
  document.querySelectorAll('.checkboxCarrera:checked').forEach(checkbox => {
    selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
  });

  if (selectedIds.length > 0) {
    confirmarDelete(selectedIds).then(confirmar => {
      if (confirmar) {
        deleteCarrera(selectedIds);
      }
    });
  } else {
    notData();
  }
});

function deleteCarrera(ids) {
  console.log("Actualizar categorias:", ids);
  fetch("/supervisor/deleteCarrera", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ ids })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        confirmarEliminado();
        getCarrera();
      } else {
        errorEliminar();
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });

}

//------------------CURSO-----------------------
document.getElementById('deleteSelectedCurso').addEventListener('click', function () {
  const selectedIds = [];
  document.querySelectorAll('.checkboxCurso:checked').forEach(checkbox => {
    selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
  });

  if (selectedIds.length > 0) {
    confirmarDelete(selectedIds).then(confirmar => {
      if (confirmar) {
        deleteCurso(selectedIds);
      }
    });
  } else {
    notData();
  }
});

function deleteCurso(ids) {
  console.log("Actualizar categorias:", ids);
  fetch("/supervisor/deleteCurso", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ ids })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        confirmarEliminado();
        getCurso();
      } else {
        errorEliminar();
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });

}



//------------------PUBLICACION-----------------------
document.getElementById('deleteSelectedPublicacion').addEventListener('click', function () {
  const selectedIds = [];
  document.querySelectorAll('.checkboxPublicacion:checked').forEach(checkbox => {
    selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
  });

  if (selectedIds.length > 0) {
    confirmarDelete(selectedIds).then(confirmar => {
      if (confirmar) {
        deletePublicacion(selectedIds);
      }
    });
  } else {
    notData();
  }
});

function deletePublicacion(ids) {
  console.log("Actualizar categorias:", ids);
  fetch("/supervisor/deletePublicacion", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ ids })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        confirmarEliminado();
        getPublicacion();
      } else {
        errorEliminar();
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });

}

//------------------REPORTES-----------------------
document.getElementById('deleteSelectedReporte').addEventListener('click', function () {
  const selectedIds = [];
  document.querySelectorAll('.checkboxReporte:checked').forEach(checkbox => {
    selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
  });

  if (selectedIds.length > 0) {
    confirmarDelete(selectedIds).then(confirmar => {
      if (confirmar) {
        deleteReporte(selectedIds);
      }
    });
  } else {
    notData();
  }
});

function deleteReporte(ids) {

  fetch("/supervisor/deleteReporte", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ ids })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        confirmarEliminado();
        getReporte();
      } else {
        errorEliminar();
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });

}

//------------------OFERTASLABORALES-----------------------
document.getElementById('deleteSelectedOfertas').addEventListener('click', function () {
  const selectedIds = [];
  document.querySelectorAll('.checkboxOfertas:checked').forEach(checkbox => {
    selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
  });

  if (selectedIds.length > 0) {
    confirmarDelete(selectedIds).then(confirmar => {
      if (confirmar) {
        deleteOfertas(selectedIds);
      }
    });
  } else {
    notData();
  }
});

function deleteOfertas(ids) {

  fetch("/supervisor/deleteOfertas", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ ids })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        confirmarEliminado();
        getOferta();
      } else {
        errorEliminar();
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });

}

//------------------PERFILES-----------------------
document.getElementById('deleteSelectedPerfil').addEventListener('click', function () {
  const selectedIds = [];
  document.querySelectorAll('.checkboxPerfil:checked').forEach(checkbox => {
    selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
  });

  if (selectedIds.length > 0) {
    confirmarDelete(selectedIds).then(confirmar => {
      if (confirmar) {
        deletePerfil(selectedIds);
      }
    });
  } else {
    notData();
  }
});

function deletePerfil(ids) {

  fetch("/supervisor/deletePerfil", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ ids })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        confirmarEliminado();
        getPerfil();
      } else {
        errorEliminar();
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });

}

//------------------USUARIOS-----------------------
document.getElementById('deleteSelectedUsuarios').addEventListener('click', function () {
  const selectedIds = [];
  document.querySelectorAll('.checkboxUsuarios:checked').forEach(checkbox => {
    selectedIds.push(checkbox.closest('tr').children[2].textContent.trim());
  });

  if (selectedIds.length > 0) {
    confirmarDelete(selectedIds).then(confirmar => {
      if (confirmar) {
        deleteUsuario(selectedIds);
      }
    });
  } else {
    notData();
  }
});

function deleteUsuario(ids) {
  const excludedRuts = ['111111111', '11111111-1', '22222222-2', '33333333-3'];

  // Verificar si alguno de los ids está en la lista de RUTs que no se pueden eliminar
  const forbiddenIds = ids.filter(id => excludedRuts.includes(id));

  if (forbiddenIds.length > 0) {
    cannotDeleted();
    return;
  }

  fetch("/supervisor/deleteUsuario", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ ids })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        confirmarEliminado();
        getUsuario();
      } else {
        errorEliminar();
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });
}
//------------------DICCIONARIO-----------------------
document.getElementById('deleteSelectedPalabra').addEventListener('click', function () {
  const selectedIds = [];
  document.querySelectorAll('.checkboxPalabra:checked').forEach(checkbox => {
    selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
  });

  if (selectedIds.length > 0) {
    confirmarDelete(selectedIds).then(confirmar => {
      if (confirmar) {
        deletePalabra(selectedIds);
      }
    });
  } else {
    notData();
  }
});

function deletePalabra(ids) {

  fetch("/supervisor/deletePalabra", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ ids })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        confirmarEliminado();
        getPalabra();
      } else {
        errorEliminar();
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });

}

//------------------UPDATE------------------

document.getElementById('ForUpdateCurso').addEventListener('submit', function (event) {
  event.preventDefault();

  const formData = {
    idCurso: document.getElementById('verIdCurso').value,
    nombre: document.getElementById('verNombreCurso').value,
    categoria: document.getElementById('verCategoriaCurso').value,
    codigo: document.getElementById('verCodigoCurso').value,
    centro: document.getElementById('verCentroCurso').value,
    fecha: document.getElementById('verFechaCurso').value,
    eliminacion: document.getElementById('verEliminacionCurso').value,
    descripcion: document.getElementById('verDescripcionCurso').value,
  };

  fetch("/supervisor/updateCurso", {
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
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        alert("Curso actualizado exitosamente");
        // Restablece los valores del formulario
        document.getElementById('formCurso').reset();
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});

document.getElementById('ForUpdateUser').addEventListener('submit', function (event) {
  event.preventDefault();

  const formData = {
    nombre: document.getElementById('verNombreUser').value,
    rut: document.getElementById('rutUser').value,
    idPerfil: document.getElementById('idUser').value,
    nacimiento: document.getElementById('nacimientoUser').value,
    telefono: document.getElementById('telefonoUser').value,
    direccion: document.getElementById('direccionUsers').value,
    correo: document.getElementById('correoUser').value,
  };

  fetch("/supervisor/updateUsuario", {
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
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        alert("Datos actualizados exitosamente");
        // Restablece los valores del formulario
        document.getElementById('formUsuario').reset();
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});
document.getElementById('ForUpdateOferta').addEventListener('submit', function (event) {
  event.preventDefault();

  const formData = {
    nombre: document.getElementById('verNombreUser').value,
    rut: document.getElementById('rutUser').value,
    idPerfil: document.getElementById('idUser').value,
    nacimiento: document.getElementById('nacimientoUser').value,
    telefono: document.getElementById('telefonoUser').value,
    direccion: document.getElementById('direccionUsers').value,
    correo: document.getElementById('correoUser').value,
    correo: document.getElementById('correoUser').value,
    correo: document.getElementById('correoUser').value,
    correo: document.getElementById('correoUser').value,
  };

  fetch("/supervisor/updateUsuario", {
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
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        alert("Datos actualizados exitosamente");
        // Restablece los valores del formulario
        document.getElementById('formUsuario').reset();
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});



//---------------ALERTAS-------------------

function notData() {
  Swal.fire({
    title: "No hay datos seleccionados para eliminar",
    showClass: {
      popup: `
        animate__animated
        animate__fadeInUp
        animate__faster
      `
    },
    hideClass: {
      popup: `
        animate__animated
        animate__fadeOutDown
        animate__faster
      `
    }
  });
}

//--------------DELETE----------------
function confirmarEliminado() {
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Datos eliminados",
    showConfirmButton: false,
    timer: 1500
  });
}

function errorEliminar() {
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Error al eliminar los datos",
    showConfirmButton: false,
    timer: 1500
  });
}

function cannotDeleted() {
  Swal.fire({
    title: "No se pueden eliminar los datos seleccionados",
    showClass: {
      popup: `
        animate__animated
        animate__fadeInUp
        animate__faster
      `
    },
    hideClass: {
      popup: `
        animate__animated
        animate__fadeOutDown
        animate__faster
      `
    }
  });
}

function confirmarDelete(selectedIds) {
  return Swal.fire({
    title: "¿Estas seguro?",
    text: "¿Desea eliminar los datos permanentemente?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, borralo!"
  }).then((result) => {
    return result.isConfirmed;
  });
}




//------------MODAL--------------
function showModal(content) {
  getPublicacionById(content);
  const modal = document.getElementById("publicacionModal");
  const modalContent = document.getElementById("modalPublic");
  modalContent.innerText = content;
  modal.style.display = "block";

  // Para cerrar el modal cuando se hace clic en el botón de cerrar
  const closeBtn = document.getElementsByClassName("close")[0];
  closeBtn.onclick = function () {
    modal.style.display = "none";
  }

  // Para cerrar el modal cuando se hace clic fuera de él
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}

//Comentarios

document.addEventListener('DOMContentLoaded', function () {
  // Función para inicializar eventos para comentarios
  function initCommentEvents(modalId, commentsContainerId, commentFormId, newCommentId, publicacionIdInputId) {
    const modal = document.getElementById(modalId);
    const span = modal.getElementsByClassName("close")[0];
    const commentsContainer = document.getElementById(commentsContainerId);
    const commentForm = document.getElementById(commentFormId);
    const publicacionIdInput = document.getElementById(publicacionIdInputId);

    document.querySelectorAll('.comment-action').forEach(function (element) {
      element.addEventListener('click', function () {
        const publicacionId = this.getAttribute('data-id');
        publicacionIdInput.value = publicacionId; // Guardar el ID de la publicación en el campo oculto

        fetch('/usuarios/getComments', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ publicacionId: publicacionId })
        })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              commentsContainer.innerHTML = ''; // Clear existing comments
              if (data.comments.length > 0) {
                data.comments.forEach(comment => {
                  const commentElement = document.createElement('div');
                  commentElement.classList.add('comment');
                  commentElement.innerHTML = `<p><strong>${comment.nombre}</strong>: ${comment.comentario}</p>`;
                  commentsContainer.appendChild(commentElement);
                });
              } else {
                commentsContainer.innerHTML = '<p>No hay comentarios aún. Sé el primero en comentar.</p>';
              }
              modal.style.display = "block";
            } else {
              Swal.fire("Error", "Hubo un problema al eliminar la publicación:" + data.message, "error");
            }
          })
          .catch(error => {
            Swal.fire("Error", "Hubo un problema al realizar esta acción:" + data.message, "error");
          });
      });
    });

    // Event listener para el formulario de comentarios
    commentForm.addEventListener('submit', function (event) {
      event.preventDefault();

      const comentario = document.getElementById(newCommentId).value;
      const publicacionId = publicacionIdInput.value;

      fetch('/usuarios/agregarComentario', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ publicacionId: publicacionId, comentario: comentario })
      })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            const newCommentElement = document.createElement('div');
            newCommentElement.classList.add('comment');
            newCommentElement.innerHTML = `<p><strong>${data.usuario}</strong>: ${data.comentario}</p>`;
            commentsContainer.appendChild(newCommentElement);
            document.getElementById(newCommentId).value = ''; // Clear the input field
          } else {
            Swal.fire("Error", "Hubo un problema al eliminar la publicación: " + data.message, "error");
          }
        })
        .catch(error => {
          Swal.fire("Error", "Hubo un problema al eliminar la publicación: " + data.message, "error");
        });
    });

    // Event listeners para cerrar el modal
    span.onclick = function () {
      modal.style.display = "none";
    }

    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }


  }

  // Inicialización para muro principal
  initCommentEvents('commentsModal', 'modal-comments-container', 'commentForm', 'newComment', 'publicacionIdInput');

  // Inicialización para muro personal
  initCommentEvents('commentsModalp', 'modal-comments-containerp', 'commentFormp', 'newCommentp', 'publicacionIdInputp');

});

//LIKES
document.addEventListener('DOMContentLoaded', function () {
  // Like action
  document.querySelectorAll('.like-action').forEach(function (element) {
    element.addEventListener('click', function () {
      const publicacionId = this.getAttribute('data-id');
      const likesCountElement = this.parentElement.querySelector('.likes-count'); // Seleccionar el contador de likes

      fetch('/usuarios/likePublicacion', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ publicacionId: publicacionId })
      })
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          if (data.success) {
            // Actualizar el contador de likes en el frontend
            const newLikes = parseInt(likesCountElement.textContent.trim()) + 1 || 1; // Incrementar el contador
            likesCountElement.textContent = newLikes;
          } else {
            Swal.fire("Error", "Hubo un problema al realizar esta acción:" + data.message, "error");
          }
        })
        .catch(error => {
          Swal.fire("Error", "Hubo un problema al realizar esta acción:" + data.message, "error");
        });
    });
  });
});





// REPORTES

document.addEventListener('DOMContentLoaded', function () {
  // Report action
  document.querySelectorAll('.report-action').forEach(function (element) {
    element.addEventListener('click', function () {
      const publicacionId = this.getAttribute('data-id');
      const reportsCountElement = this.parentElement.querySelector('.reports-count'); // Seleccionar el contador de reportes

      fetch('/usuarios/reportarPublicacion', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ publicacionId: publicacionId })
      })
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          if (data.success) {
            // Actualizar el contador de reportes en el frontend
            let currentReportsCount = parseInt(reportsCountElement.textContent.trim()) || 0; // Convertir a número o asignar 0 si no es válido
            const newReportsCount = currentReportsCount + 1;
            reportsCountElement.textContent = newReportsCount;

            if (newReportsCount >= 3) {
              // Ocultar la publicación o realizar alguna acción adicional
              const publicacionContainer = element.closest('.tweet-card');
              publicacionContainer.style.display = 'none';
            }

          } else {
            Swal.fire("Error", "Hubo un problema al realizar esta acción:" + data.message, "error");
          }
        })
        .catch(error => {
          Swal.fire("Error", "Hubo un problema al realizar esta acción:" + data.message, "error");
        });
    });
  });
});

