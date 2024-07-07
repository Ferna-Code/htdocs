<head>
    <link rel="stylesheet" href="../../../../Public/css/ofertas.css">
</head>

<div class="contenedor-principal">
    <div class="banner">
        <img src="../../../../Public/img/bannerempleos.png" alt="">
    </div>

    <div class="">
        <div class="formulario-cursos">

            <form id="ForUpdateUser" action="" class="form" method="POST">
                <div class="columna ">
                    <input type="hidden" id="verIdUser" name="verIdUser">
                </div>

                <div class="columna ">
                    <label for="Nombre">Nombre</label>
                    <input type="text" class="inputCurso" id="verNombreUser" name="verNombreUser" readonly>
                </div>

                <div class="columna ">
                    <label for="rutUser">RUT</label>
                    <input type="text" class="inputCurso" id="rutUser" name="rutUser" readonly>
                </div>

                <div class="columna ">
                    <label for="idUser">ID Usuario</label>
                    <input type="text" class="inputCurso" id="idUser" name="idUser" readonly>
                </div>

                <div class="columna ">
                    <label for="nacimientoUser">Fecha de nacimiento</label>
                    <input type="text" class="inputCurso" id="nacimientoUser" name="nacimientoUser">
                </div>

                <div class="columna ">
                    <label for="telefonoUser">Telefono</label>
                    <input type="text" class="inputCurso" id="telefonoUser" name="telefonoUser" >
                </div>

                <div class="columna ">
                    <label for="direccionUsers">Dirección</label>
                    <input type="text" class="inputCurso" id="direccionUsers" name="direccionUsers">
                </div>

                <div class="columna ">
                    <label for="correoUser">Descripción</label>
                    <input type="text" class="inputCurso" id="correoUser" name="correoUser">                </div>

                <button type="submit" id="updateUsuario" class="btn-supervisor marginBtn">Actualizar</button>

            </form>


        </div>

    </div>


</div>
</div>