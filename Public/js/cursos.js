function controlVisi4() {
    var elemento = document.getElementById("modulo4");
    
    // Oculta todos los módulos
    ocultarModulos();
    getCursos();
    // Muestra el módulo 1
    elemento.style.display = "flex";
    
    // Centra el módulo 1
    centrarModulo(elemento);
  }


  
  function controlVisi5() {
    var elemento2 = document.getElementById("modulo5");
    
    // Oculta todos los módulos
    ocultarModulos();
  
    // Muestra el módulo 1
    elemento2.style.display = "flex";
    
    // Centra el módulo 1
    centrarModulo(elemento2);
  }
  
  function controlVisi6(categoriaId) {
    var elemento6 = document.getElementById("modulo6");
    console.log("cursos.js")
    getCursos(categoriaId);
    ocultarModulos();
    elemento6.style.display = "flex";
    centrarModulo(elemento6);
  }
  
  function controlVisi7() {
    var elemento4 = document.getElementById("modulo7");
    
    // Oculta todos los módulos
    ocultarModulos();
  
    // Muestra el módulo 1
    elemento4.style.display = "flex";
    
    // Centra el módulo 1
    centrarModulo(elemento4);
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
    for (var i = 0 ; i < modulos.length; i++) {
        modulos[i].style.display = "none"; // Oculta todos los módulos
    }
  }
  
  function centrarModulo(modulo) {
    modulo.style.justifyContent = "center"; // Centra horizontalmente
    modulo.style.alignItems = "center"; // Centra verticalmente
  }

function getCursos(categoriaId) {
  const cursosContainer = document.getElementById("cursosContainer");
  cursosContainer.innerHTML = '';
  
    fetch("/cursos/getDatabycategory/", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ categoriaId: categoriaId })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
      console.log("Datos recibidos del servidor:", data);
      if (data.success) {
          const cursos = data.Cursos;
          console.log("Cursos recibidos data:", cursos);
          const cursosContainer = document.getElementById("cursosContainer");
          console.log("Contenedor de cursos:", cursosContainer);
          let rowContainer;
          cursos.forEach((curso, index) => {
              const cardcurso = document.createElement("div");
              cardcurso.className = "col-xs-12 col-sm-6 col-md-4";
              cardcurso.innerHTML = `
                  <div class="cardc mb-4">
                      <div class="cardc-details">
                          <p class="text-title">${curso.nombre}</p>
                          <p class="text-body">Emitido por: ${curso.emitidopor}</p>
                          <p class="text-body">Fecha de creación: ${curso.fechaCreacion}</p>
                      </div>
                      <button class="cardc-button" onclick="controlVisi6()">Ver más</button>
                  </div>
              `;
              
              if (index % 4 === 0) {
                  rowContainer = document.createElement("div");
                  rowContainer.className = "row";
                  cursosContainer.appendChild(rowContainer);
              }
              rowContainer.appendChild(cardcurso);
          });
      } else {
          console.error("Error message: ", data.message, "Error en la respuesta del servidor");
      }
  })
}
