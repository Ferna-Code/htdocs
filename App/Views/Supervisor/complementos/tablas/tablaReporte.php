<section style="margin: 10px;">
    <div class="table-responsive">

        <form method="POST" action="#">
            <div class="containerFiltro">
            <input style="margin-bottom: 15px" type="text" id="filtroReporte" placeholder="Buscar por carrera">

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