<section style="margin: 10px;">
    <div class="table-responsive">
    <form method="POST" action="#">
            <div class="containerFiltro">
            <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
            <input type="text" class="ofertaFiltro" name="idFiltro" placeholder="Filtrar por ID">
            <input type="submit" class="btnFiltro" value="Filtrar">
            </div>
        </form>
        <table id="tableUsers" class="tabla table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>RUT Usuario</th>
                    <th>ID Comentario</th>
                    <th>ID Publicación</th>
                    <th>Fecha Creación</th>
                    <th>Activo</th>
                    <th>Fecha Eliminación</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>1</td>
                    <td>17426433-5</td>
                    <td>2</td>
                    <td>6</td>
                    <td>12-12-2023</td>
                    <td>1</td>
                    <td>12-27-2024</td>
                    <td class="tr-table">
                        <a href="editar.php" class="btn-supervisor color-a">Modificar</a>
                    </td>
                    <td class="tr-table">
                        <a href="borrar.php" class="btn-supervisor color-b">Eliminar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>1</td>
                    <td>17426433-5</td>
                    <td>2</td>
                    <td>6</td>
                    <td>12-12-2023</td>
                    <td>1</td>
                    <td>12-27-2024</td>
                    <td class="tr-table">
                        <a href="editar.php" class="btn-supervisor color-a">Modificar</a>
                    </td>
                    <td class="tr-table">
                        <a href="borrar.php" class="btn-supervisor color-b">Eliminar</a>
                    </td>
                </tr>
                <tr class="table table-striped">
                    <td>1</td>
                    <td>17426433-5</td>
                    <td>2</td>
                    <td>6</td>
                    <td>12-12-2023</td>
                    <td>1</td>
                    <td>12-27-2024</td>
                    <td class="tr-table">
                        <a href="editar.php" class="btn-supervisor color-a">Modificar</a>
                    </td>
                    <td class="tr-table">
                        <a href="borrar.php" class="btn-supervisor color-b">Eliminar</a>
                    </td>
            </tbody>
        </table>
    </div>
</section>