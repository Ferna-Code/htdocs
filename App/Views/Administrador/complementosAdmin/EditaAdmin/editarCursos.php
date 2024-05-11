
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

    <title>Editar Curso</title>
</head>

<body>
    <form method="POST" class="form" style="padding: 100px 300px 0 300px; width: 100%;">
        <h2 style="text-align: center;">Editar Curso</h2><br>
      
            
        <label  style="text-align: center;">Selecione Categoría:</label>
        <select class="form-select">
                    <option value="Práctica">Categoría 1</option>
                    <option value="Práctica">Categoría 2</option>
                    <option value="Práctica">Categoría 3</option>
                </select></br>
            <label for="rut" style="text-align: center;">Curso:</label>
            <input type="text" class="form-control" name="NombreCurso" placeholder="Nombre Curso" Required><br>
            <label for="rut" style="text-align: center;">Descripción:</label>
            <input type="textArea" class="form-control" name="NombreCurso" placeholder="Descripción del Curso" Required><br>
            <div class="row">
            <div class="col">    
            <label  style="text-align: center;">Carrera:</label><br>
            <select class="form-select" name="IDPerfil" required>
                <option>una Categoria</option>
                <option>Otra Categoria</option>
            </select> <br>
                
            </div>
            <div class="col">
                <label  style="text-align: center;">Activo:</label><br>
                <select class="form-select"  name="IDPerfil" required>
                    <option>Si</option>
                    <option>No</option>
                </select> 
            </div>
                <br>
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