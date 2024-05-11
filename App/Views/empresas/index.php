<?php
    if(isset($_POST['crearRegistro']) && $_POST['crearRegistro'] == 'crearRegistro'){
        echo"<script>alert('Oferta registrada')</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Public/css/formempresas.css">
    <title>TalentoLeones</title>
</head>

<body>
    <div class="container">
        <div class="banner">
            <img src="../../../../Public/img/bannerempleos.png" alt="">
        </div>
        <div class="formulario">
            <h1>Encuentra Talentos para tu empresa</h1><br>
            <form method="POST" class="form">
                <div class="formulario-empresas">
                <div class="columna">
                        <label for="tipo-trabajo">Tipo de Oferta:</label>
                        <select id="tipo-trabajo" name="tipo-trabajo" required>
                            <option value="practica">Práctica</option>
                            <option value="part-laboral">Part Time</option>
                            <option value="full-laboral">Full Time</option>
                        </select>
                    </div>
                    <div class="columna">
                        <label for="categoria-trabajo">Área Laboral:</label>
                        <select id="categoria-trabajo" name="categoria-trabajo" required>
                            <option value="educacion">Educación y bienestar</option>
                            <option value="informatica">Tecnología e informática</option>
                            <option value="negocios">Negocios, gestión e innovación</option>
                        </select>
                    </div>
                    <div class="columna">
                        <label for="cargo">Cargo:</label>
                        <input type="text" id="cargo" name="cargo" required>
                    </div>
                    <div class="columna">
                        <label for="nombre-empresa">Nombre Empresa:</label>
                        <input type="text" id="nombre-empresa" name="nombre-empresa" required>
                    </div>
                    <div class="columna">
                        <label for="rut-empresa">RUT Empresa: (Esta información no será publicada)</label>
                        <input type="text" id="rut-empresa" name="rut-empresa" placeholder="RUT de la empresa" required>
                    </div>
                    <div class="columna">
                        <label for="email">Correo Contacto</label>
                        <input type="text" id="email" name="email" placeholder="email@gmail.com" required>
                    </div>
                    <div class="columna">
                        <label for="descripcion-cargo">Descripción del Cargo:</label>
                        <textarea id="descripcion-cargo" name="descripcion-cargo" rows="4" required></textarea>
                    </div>
                    <div class="columna">
                        <label for="rango-salarial">Rango Salarial:</label>
                        <input type="number" id="rango-salarial" name="rango-salarial" required>
                    </div>
                </div>
                <input type="reset" class="btn-guardar btnGuardar" name="resetForm" value="Borrar formulario" >
                <button type="submit" class="btn-guardar btnGeneral" name="crearRegistro">Enviar Oferta</button>
          
                
            </form>
           
        </div>
    </div>
    <script>
  
</script>

</body>

</html>
