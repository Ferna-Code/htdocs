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