function initializeCheckboxMaster(checkboxId, checkboxClass) {
    // Obtener el checkbox maestro (el que selecciona/deselecciona todos)
    const checkAllButton = document.getElementById(checkboxId);
    // Obtener todos los checkboxes que serán controlados por el checkbox maestro
    const checkboxes = document.querySelectorAll('.' + checkboxClass);

    // Verificar si el checkbox maestro existe
    if (checkAllButton) {
        // Añadir un evento de clic al checkbox maestro
        checkAllButton.addEventListener('click', function() {
            // Iterar sobre cada checkbox controlado
            checkboxes.forEach(function(checkbox) {
                // Asignar el estado del checkbox maestro a cada checkbox controlado
                checkbox.checked = checkAllButton.checked;
            });
        });
    } else {
        console.error('Checkbox master not found.');
    }
}
