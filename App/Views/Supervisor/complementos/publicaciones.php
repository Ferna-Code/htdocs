<body>
    <h1>Publicaciones</h1>
    <div class="body-panel">
        <?php include 'tablas/tablaPublicacion.php' ?>
    </div>
    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllPublicacion', 'checkboxPublicacion');
    </script>
</body>