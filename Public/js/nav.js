document.addEventListener('DOMContentLoaded', function() {
    // Identifica el enlace del Panel Supervisor
    var enlacePanelSupervisor = document.querySelector('.enlace-nav-supervisor');

    // Identifica el submenú del Panel Supervisor
    var submenuPanelSupervisor = enlacePanelSupervisor.nextElementSibling;

    // Muestra el submenú cuando se pasa el mouse sobre el enlace del Panel Supervisor
    enlacePanelSupervisor.addEventListener('mouseenter', function() {
        submenuPanelSupervisor.style.display = 'block';
    });

    // Oculta el submenú cuando se retira el mouse del enlace del Panel Supervisor
    enlacePanelSupervisor.addEventListener('mouseleave', function() {
        submenuPanelSupervisor.style.display = 'none';
    });
});
