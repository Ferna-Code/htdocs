function controlVisi4() {
    var elemento = document.getElementById("modulo4");
    
    // Oculta todos los módulos
    ocultarModulos();
  
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