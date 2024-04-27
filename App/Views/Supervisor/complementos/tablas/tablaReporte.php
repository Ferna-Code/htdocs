<section style="margin: 10px;">
    <div class="table-responsive">

        <form method="POST" action="#">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <input type="text" class="ofertaFiltro" name="idFiltro" placeholder="Filtrar por ID">
                <input type="submit" class="btnFiltro" value="Filtrar">
            </div>
        </form>

        <form action="#">
           
            <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr><!--CHECK PRINCIPAL-->
                        <th class="widthCheck"><input type="checkbox" id="checkAllReportes" name="select-all"></th>
                        <th>RUT Usuario</th>
                        <th>ID Comentario</th>
                        <th>ID Publicación</th>
                        <th>Fecha Creación</th>

                        <th>Fecha Eliminación</th>
                        <th>Ver Publicación/Comentario</th>


                    </tr>
                </thead>
                <tbody>
                    <tr class="table table-striped">
                        <td><input type="checkbox" id="checkboxReporte" class="checkboxReporte" name="checkId"></td>
                        <td>17426433-5</td>
                        <td>2</td>
                        <td>6</td>
                        <td>12-12-2023</td>

                        <td>12-27-2024</td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi15()">Ver reporte</a></td>

                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" id="checkboxReporte" class="checkboxReporte" name="checkId"></td>
                        <td>17426433-5</td>
                        <td>2</td>
                        <td>6</td>
                        <td>12-12-2023</td>
                        <td></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi15()">Ver reporte</a></td>

                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" id="checkboxReporte" class="checkboxReporte" name="checkId"></td>
                        <td>17426433-5</td>
                        <td>2</td>
                        <td>6</td>
                        <td>12-12-2023</td>
                        <td>12-27-2024</td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi15()">Ver reporte</a></td>
                    </tr>

                </tbody>
            </table>
        </form>

    </div>
</section>