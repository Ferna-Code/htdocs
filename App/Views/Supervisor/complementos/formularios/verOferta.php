<head>
    <link rel="stylesheet" href="../../../../Public/css/ofertas.css">
</head>

<div class="contenedor-principal">
    <div class="banner">
        <img src="../../../../Public/img/bannerempleos.png" alt="">
    </div>

    <div class="">
        <div class="formulario-cursos">

            <form id="ForUpdateOferta" action="" class="form" method="POST">
                <div class="columna ">
                    <input type="hidden" id="verIdOferta" name="verIdUser">
                </div>

                <div class="columna ">
                    <label for="cargoOferta">Cargo: </label>
                    <input type="text" class="inputCurso" id="cargoOferta" name="cargoOferta" >
                </div>

                <div class="columna ">
                    <label for="tipoOferta">Tipo de oferta</label>
                    <input type="text" class="inputCurso" id="tipoOferta" name="tipoOferta">
                </div>

                <div class="columna ">
                    <label for="empresaOferta">Empresa: </label>
                    <input type="text" class="inputCurso" id="empresaOferta" name="empresaOferta" >
                </div>

                <div class="columna ">
                    <label for="rutEmpresa">RUT Empresa:</label>
                    <input type="text" class="inputCurso" id="rutEmpresa" name="rutEmpresa" >
                </div>

                <div class="columna ">
                    <label for="categoriaOferta">Categoria:</label>
                    <input type="text" class="inputCurso" id="categoriaOferta" name="categoriaOferta" >
                </div>
               
                <div class="columna ">
                    <label for="correoOferta">Correo Electronico:</label>
                    <input type="text" class="inputCurso" id="correoOferta" name="correoOferta">
                </div>

                <div class="columna ">
                    <label for="salarioOferta">Salario:</label>
                    <input type="text" class="inputCurso" id="salarioOferta" name="salarioOferta"> 
               </div>

               <div class="columna ">
                    <label for="creacionOferta">Fecha creación:</label>
                    <input type="text" class="inputCurso" id="creacionOferta" name="creacionOferta"> 
               </div>

               <div class="columna ">
                    <label for="descripcionOferta">Descripción:</label>
                    <textarea class="textareaCurso" rows="5" cols="10" id="descripcionOferta" name="descripcionOferta"></textarea> 
               </div>

                <button type="submit" id="updateOferta" class="btn-supervisor marginBtn">Actualizar</button>

            </form>


        </div>

    </div>


</div>
</div>