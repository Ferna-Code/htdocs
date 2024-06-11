<head>
    <link rel="stylesheet" href="../../../../Public/css/ofertas.css">
</head>

<div class="contenedor-principal">
  

    <div class="">
        <div class="formulario-cursos">

            <form id="ForUpdateCurso" action="" class="form" method="POST">
                <div class="columna ">
                    <input type="hidden" id="verIdCurso" name="verIdCurso">
                </div>

                <div class="columna ">
                    <label for="verNombreCurso">Nombre del curso</label>
                    <input type="text" class="inputCurso" id="verNombreCurso" name="verNombreCurso">
                </div>
                <div class="columna ">
                <label for="verCategoriaCurso">Categoria curso</label>
                    <input type="text" class="inputCurso" id="verCategoriaCurso" name="verCategoriaCurso">
                </div>
                <div class="columna ">
                <label for="verCodigoCurso">Código curso</label>
                    <input type="text" class="inputCurso" id="verCodigoCurso" name="verCodigoCurso" readonly>
                </div>
                <div class="columna ">
                <label for="verCentroCurso">Centro de capacitación</label>
                    <input type="text" class="inputCurso" id="verCentroCurso" name="verCentroCurso">
                </div>
                <div class="columna ">
                <label for="verFechaCurso">Fecha registro</label>
                    <input type="text" class="inputCurso" id="verFechaCurso" name="verFechaCurso" readonly>
                </div>
                <div class="columna ">
                <label for="verEliminacionCurso">Fecha eliminación</label>
                    <input type="text" class="inputCurso" id="verEliminacionCurso" name="verEliminacionCurso">
                </div>
                <div class="columna ">
                <label for="verDescripcionCurso">Descripción</label>
                    <textarea class="textareaCurso" rows="5" cols="10" id="verDescripcionCurso" name="verDescripcionCurso"></textarea>
                </div>

                <button type="submit" id="updateCurso" class="btn-supervisor marginBtn">Actualizar</button>

            </form>


        </div>

    </div>


</div>
</div>