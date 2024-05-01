function initializeCheckboxMaster(checkboxId, checkboxClass) {
    const checkAllButton = document.getElementById(checkboxId);
    const checkboxes = document.querySelectorAll('.' + checkboxClass);

    if (checkAllButton) {
        checkAllButton.addEventListener('click', function() {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = checkAllButton.checked;
            });
        });
    } else {
        console.error('Checkbox master not found.');
    }
}
