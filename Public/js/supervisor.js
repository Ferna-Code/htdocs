function controlVisi1() {
  var elemento = document.getElementById("modulo1");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento);
}

function controlVisi2() {
  var elemento2 = document.getElementById("modulo2");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento2.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento2);
}

function controlVisi3() {
  var elemento3 = document.getElementById("modulo3");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento3.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento3);
}

function controlVisi4() {
  var elemento4 = document.getElementById("modulo4");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento4.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento4);
}

function controlVisi5() {
  var elemento5 = document.getElementById("modulo5");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento5.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento5);
}

function controlVisi6() {
  var elemento6 = document.getElementById("modulo6");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento6.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento6);
}

function controlVisi7() {
  var elemento7 = document.getElementById("modulo7");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento7.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento7);
}

function controlVisi8() {
  var elemento8 = document.getElementById("modulo8");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento8.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento8);
}
function controlVisi9() {
  var elemento9 = document.getElementById("modulo9");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento9.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(elemento9);
}

function controlVisi10() {
  var eleme = document.getElementById("modulo10");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo correspondiente
  eleme.style.display = "flex";

  // Centra el módulo mostrado
  centrarModulo(eleme);
}

function controlVisi11() {
  var eleme = document.getElementById("modulo11");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

function controlVisi12() {
  var eleme = document.getElementById("modulo12");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

function controlVisi13() {
  var eleme = document.getElementById("modulo13");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

function controlVisi14() {
  var eleme = document.getElementById("modulo14");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

function controlVisi15() {
  var eleme = document.getElementById("modulo15");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

function controlVisi16() {
  var eleme = document.getElementById("modulo16");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

function controlVisi17() {
  var eleme = document.getElementById("modulo17");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  eleme.style.display = "flex";

  // Centra el módulo 1
  centrarModulo(eleme);
}

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
        alert("!Datos agregados¡");
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
