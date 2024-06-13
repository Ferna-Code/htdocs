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
  ocultarModulos();
  elemento8.style.display = "flex";
  centrarModulo(elemento8);
}


function veroferta(id) {
  getOfertaByID(id);
  var elemento8 = document.getElementById("modulo9");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento8.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento8);
}

function vistacorreo() {
  var elemento8 = document.getElementById("modulo11");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento8.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento8);
}

function vistapostulacion() {
  var elemento8 = document.getElementById("modulo12");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento8.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento8);
}

function vistaclave() {
  var elemento8 = document.getElementById("modulo13");
  
  // Oculta todos los módulos
  ocultarModulos();

  // Muestra el módulo 1
  elemento8.style.display = "flex";
  
  // Centra el módulo 1
  centrarModulo(elemento8);
}

function vistaresumencv() {
  var elemento8 = document.getElementById("modulo14");
  
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

      // Ajustar para usar la clave 'oferta' en lugar de 'ofertas'
      if (data && data.success && Array.isArray(data.oferta)) {
          const ofertas = data.oferta; // Usar 'oferta' en lugar de 'ofertas'
          let rowContainer;
          ofertas.forEach((oferta, index) => {
              const cardOferta = document.createElement("div");
              cardOferta.className = "col-xs-12 col-sm-6 col-md-4";
              cardOferta.innerHTML = `
                  <div class="cardc mb-4">
                      <div class="cardc-details">
                      <p style="display: none;" class="text-title">${oferta.id}</p>
                          <p class="text-title">${oferta.tipoOferta}</p>
                          <p class="text-body">Cargo: ${oferta.cargo}</p>
                          <p class="text-body">Empresa: ${oferta.nombreEmpresa}</p>
                          <p class="text-body">Fecha de creación: ${oferta.fechacreacion}</p>
                      </div>
                      <button class="cardc-button" onclick="veroferta(${oferta.id})">Ver oferta</button>
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


function getOfertaByID(id) {
  const ofertaIDContainer = document.getElementById("ofertaIDContainer");
  ofertaIDContainer.innerHTML = '';
  
    fetch("/ofertas/getofertabycategory/", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ id: id })
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
          const oferta = data.oferta;
          console.log("oferta recibidos data:", oferta);
          const ofertaIDContainer = document.getElementById("ofertaIDContainer");
          console.log("Contenedor de ofertas:", ofertaIDContainer);
          let rowContainer;
          oferta.forEach((oferta, index) => {
              const cardofert = document.createElement("div");
              cardofert.className = "";
              cardofert.innerHTML = `
                  <div class="cardo mb-4">
                      <div class="cardo-details">
                          <p style="display: none;" class="text-title">id: ${oferta.id}</p>
                          <p class="text-title">Tipo Oferta: ${oferta.tipoOferta}</p>
                          <p class="text-body">Cargo: ${oferta.cargo}</p>
                          <p class="text-body">Descripción: ${oferta.descripcion}</p>
                          <p class="text-body">Empresa: ${oferta.nombreEmpresa}</p>
                          <p class="text-body">Rango Salarial: ${oferta.rangosalarial}</p>
                          <p class="text-body">Fecha de publicación: ${oferta.fechacreacion}</p>
                      </div>
                      <button class="cardo-button" onclick="enviarPostulacion(${oferta.id})">Postular</button>
                  </div>
              `;
            
                  rowContainer = document.createElement("div");
                  rowContainer.className = "row";
                  ofertaIDContainer.appendChild(rowContainer);
              
              rowContainer.appendChild(cardofert);
          });
      } else {
          console.error("Error message: ", data.message, "Error en la respuesta del servidor");
      }
  })
}

function enviarPostulacion(id){
  const idOferta = id
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger"
    },
    buttonsStyling: false
  });
  swalWithBootstrapButtons.fire({
    title: "¿Desea postular a esta oferta?",
    text: "Asegurate que todos tus datos esten actualizados",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Postular",
    cancelButtonText: "Cancelar",
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      postular(idOferta)
      swalWithBootstrapButtons.fire({
        title: "Postulación enviada",
        text: "Tu perfil ha sido enviado",
        icon: "success"
      });
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire({
        title: "Postulación cancelada",
        text: "Tu perfil no ha sido enviado",
        icon: "error"
      });
    }
  });
}

function postular(idOferta){
  fetch("postulaciones/insertData/", {
            method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ idOferta: idOferta })
  })
      .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then((data) => {
      if(!data.success){
        alert("Postulación enviada")

      }
    }).catch((error) => {
      console.log("Error en la solicitud Fetch: ", error);
    })

}

//LIKES
document.addEventListener('DOMContentLoaded', function() {
  // Like action
  document.querySelectorAll('.like-action').forEach(function(element) {
      element.addEventListener('click', function() {
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

document.addEventListener('DOMContentLoaded', function() {
  // Report action
  document.querySelectorAll('.report-action').forEach(function(element) {
      element.addEventListener('click', function() {
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

// ELIMINAR PUBLICACION
document.addEventListener('DOMContentLoaded', function() {
  // Delete action
  document.querySelectorAll('.delete-action').forEach(function(element) {
    element.addEventListener('click', function() {
      const publicacionId = this.getAttribute('data-id');

      Swal.fire({
        title: "¿Estás seguro?",
        text: "¡No podrás revertir esto!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sí, eliminarlo!",
        cancelButtonText: "Cancelar"
      }).then((result) => {
        if (result.isConfirmed) {
          fetch('/usuarios/eliminarPublicacion', {
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
              // Acciones adicionales después de eliminar la publicación (opcional)
              const publicacionContainer = element.closest('.tweet-card');
              publicacionContainer.style.display = 'none'; // Ocultar la publicación eliminada
              Swal.fire("Eliminada!", "La publicación ha sido eliminada.", "success");
            } else {
              Swal.fire("Error", "Hubo un problema al eliminar la publicación:" + data.message, "error");
            }
          })
          .catch(error => {
            console.error('Error al procesar la solicitud:', error);
            Swal.fire("Error", "Hubo un problema al procesar la solicitud.", "error");
          });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire("Cancelado", "La publicación no ha sido eliminada", "info");
        }
      });
    });
  });
});




function error(){
  Swal.fire({
    position: "top-end",
    icon: "error",
    title: "Hubo un problema al ejecutar esta acción.",
    showConfirmButton: false,
    timer: 1500
  });
}

// COMENTARIOS



document.addEventListener('DOMContentLoaded', function() {
  // Función para inicializar eventos para comentarios
  function initCommentEvents(modalId, commentsContainerId, commentFormId, newCommentId, publicacionIdInputId) {
      const modal = document.getElementById(modalId);
      const span = modal.getElementsByClassName("close")[0];
      const commentsContainer = document.getElementById(commentsContainerId);
      const commentForm = document.getElementById(commentFormId);
      const publicacionIdInput = document.getElementById(publicacionIdInputId);

      document.querySelectorAll('.comment-action').forEach(function(element) {
          element.addEventListener('click', function() {
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
      commentForm.addEventListener('submit', function(event) {
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
      span.onclick = function() {
          modal.style.display = "none";
      }

      window.onclick = function(event) {
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

