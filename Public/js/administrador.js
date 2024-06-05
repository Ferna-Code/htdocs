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

function getCarrera() {
  fetch("/Administrador/getCarrera")
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      if (data && data.length > 0) {
        const tbody = $("#bodyCarreras");
        tbody.empty();

        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxCarrera" name="select-all"></td>
          <td>${row.id}</td>
          <td>${row.nombre}</td>
          <td>${row.idcategorias}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
        </tr>`;
          tbody.append(fila);
        });

        initializeCheckboxMaster('checkAllCarrera', 'checkboxCarrera');

      } else {
        alert("No se encontraron datos para actualizar");
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}

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
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxCategoria" name="select-all"></td>
          <td>${row.id}</td>
          <td>${row.nombre}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
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
          <td class="widthCheck"><input type="checkbox" class="checkboxCursos" name="select-all"></td>
          <td>${row.id}</td>
          <td>${row.nombre}</td>
          <td>${row.descripcion}</td>
          <td>${row.emitidopor}</td>
          <td>${row.linkpostular}</td>
          <td>${row.idcategoria}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
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
          <td>${row.id}</td>
          <td>${row.palabra}</td>
          <td>${row.fechaCreacion}</td>
          <td>${row.activo}</td>
          <td>${row.fechaEliminacion ? row.fechaEliminacion : 'N/A'}</td>
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
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxAcademica" name="select-all"></td>
          <td>${row.id}</td>
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
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxLaboral" name="select-all"></td>
          <td>${row.id}</td>
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

  const deleteSelectedCursosBtn = document.getElementById('deleteSelectedCursos');
  if (deleteSelectedCursosBtn) {
    deleteSelectedCursosBtn.removeEventListener('click', deleteSelectedCursosHandler);
    deleteSelectedCursosBtn.addEventListener('click', deleteSelectedCursosHandler);
  }

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

function deleteSelectedCursosHandler() {
  deleteSelectedRows('checkboxCursos', '/Administrador/deleteCursos');
}

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





/* -------------------------crear modulos--------------
function controlVisi16() {
  var elemento16 = document.getElementById("modulo16");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento16.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento16);
}






function controlVisi18() {
  var elemento18 = document.getElementById("modulo18");
  console.log("aqui la marca")
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento18.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento18);
}

function controlVisi19() {
  var elemento19 = document.getElementById("modulo19");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento19.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento19);
}

function controlVisi20() {
  var elemento20 = document.getElementById("modulo20");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento20.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento20);
}

function controlVisi21() {
  var elemento21 = document.getElementById("modulo21");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento21.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento21);
}

function controlVisi22() {
  var elemento22 = document.getElementById("modulo22");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento22.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento22);
}

function controlVisi23() {
  var elemento23 = document.getElementById("modulo23");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento23.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento23);
}

function controlVisi24() {
  var elemento24 = document.getElementById("modulo24");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento24.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento24);
}

function controlVisi25() {
  var elemento25 = document.getElementById("modulo25");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento25.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento25);
}

function controlVisi26() {
  var elemento26 = document.getElementById("modulo26");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento26.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento26);
}

//------------------EDITAR-----------------//
function controlVisi27() {
  var elemento27 = document.getElementById("modulo27");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento27.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento27);
}

function controlVisi28() {
  var elemento28 = document.getElementById("modulo28");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento28.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento28);
}

function controlVisi29() {
  var elemento29 = document.getElementById("modulo29");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento29.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento29);
}

function controlVisi30() {
  var elemento30 = document.getElementById("modulo30");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento30.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento30);
}

function controlVisi31() {
  var elemento31 = document.getElementById("modulo31");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento31.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento31);
}

function controlVisi32() {
  var elemento32 = document.getElementById("modulo32");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento32.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento32);
}

function controlVisi33() {
  var elemento33 = document.getElementById("modulo33");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento33.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento33);
}

function controlVisi34() {
  var elemento34 = document.getElementById("modulo34");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento34.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento34);
}

function controlVisi35() {
  var elemento35 = document.getElementById("modulo35");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento35.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento35);
}

function controlVisi36() {
  var elemento36 = document.getElementById("modulo36");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento36.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento36);
}

function controlVisi37() {
  var elemento37 = document.getElementById("modulo37");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento37.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento37);
}

function controlVisi38() {
  var elemento38 = document.getElementById("modulo38");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento38.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento38);
}

function controlVisi39() {
  var elemento39 = document.getElementById("modulo39");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento39.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento39);
}*/












