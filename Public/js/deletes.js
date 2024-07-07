
document.getElementById('deleteSelectedPalabra').addEventListener('click', function () {
    console.log('Delete Palabra');
    const selectedIds = [];
    document.querySelectorAll('.checkboxPalabra:checked').forEach(checkbox => {
      selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
    });
  
    if (selectedIds.length > 0) {
      confirmarDelete(selectedIds).then(confirmar => {
        if (confirmar) {
          deletePalabra(selectedIds);
        }
      });
    } else {
      notData();
    }
  });
  
  function deletePalabra(ids) {
  
    fetch("/supervisor/deletePalabra", {
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
          confirmarEliminado();
          getPalabra();
        } else {
          errorEliminar();
        }
      })
      .catch((error) => {
        console.error("Error en la solicitud Fetch: ", error);
        alert("Error en la solicitud: " + error.message);
      });
  
  }


  document.getElementById('deleteSelectedUsuarios').addEventListener('click', function () {
    const selectedIds = [];
    document.querySelectorAll('.checkboxUsuarios:checked').forEach(checkbox => {
      selectedIds.push(checkbox.closest('tr').children[1].textContent.trim());
    });
  
    if (selectedIds.length > 0) {
      confirmarDelete(selectedIds).then(confirmar => {
        if (confirmar) {
          deleteUsuario(selectedIds);
        }
      });
    } else {
      notData();
    }
  });
  
  function deleteUsuario(ids) {
    const excludedRuts = ['11111111-1', '22222222-2', '33333333-3'];
    console.log(ids);
    // Verificar si alguno de los ids está en la lista de RUTs que no se pueden eliminar
    const forbiddenIds = ids.filter(id => excludedRuts.includes(id));
  
    if (forbiddenIds.length > 0) {
      cannotDeleted();
      return;
    }
  
    fetch("/supervisor/deleteUsuario", {
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
          confirmarEliminado();
          getUsuario();
        } else {
          errorEliminar();
        }
      })
      .catch((error) => {
        console.error("Error en la solicitud Fetch: ", error);
        alert("Error en la solicitud: " + error.message);
      });
  }