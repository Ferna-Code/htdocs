function controlVisi1() {
  var elemento = document.getElementById("modulo1");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento);
}

// muroPersonal
function controlVisit10() {
  var elemento10 = document.getElementById("modulo10");

  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento10.style.display = "flex";
  // Centra el módulo 1
  centrarModulo(elemento10);
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
  ocultarModulos();

  elemento3.style.display = "flex";

  centrarModulo(elemento3);
}


function controlVisi6(categoriaId) {
  var elemento6 = document.getElementById("modulo6");
  getCursos(categoriaId);
  ocultarModulos();
  elemento6.style.display = "flex";
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

function vistaofertas() {
  getOfertas();
  var elemento8 = document.getElementById("modulo8");
  console.log("VistaOfertas alumonsjs");
  ocultarModulos();
  elemento8.style.display = "flex";
  centrarModulo(elemento8);
}


function veroferta() {
  var elemento8 = document.getElementById("modulo9");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento8.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento8);
}



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


function getOfertas() {
  const ofertasContainer = document.getElementById("ofertasContainer");
  ofertasContainer.innerHTML = ''; // Limpiar el contenedor antes de agregar nuevas ofertas

  fetch("/ofertas/getData/", {
      method: "POST",
      headers: {
          "Content-Type": "application/json",
      },
  })
  .then(response => {
      if (!response.ok) {
          throw new Error('Network response was not ok');
      }
      return response.json();
  })
  .then(data => {
      console.log("Datos recibidos del servidor:", data);

      // Ajustar para usar la clave 'oferta' en lugar de 'ofertas'
      if (data && data.success && Array.isArray(data.oferta)) {
          const ofertas = data.oferta; // Usar 'oferta' en lugar de 'ofertas'
          console.log("Ofertas recibidas:", ofertas);

          let rowContainer;
          ofertas.forEach((oferta, index) => {
              const cardOferta = document.createElement("div");
              cardOferta.className = "col-xs-12 col-sm-6 col-md-4";
              cardOferta.innerHTML = `
                  <div class="cardc mb-4">
                      <div class="cardc-details">
                          <p class="text-title">${oferta.tipoOferta}</p>
                          <p class="text-body">Cargo: ${oferta.cargo}</p>
                          <p class="text-body">Empresa: ${oferta.nombreEmpresa}</p>
                          <p class="text-body">Fecha de creación: ${oferta.fechacreacion}</p>
                      </div>
                      <button class="cardc-button" onclick="controlVisi6()">Ver más</button>
                  </div>
              `;

              if (index % 3 === 0) {
                  rowContainer = document.createElement("div");
                  rowContainer.className = "row";
                  ofertasContainer.appendChild(rowContainer);
              }
              rowContainer.appendChild(cardOferta);
          });
      } else {
          console.error("Error en la respuesta del servidor: ", data ? data.message : "Respuesta inválida");
      }
  })
  .catch(error => {
      console.error("Hubo un problema con la solicitud Fetch:", error);
  });
}

// Llamar a la función al cargar la página
document.addEventListener("DOMContentLoaded", () => {
  getOfertas();
});




