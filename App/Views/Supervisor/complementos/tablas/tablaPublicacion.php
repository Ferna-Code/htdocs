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
                        <th  class="widthCheck"><input type="checkbox" id="checkAllPublicacion" name="select-all"></th>
                        <th>ID Publicación</th>
                        <th>RUT Usuario</th>
                        <th>Cantidad de reportes</th>
                        <th>Fecha Creación</th>
                        <th>Fecha Eliminación</th>
                        <th>Ver</th>


                    </tr>
                </thead>
                <tbody id="tbodyPublicacion">
                    
                </tbody>
            </table>
        </form>

    </div>
</section>