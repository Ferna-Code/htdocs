
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/svg+xml" href="~/favicon.ico" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Ingresar Comentario</title>
</head>

<body>
    <form method="POST" class="form" style="padding: 100px 300px 0 300px; width: 100%;">
        <h2 style="text-align: center;">Ingresar Comentario</h2><br>
        <div class="row">
            <div class="col">
                <label for="rut" style="text-align: center;">Rut Usuario:</label>
                <input type="text" class="form-control" name="NombreCarrera" placeholder="Ingrese el Rut" Required><br>
                <label for="rut" style="text-align: center;">Comentario:</label>
                <input type="text" class="form-control" name="NombreCarrera" placeholder="Este es un comentario" Required><br>
                <label  style="text-align: center;">N° de Reportes:</label><br>
                <select class="form-select" style="width: 150px" name="IDPerfil" required>
                <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select> <br>
                <input type="hidden" name="sw" value="Crear"><br>
                <input type="submit" class="btn btn-warning w-100 center-block" name="CrearCarrera" value="Crear">
                          
            </div>
    </form>


    <script src="https://kit.fontawesome.com/4652dbea50.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>