<body>
    <h1>Registro de ofertas</h1>
    <div class="body-panel">
        <?php include 'tablas/tablaOfertas.php' ?>
    </div>
    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllOferta', 'checkboxOferta');
    </script>
</body>