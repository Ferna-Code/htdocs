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

  // Muestra el módulo 1
  elemento12.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento12);
}
function controlVisi13() {
  var elemento13 = document.getElementById("modulo13");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento13.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento13);
}

function controlVisi14() {
  var elemento14 = document.getElementById("modulo14");

  // Oculta todos los módulos
  ocultarModulos();

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
          <td class="widthCheck"><input type="checkbox" class="checkboxCarrera" name="select-all"></td>
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

      } else {
        alert("No se encontraron datos para actualizar");
      }
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


        data.forEach(row => {
          console.log("Cuerpo del mensaje: ", row);
          const fila = `
        <tr>
          <td class="widthCheck"><input type="checkbox" class="checkboxComentario" name="select-all"></td>
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



//evento para seleccionar las filas marcadas con checkbox
document.getElementById('deleteSelected').addEventListener('click', function () {
  //Este array almacenará los IDs de las publicaciones seleccionadas para eliminar.
  const selectedIds = [];
  //Se selecciona todos los checkboxes con la clase checkboxPublicacion que están marcados (checked).
  document.querySelectorAll('.checkboxPublicacion:checked').forEach(checkbox => {
    //children[1] selecciona la segunda celda (<td>) en esa fila (asumiendo que el ID está en la segunda celda
    //textContent obtiene el texto dentro de esa celda, que es el ID de la publicación.
    //selectedIds.push(...) añade ese ID al array selectedIds.
    selectedIds.push(checkbox.closest('tr').children[1].textContent.trim()); // Assuming the ID is in the second cell
  });

  if (selectedIds.length > 0) {
    if (confirm(`¿Está seguro que desea eliminar las publicaciones con ID: ${selectedIds.join(', ')}?`)) {
      deletePublicaciones(selectedIds);
    }
  } else {
    alert('No hay publicaciones seleccionadas para eliminar.');
  }
});


function deletePublicaciones(ids) {
  console.log("Eliminar publicaciones:", ids);
  fetch("/Administrador/deletePublicacion", {
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
        alert('Publicaciones eliminadas correctamente.');
        getPublicacion();
      } else {
        alert('Error al eliminar las publicaciones.');
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}





document.getElementById('deleteSelected').addEventListener('click', function () {
  const selectedIds = [];
  document.querySelectorAll('.checkboxCarrera:checked').forEach(checkbox => {
    selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
  });

  if (selectedIds.length > 0) {
    if (confirm(`¿Está seguro que desea eliminar las carreras con ID: ${selectedIds.join(', ')}?`)) {
      deleteCarreras(selectedIds);
    }
  } else {
    alert('No a seleccionado un elemento para eliminar.');
  }
});

function deleteCarreras(ids) {
  console.log("Eliminar carreras:", ids);
  fetch("/Administrador/deleteCarreras", {
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
        alert('Eliminadas correctamente.');
        getPublicacion();
      } else {
        alert('Error al eliminar.');
      }
    })
    .catch((error) => {
      console.error("Error en la solicitud Fetch: ", error);
      alert("Error en la solicitud: ", error.message);
    });
}





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

function controlVisi17() {
  var elemento17 = document.getElementById("modulo17");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento17.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento17);
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












