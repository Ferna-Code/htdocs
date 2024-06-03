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
           
        <button type="button" id="deleteSelectedReporte" class="btn-supervisor marginBtn">Eliminar</button>
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
                <tbody id="tbodyReporte">
                    
                </tbody>
            </table>
        </form>

    </div>
</section>