<body>
    <h1>Cursos</h1>
    <div class="body-panel">
        <?php include 'tablas/tablaCarreras.php' ?>
    </div>
    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllCarrera', 'checkboxCarrera');
    </script>
</body>