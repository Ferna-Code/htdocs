<body>
    <h1>Palabras Prohibidas</h1>
    <div class="body-panel">
        <?php include 'tablas/tablaPalabra.php' ?>
    </div>
    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllPalabra', 'checkboxPalabra');
    </script>
</body>