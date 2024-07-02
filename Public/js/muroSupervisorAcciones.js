

//------------MODAL--------------
function showModal(content) {
    getPublicacionById(content);
    const modal = document.getElementById("publicacionModal");
    const modalContent = document.getElementById("modalPublic");
    modalContent.innerText = content;
    modal.style.display = "block";
  
    // Para cerrar el modal cuando se hace clic en el botón de cerrar
    const closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.onclick = function () {
      modal.style.display = "none";
    }
  
    // Para cerrar el modal cuando se hace clic fuera de él
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  }
  
  //Comentarios
  
  document.addEventListener('DOMContentLoaded', function () {
    // Función para inicializar eventos para comentarios
    function initCommentEvents(modalId, commentsContainerId, commentFormId, newCommentId, publicacionIdInputId) {
      const modal = document.getElementById(modalId);
      const span = modal.getElementsByClassName("close")[0];
      const commentsContainer = document.getElementById(commentsContainerId);
      const commentForm = document.getElementById(commentFormId);
      const publicacionIdInput = document.getElementById(publicacionIdInputId);
  
      document.querySelectorAll('.comment-action').forEach(function (element) {
        element.addEventListener('click', function () {
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
      commentForm.addEventListener('submit', function (event) {
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
      span.onclick = function () {
        modal.style.display = "none";
      }
  
      window.onclick = function (event) {
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
  
  //LIKES
  document.addEventListener('DOMContentLoaded', function () {
    // Like action
    document.querySelectorAll('.like-action').forEach(function (element) {
      element.addEventListener('click', function () {
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
  
  document.addEventListener('DOMContentLoaded', function () {
    // Report action
    document.querySelectorAll('.report-action').forEach(function (element) {
      element.addEventListener('click', function () {
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
  console.log('delete-action')
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