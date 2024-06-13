document.addEventListener("DOMContentLoaded", function() {
  let userDataOriginal;

  function getUsuarios() {
      fetch("/Administrador/getdataUsuario/", {
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

      fetch("/Administrador/guardardatospersonales", {
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

function cambiosGuardados(){
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "¡Cambios guardados correctamente!",
    showConfirmButton: false,
    timer: 1500
  });
}


function controlVisi1() {
  var elemento = document.getElementById("modulo1");

  // Oculta todos los módulos
  ocultarModulos();
  getCarrera();
  // Muestra el módulo 1
  elemento.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento);
}

function controlVisi2() {
  var elemento2 = document.getElementById("modulo2");

  // Oculta todos los módulos
  ocultarModulos();
  getCategoria();
  // Muestra el módulo 1
  elemento2.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento2);
}

function controlVisi3() {
  var elemento3 = document.getElementById("modulo3");

  // Oculta todos los módulos
  ocultarModulos();
  getCurso();
  // Muestra el módulo 1
  elemento3.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento3);
}

function controlVisi4() {
  var elemento4 = document.getElementById("modulo4");

  // Oculta todos los módulos
  ocultarModulos();
  getDiccionario();

  // Muestra el módulo 1
  elemento4.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento4);
}

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

function controlVisi6() {
  var elemento6 = document.getElementById("modulo6");

  // Oculta todos los módulos
  ocultarModulos();
  getPublicacion();
  // Muestra el módulo 1
  elemento6.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento6);
}

function controlVisi7() {
  var elemento7 = document.getElementById("modulo7");

  // Oculta todos los módulos
  ocultarModulos();
  getReportes();

  // Muestra el módulo 1
  elemento7.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento7);
}

function controlVisi8() {
  var elemento8 = document.getElementById("modulo8");

  // Oculta todos los módulos
  ocultarModulos();
  getUsuarios();
  // Muestra el módulo 1
  elemento8.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento8);
}
function controlVisi9() {
  var elemento9 = document.getElementById("modulo9");

  // Oculta todos los módulos
  ocultarModulos();
  getArchivos();
  // Muestra el módulo 1
  elemento9.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento9);
}
function controlVisi10() {
  var elemento10 = document.getElementById("modulo10");

  // Oculta todos los módulos
  ocultarModulos();
  getComentarios();
  // Muestra el módulo 1
  elemento10.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento10);
}
function controlVisi11() {
  var elemento11 = document.getElementById("modulo11");

  // Oculta todos los módulos
  ocultarModulos();
  getOfertas();
  // Muestra el módulo 1
  elemento11.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento11);
}
function controlVisi12() {
  var elemento12 = document.getElementById("modulo12");

  // Oculta todos los módulos
  ocultarModulos();
  getPostulaciones()
  // Muestra el módulo 1
  elemento12.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento12);
}
function controlVisi13() {
  var elemento13 = document.getElementById("modulo13");

  // Oculta todos los módulos
  ocultarModulos();
  getExpAcademica();
  // Muestra el módulo 1
  elemento13.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento13);
}

function controlVisi14() {
  var elemento14 = document.getElementById("modulo14");

  // Oculta todos los módulos
  ocultarModulos();
  getExpLaboral();
  // Muestra el módulo 1
  elemento14.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento14);
}


function controlVisi15() {
  var elemento15 = document.getElementById("modulo15");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento15.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento15);
}
function controlVisi16() {
  var elemento16 = document.getElementById("modulo16");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento16.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento16);
}

function controlVisi17() {
  var elemento17 = document.getElementById("modulo17");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento17.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento17);
}




//-------------ajustes de modulos--------------//
function ocultarModulos() {
  var modulos = document.getElementsByClassName("contenedor-body");
  for (var i = 0; i < modulos.length; i++) {
    modulos[i].style.display = "none"; // Oculta todos los módulos
  }
}

function centrarModulo(modulo) {
  modulo.style.justifyContent = "center"; // Centra horizontalmente
  modulo.style.alignItems = "center"; // Centra verticalmente
}



/*-------------Mostrar info en Tablas--------------*/

async function getCarrera() {
  try {
    const responseCarreras = await fetch("/Administrador/getCarrera");
    if (!responseCarreras.ok) {
      throw new Error(`HTTP error: ${responseCarreras.status}`);
    }
    const dataCarreras = await responseCarreras.json();

    // Obtener un mapa de ID de categoría a nombre de categoría
    const categoriasMap = await obtenerCategoriasMap();

    const tbody = $("#bodyCarreras");
    tbody.empty();

    dataCarreras.forEach(row => {
      const categoriaNombre = categoriasMap.get(row.idcategorias) || 'Categoría desconocida';
      const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxCarrera" name="select-all"></td>
          <td class="hidden">${row.id}</td>
          <td>${row.nombre}</td>
          <td>${categoriaNombre}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
          <td><button type="button" class="btn-supervisor btn-editar" onclick="editarCarrera(${row.id},'${row.nombre}',${row.idcategorias},'${categoriaNombre}')">Editar</button></td>
        </tr>`;
      tbody.append(fila);
    });

    initializeCheckboxMaster('checkAllCarrera', 'checkboxCarrera');
  } catch (error) {
    console.error("Error en la solicitud Fetch: ", error);
    alert("Error en la solicitud: ", error.message);
  }
}

async function obtenerCategoriasMap() {
  try {
    const responseCategorias = await fetch("/Administrador/getCategoria");
    if (!responseCategorias.ok) {
      throw new Error(`HTTP error: ${responseCategorias.status}`);
    }
    const dataCategorias = await responseCategorias.json();

    // Construir un mapa de ID de categoría a nombre de categoría
    const categoriasMap = new Map();
    dataCategorias.forEach(row => {
      categoriasMap.set(row.id, row.nombre);
    });
    return categoriasMap;
  } catch (error) {
    throw new Error(`Error al obtener las categorías: ${error.message}`);
  }
}



// EDITAR CARRERA

async function editarCarrera(id, nombre, idcategorias, categoriaNombre) {
  try {
    // Obtener el mapa de ID de categoría a nombre de categoría
    const categoriasMap = await obtenerCategoriasMap();

    // Construir las opciones del select
    let opcionesSelect = '';
    categoriasMap.forEach((nombre, id) => {
      opcionesSelect += `<option value="${id}">${nombre}</option>`;
    });

    const { value: formValues } = await Swal.fire({
      title: "Editar Carrera",
      html: `
        <input id="swal-input1" type="hidden" class="swal2-input" value="${id}">
        <br>
        <input id="swal-input2" class="swal2-input" value="${nombre}">
        <select id="swal-input3" class="swal2-input">${opcionesSelect}</select>
      `,
      
      focusConfirm: false,
      preConfirm: () => {
        return [
          document.getElementById("swal-input1").value,
          document.getElementById("swal-input2").value,
          document.getElementById("swal-input3").value
        ];
      }
    });

    if (formValues) {
      const id = formValues[0];
      const nuevoNombre = formValues[1];
      const idCategoriaSeleccionada = formValues[2];
      const nombreCategoriaSeleccionada = categoriasMap.get(idCategoriaSeleccionada);

      fetch('/Administrador/updateCarrera', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id, nuevoNombre,idCategoriaSeleccionada })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          Swal.fire('Carrera actualizada con éxito');
          getCategoria(); // Vuelve a cargar la tabla de Carreras
        } else {
          Swal.fire('Error al actualizar la Carrera');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        Swal.fire('Error al actualizar la Carrera');
      });
    }
  } catch (error) {
    console.error("Error al editar carrera: ", error);
    Swal.fire('Error al editar carrera');
  }

  getCarrera()
}

  




//FIN EDITAR CARRERA


// OBTENER CATEGORIAS

function getCategoria() {
  fetch("/Administrador/getCategoria")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyCategorias");
        tbody.empty();

        data.forEach(row => {
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxCategoria" name="select-all"></td>
          <td class="hidden">${row.id}</td>
          <td>${row.nombre}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
          <td><button type="button" class="btn-supervisor btn-editar" onclick="editarCategoria(${row.id},'${row.nombre}')">Editar</button></td>
        </tr>`; 
          tbody.append(fila);
        });

        initializeCheckboxMaster('checkAllCategoria', 'checkboxCategoria');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

async function editarCategoria(id, nombre) {
  const { value: formValues } = await Swal.fire({
    title: "Editar Categoría",
    html: `
      <input id="swal-input2" style="width: 300px;" class="swal2-input" placeholder="Nuevo nombre" value="${nombre}">
    `,
    confirmButtonText: 'Actualizar',
    focusConfirm: false,
    preConfirm: () => {
      return [
        document.getElementById("swal-input2").value
      ];
    }
  });

  if (formValues) {
    const nuevoNombre = formValues[0];

    fetch('/Administrador/updateCategoria', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ id, nuevoNombre })
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        Swal.fire('Categoría actualizada con éxito');
        getCategoria(); // Vuelve a cargar la tabla de categorías
      } else {
        Swal.fire('Error al actualizar la categoría');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      Swal.fire('Error al actualizar la categoría');
    });
  }
}

document.getElementById('editarButton').addEventListener('click', function(event) {
  event.preventDefault(); 
  editarCategoria();
  editarDiccionario();
  editarCarrera()
});



// Llamar a la función para cargar las categorías
getCategoria();


//--------------CURSOS---------------//
function getCurso() {
  fetch("/Administrador/getCurso")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyCursos");
        tbody.empty();

        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" id="checkboxCurso" class="checkboxCurso" name="select-all"></td>
          <td class="hidden">${row.id}</td>
          <td>${row.nombre}</td>
          <td>${row.emitidopor}</td>
          <td>${row.fechaCreacion}</td>
          <td><a href="#" onclick="veroferta(${row.id})">Ver Curso</a></td>
        </tr>`;
          tbody.append(fila);
        });

        initializeCheckboxMaster('checkAllCursos', 'checkboxCursos');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}


function getDiccionario() {
  fetch("/Administrador/getDiccionario")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyDiccionario");
        tbody.empty();

        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxPalabra" name="select-all"></td>
          <td class="hidden">${row.id}</td>
          <td>${row.palabra}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
          <td><button type="button" class="btn-supervisor btn-editar" onclick="editardiccionario(${row.id},'${row.palabra}')">Editar</button></td>
   
        </tr>`;
          tbody.append(fila);
        });

        initializeCheckboxMaster('checkAllPalabras', 'checkboxPalabra');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

async function editardiccionario(id, palabra) {
  const { value: formValues } = await Swal.fire({
    title: "Editar Palabra Prohibida",
    html: `
      <input id="swal-input2" style="width: 300px;" class="swal2-input" placeholder="palabra" value="${palabra}">
    `,
    confirmButtonText: 'Actualizar',
    focusConfirm: false,
    preConfirm: () => {
      return [
        document.getElementById("swal-input2").value
      ];
    }
  });

  if (formValues) {
    const nuevaPalabra = formValues[0];

    fetch('/Administrador/updateDiccionario', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ id, nuevaPalabra })
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        Swal.fire('Palabra actualizada con éxito');
        getDiccionario(); // Vuelve a cargar la tabla
      } else {
        Swal.fire('Error al actualizar la Palabra');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      Swal.fire('Error al actualizar la Palabra');
    });
  }
}

// PERFIL

function getPerfil() {
  fetch("/Administrador/getPerfil")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyPerfiles");
        tbody.empty();

        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxPerfil" name="select-all"></td>
          <td>${row.id}</td>
          <td>${row.nombre}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;
          tbody.append(fila);
        });

        initializeCheckboxMaster('checkAllPerfiles', 'checkboxPerfil');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getReportes() {
  fetch("/Administrador/getReportes")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyReportes");
        tbody.empty();


        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxReporte" name="select-all"></td>
          <td>${row.id}</td>
          <td>${row.idcomentario}</td>
          <td>${row.rutusuario}</td>
          <td>${row.idpublicacion}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;
          tbody.append(fila);
        });

        // se reinicializa desde el JS la casilla de verificación maestra después de cargar nuevos datos
        initializeCheckboxMaster('checkAllReportes', 'checkboxReporte');

      } /*else {
        alert("Sin Datos Cargados.");
      }*/
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getUsuarios() {
  fetch("/Administrador/getUsuarios")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyUsuarios");
        tbody.empty();


        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxUsuario" name="select-all"></td>
          <td>${row.rut}</td>
          <td>${row.nombre}</td>
          <td>${row.fechaNacimiento}</td>
          <td>${row.idperfil}</td>
          <td>${row.correo}</td>
          <td>${row.idcarrera}</td>
          <td>${row.avance}</td>
          <td>${row.cargo}</td>
          <td>${row.clave}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;
          tbody.append(fila);
        });

        // se reinicializa desde el JS la casilla de verificación maestra después de cargar nuevos datos
        initializeCheckboxMaster('checkAllUsuarios', 'checkboxUsuario');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getArchivos() {
  fetch("/Administrador/getArchivos")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyArchivos");
        tbody.empty();


        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxArchivo" name="select-all"></td>
          <td>${row.id}</td>
          <td>${row.rutusuario}</td>
          <td>${row.documento}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;
          tbody.append(fila);
        });

        // se reinicializa desde el JS la casilla de verificación maestra después de cargar nuevos datos
        initializeCheckboxMaster('checkAllArchivos', 'checkboxArchivo');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getComentarios() {
  fetch("/Administrador/getComentarios")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyComentarios");
        tbody.empty();


        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxComentario" name="select-all"></td>
          <td>${row.id}</td>
          <td>${row.rutusuario}</td>
          <td>${row.idpublicacion}</td>
          <td>${row.comentario}</td>
          <td>${row.nreportes}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;
          tbody.append(fila);
        });

        // se reinicializa desde el JS la casilla de verificación maestra después de cargar nuevos datos
        initializeCheckboxMaster('checkAllComentarios', 'checkboxComentario');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getPublicacion() {
  console.log("controladorPubliacion");
  fetch("/Administrador/getPublicacion")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyPublicaciones");
        tbody.empty();

        //itera sobre cada elemento en la data y añade fila a la tabla
        //data.array.forEach(element => {});
        // (class="checkboxPublicacion),id se cambia a class para que el checkboxAll seleccione todos los check de las filas de la tabla
        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxPublicacion name="select-all"></td>
          <td>${row.id}</td>
          <td>${row.rutusuario}</td>
          <td>${row.publicacion}</td>
          <td>${row.nreportes}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;
          tbody.append(fila);
        });

        // se reinicializa desde el JS la casilla de verificación maestra después de cargar nuevos datos
        initializeCheckboxMaster('checkAllPublicacion', 'checkboxPublicacion');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getOfertas() {
  fetch("/Administrador/getOfertas")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyOfertas");
        tbody.empty();


        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxOferta" name="select-all"></td>
          <td>${row.id}</td>
          <td>${row.tipoOferta}</td>
          <td>${row.idcategoria}</td>
          <td>${row.cargo}</td>
          <td>${row.nombreEmpresa}</td>
          <td>${row.rutempresa}</td>
          <td>${row.correocontacto}</td>
          <td>${row.descripcion}</td>
          <td>${row.rangosalarial}</td>
          <td>${row.fechacreacion}</td>
          <td>${row.fechaeliminacion ? row.fechaeliminacion : 'N/A'}</td>
        </tr>`;
          tbody.append(fila);
        });

        // se reinicializa desde el JS la casilla de verificación maestra después de cargar nuevos datos
        initializeCheckboxMaster('checkAllOfertas', 'checkboxOferta');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getPostulaciones() {
  fetch("/Administrador/getPostulaciones")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyPostulaciones");
        tbody.empty();


        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxPostulacion" name="select-all"></td>
          <td>${row.id}</td>
          <td>${row.rutusuario}</td>
          <td>${row.idcarrera}</td>
          <td>${row.rutempresa}</td>
          <td>${row.idoferta}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;
          tbody.append(fila);
        });

        // se reinicializa desde el JS la casilla de verificación maestra después de cargar nuevos datos
        initializeCheckboxMaster('checkAllPostulaciones', 'checkboxPostulacion');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getExpAcademica() {
  fetch("/Administrador/getExpAcademica")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyAcademica");
        tbody.empty();


        data.forEach(row => {
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxAcademica" name="select-all"></td>
          <td>${row.ID}</td>
          <td>${row.rutusuario}</td>
          <td>${row.fechafinalizacion}</td>
          <td>${row.titulobtenido}</td>
          <td>${row.cursaactualmente}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;
          tbody.append(fila);
        });

        // se reinicializa desde el JS la casilla de verificación maestra después de cargar nuevos datos
        initializeCheckboxMaster('checkAllAcademicas', 'checkboxAcademica');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

function getExpLaboral() {
  fetch("/Administrador/getExpLaboral")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyLaboral");
        tbody.empty();


        data.forEach(row => {
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxLaboral" name="select-all"></td>
          <td>${row.ID}</td>
          <td>${row.rutusuario}</td>
          <td>${row.fechadesde}</td>
          <td>${row.fechahasta}</td>
          <td>${row.puesto}</td>
          <td>${row.descripcion}</td>
          <td>${row.trabajaactualmente}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;
          tbody.append(fila);
        });

        // se reinicializa desde el JS la casilla de verificación maestra después de cargar nuevos datos
        initializeCheckboxMaster('checkAllLaborales', 'checkboxLaboral');

      } /*else {
        alert("No se encontraron datos para actualizar");
      }*/
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

//...............DELETE CURSO...............
document.getElementById('deleteSelectedCurso').addEventListener('click', function () {
  const selectedIds = [];
  document.querySelectorAll('.checkboxCurso:checked').forEach(checkbox => {
    selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
  });

  if (selectedIds.length > 0) {
    if (confirm(`¿Desea eliminar los cursos c: ${selectedIds.join(', ')}?`)) {
      deleteCurso(selectedIds);
    }
  } else {
    alert('No hay cursos seleccionadas para eliminar.');
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
        alert('Curso(s) eliminado(s)');
        getCurso();
      } else {
        alert('Error al eliminar los cursos.');
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: " + error.message);
    });
    
}



//--------------DELETE GLOBAL --------------//

document.addEventListener('DOMContentLoaded', (event) => {
  const deleteSelectedCarrerasBtn = document.getElementById('deleteSelectedCarreras');
  if (deleteSelectedCarrerasBtn) {
      deleteSelectedCarrerasBtn.removeEventListener('click', deleteSelectedCarrerasHandler);
      deleteSelectedCarrerasBtn.addEventListener('click', deleteSelectedCarrerasHandler);
  }

  const deleteSelectedCategoriasBtn = document.getElementById('deleteSelectedCategorias');
  if (deleteSelectedCategoriasBtn) {
      deleteSelectedCategoriasBtn.removeEventListener('click', deleteSelectedCategoriasHandler);
      deleteSelectedCategoriasBtn.addEventListener('click', deleteSelectedCategoriasHandler);
  }

  // const deleteSelectedCursosBtn = document.getElementById('deleteSelectedCursos');
  // if (deleteSelectedCursosBtn) {
  //   deleteSelectedCursosBtn.removeEventListener('click', deleteSelectedCursosHandler);
  //   deleteSelectedCursosBtn.addEventListener('click', deleteSelectedCursosHandler);
  // }

  const deleteSelectedDiccionariosBtn = document.getElementById('deleteSelectedDiccionario');
  if (deleteSelectedDiccionariosBtn) {
    deleteSelectedDiccionariosBtn.removeEventListener('click', deleteSelectedDiccionarioHandler);
    deleteSelectedDiccionariosBtn.addEventListener('click', deleteSelectedDiccionarioHandler);
  }

  const deleteSelectedPerfilesBtn = document.getElementById('deleteSelectedPerfiles');
  if (deleteSelectedPerfilesBtn) {
    deleteSelectedPerfilesBtn.removeEventListener('click', deleteSelectedPerfilesHandler);
    deleteSelectedPerfilesBtn.addEventListener('click', deleteSelectedPerfilesHandler);
  }

  const deleteSelectedPublicacionBtn = document.getElementById('deleteSelectedPublicacion');
  if (deleteSelectedPublicacionBtn) {
    deleteSelectedPublicacionBtn.removeEventListener('click', deleteSelectedPublicacionHandler);
    deleteSelectedPublicacionBtn.addEventListener('click', deleteSelectedPublicacionHandler);
  }

  const deleteSelectedReportesBtn = document.getElementById('deleteSelectedReportes');
  if (deleteSelectedReportesBtn) {
    deleteSelectedReportesBtn.removeEventListener('click', deleteSelectedReportesHandler);
    deleteSelectedReportesBtn.addEventListener('click', deleteSelectedReportesHandler);
  }

  const deleteSelectedUsuariosBtn = document.getElementById('deleteSelectedUsuarios');
  if (deleteSelectedUsuariosBtn) {
    deleteSelectedUsuariosBtn.removeEventListener('click', deleteSelectedUsuariosHandler);
    deleteSelectedUsuariosBtn.addEventListener('click', deleteSelectedUsuariosHandler);
  }

  const deleteSelectedArchivosBtn = document.getElementById('deleteSelectedArchivos');
  if (deleteSelectedArchivosBtn) {
    deleteSelectedArchivosBtn.removeEventListener('click', deleteSelectedArchivosHandler);
    deleteSelectedArchivosBtn.addEventListener('click', deleteSelectedArchivosHandler);
  }

  const deleteSelectedComentariosBtn = document.getElementById('deleteSelectedComentarios');
  if (deleteSelectedComentariosBtn) {
    deleteSelectedComentariosBtn.removeEventListener('click', deleteSelectedComentariosHandler);
    deleteSelectedComentariosBtn.addEventListener('click', deleteSelectedComentariosHandler);
  }

  const deleteSelectedOfertasBtn = document.getElementById('deleteSelectedOfertas');
  if (deleteSelectedOfertasBtn) {
    deleteSelectedOfertasBtn.removeEventListener('click', deleteSelectedOfertasHandler);
    deleteSelectedOfertasBtn.addEventListener('click', deleteSelectedOfertasHandler);
  }

  const deleteSelectedPostulacionesBtn = document.getElementById('deleteSelectedPostulaciones');
  if (deleteSelectedPostulacionesBtn) {
    deleteSelectedPostulacionesBtn.removeEventListener('click', deleteSelectedPostulacionesHandler);
    deleteSelectedPostulacionesBtn.addEventListener('click', deleteSelectedPostulacionesHandler);
  }

  const deleteSelectedExpAcademicaBtn = document.getElementById('deleteSelectedExpAcademica');
  if (deleteSelectedExpAcademicaBtn) {
    deleteSelectedExpAcademicaBtn.removeEventListener('click', deleteSelectedExpAcademicaHandler);
    deleteSelectedExpAcademicaBtn.addEventListener('click', deleteSelectedExpAcademicaHandler);
  }

  const deleteSelectedExpLaboralBtn = document.getElementById('deleteSelectedExpLaboral');
  if (deleteSelectedExpLaboralBtn) {
    deleteSelectedExpLaboralBtn.removeEventListener('click', deleteSelectedExpLaboralHandler);
    deleteSelectedExpLaboralBtn.addEventListener('click', deleteSelectedExpLaboralHandler);
  }

});



function deleteSelectedCarrerasHandler() {
    deleteSelectedRows('checkboxCarrera', '/Administrador/deleteCarreras');
}

function deleteSelectedCategoriasHandler() {
    deleteSelectedRows('checkboxCategoria', '/Administrador/deleteCategorias');
}

// function deleteSelectedCursosHandler() {
//   deleteSelectedRows('checkboxCursos', '/Administrador/deleteCursos');
// }

function deleteSelectedDiccionarioHandler() {
  deleteSelectedRows('checkboxPalabra', '/Administrador/deleteDiccionario');
}

function deleteSelectedPerfilesHandler() {
  deleteSelectedRows('checkboxPerfil', '/Administrador/deletePerfiles');
}

function deleteSelectedPublicacionHandler() {
  deleteSelectedRows('checkboxPublicacion', '/Administrador/deletePublicaciones');
}

function deleteSelectedReportesHandler() {
  deleteSelectedRows('checkboxReporte', '/Administrador/deleteReportes');
}

function deleteSelectedUsuariosHandler() {
  deleteSelectedRows('checkboxUsuario', '/Administrador/deleteUsuarios');
}

function deleteSelectedArchivosHandler() {
  deleteSelectedRows('checkboxArchivo', '/Administrador/deleteArchivos');
}

function deleteSelectedComentariosHandler() {
  deleteSelectedRows('checkboxComentario', '/Administrador/deleteComentarios');
}

function deleteSelectedOfertasHandler() {
  deleteSelectedRows('checkboxOferta', '/Administrador/deleteOfertas');
}

function deleteSelectedPostulacionesHandler() {
  deleteSelectedRows('checkboxPostulacion', '/Administrador/deletePostulaciones');
}

function deleteSelectedExpAcademicaHandler() {
  deleteSelectedRows('checkboxAcademica', '/Administrador/deleteExpAcademica');
}

function deleteSelectedExpLaboralHandler() {
  deleteSelectedRows('checkboxLaboral', '/Administrador/deleteExpLaboral');
}




function deleteSelectedRows(checkboxClass, apiEndpoint) {
  const selectedIds = [];
  document.querySelectorAll('.' + checkboxClass + ':checked').forEach(checkbox => {
      const row = checkbox.closest('tr');
      const id = row.cells[1].textContent; // Assuming the ID is in the second cell
      selectedIds.push(id);
  });

  if (selectedIds.length === 0) {
      alert("No hay filas seleccionadas");
      return;
  }

  // Preguntar al usuario para confirmar la eliminación
  if (!confirm(`¿Está seguro que desea eliminar las filas con ID: ${selectedIds.join(', ')}?`)) {
    return; // Abortar la eliminación si el usuario cancela
  }

  fetch(apiEndpoint, {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
      },
      body: JSON.stringify({ ids: selectedIds }),
  })
  .then(response => response.json())
  .then(data => {
      if (data.success) {
          selectedIds.forEach(id => {
              document.querySelectorAll(`tr`).forEach(row => {
                  if (row.cells[1] && row.cells[1].textContent == id) {
                      row.remove();
                  }
              });
          });
          alert('Eliminación exitosa');
      } else {
          alert('Error al eliminar fila(s): ' + data.message);
      }
  })
  .catch(error => {
      console.error('Error:', error);
      alert('Error al eliminar fila(s): ' + error.message);
  });
}



//--------------- INSERT GLOBAL ---------------- //

//CATEGORIA
$("#addCategoria").on("submit", function (event) {
  event.preventDefault();

  var formData = { // guardamos el cuerpo del mensaje por medio del ID
    nuevaCategoria: $("#nuevaCategoria").val(),
  };

  fetch("/Administrador/insertCategoria", { // Asegúrate de que esta ruta sea correcta
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
        $("#crearCategoria").modal("hide");
        getCategoria();

      } else {
        alert("Error" + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});

//----------------DICCIONARIO----------------------
$("#addPalabra").on("submit", function (event) {
  event.preventDefault();

  var formData = { // guardamos el cuerpo del mensaje por medio del ID
    palabra: $("#nuevaPalabra").val(),
 
  };

  fetch("/Administrador/insertPalabra", { // Asegúrate de que esta ruta sea correcta
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
        alert("Dato(s) agregado(s)");
        //resto del cuerpo para manejar respuesta exitosa

        $(
          "#crearPalabra"
        ).val("");
        // Cerrar el modal
        $("#crearPalabra").modal("hide");
        getDiccionario();

      } else {
        alert("Error" + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});

$("#addCarrera").on("submit", function (event) {
  event.preventDefault();

  var formData = { // guardamos el cuerpo del mensaje por medio del ID
    nuevaCarrera: $("#nuevaCarrera").val(),
    categoriaCarrera: $("#categoria").val(),
  };

  fetch("/Administrador/insertCarrera", { // Asegúrate de que esta ruta sea correcta
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
        alert("Dato(s) agregado(s)");
        //resto del cuerpo para manejar respuesta exitosa

        $(
          "#nuevaCarrera"
        ).val("");
        // Cerrar el modal
        $("#crearCarrera").modal("hide");
        getCarrera();

      } else {
        alert("Error" + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});

//INGRESAR PERFIL
$("#addPerfil").on("submit", function (event) {
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
        $("#crearPerfil").modal("hide");
        getPerfil();

      } else {
        alert("Error" + data.message);
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
    });
});// FIN CUERPO

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



