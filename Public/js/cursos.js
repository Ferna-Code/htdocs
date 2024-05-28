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
  
  function controlVisi6() {
    var elemento3 = document.getElementById("modulo6");
    
    // Oculta todos los módulos
    ocultarModulos();
  
    // Muestra el módulo 1
    elemento3.style.display = "flex";
    
    // Centra el módulo 1
    centrarModulo(elemento3);
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
  function vistaofertas() {
    var elemento8 = document.getElementById("modulo8");
    
    // Oculta todos los módulos
    ocultarModulos();
  
    // Muestra el módulo 1
    elemento8.style.display = "flex";
    
    // Centra el módulo 1
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
    for (var i = 0 ; i < modulos.length; i++) {
        modulos[i].style.display = "none"; // Oculta todos los módulos
    }
  }
  
  function centrarModulo(modulo) {
    modulo.style.justifyContent = "center"; // Centra horizontalmente
    modulo.style.alignItems = "center"; // Centra verticalmente
  }

  function getCursos() {
    fetch("/cursos/getdata/", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json(); // Cambiar a response.json() para parsear la respuesta JSON
    })
    .then(data => {
        if (data.success) {
            const cursos = data.Cursos;
            // Obtener el contenedor de cursos
            const cursosContainer = document.getElementById("cursosContainer");
            // Crear un nuevo contenedor para cada fila de tarjetas
            let rowContainer;
            cursos.forEach((curso, index) => {
                // Crear una nueva tarjeta HTML para cada curso
                const cardcurso = document.createElement("div");
                cardcurso.className = "col-xs-12 col-sm-6 col-md-3";
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
                // Si es el primer curso o el inicio de una nueva fila, crear un nuevo contenedor de fila
                if (index % 4 === 0) {
                    rowContainer = document.createElement("div");
                    rowContainer.className = "row";
                    cursosContainer.appendChild(rowContainer);
                }
                // Agregar la tarjeta al contenedor de fila actual
                rowContainer.appendChild(cardcurso);
            });
        } else {
            console.error("Error message:", data.message);
        }
    })
    .catch(error => {
        console.error('Error al obtener los datos de los cursos:', error);
    });
}

