<section style="margin: 10px;">
    <div class="table-responsive">

        <form method="POST" action="#">
            <div class="containerFiltro">
            <input style="margin-bottom: 15px" type="text" id="filtroPublicaciones" placeholder="Buscar por publicación">

        </form>

        <form action="#">
           
        <button type="button" id="deleteSelectedPublicacion" class="btn-supervisor marginBtn">Eliminar</button>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr><!--CHECK PRINCIPAL-->
                        <th  class="widthCheck"><input type="checkbox" id="checkAllPublicacion" name="select-all"></th>
                      
                        <th>RUT Usuario</th>
                        <th>Publicación</th>
                        <th>Cantidad de reportes</th>
                        <th>Fecha Creación</th>
                        
                    </tr>
                </thead>
                <tbody id="tbodyPublicacion">
                    
                </tbody>
            </table>
        </form>

    </div>
</section>

<!-- Modal -->
<div id="publicacionModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Información de la Publicación</h2>
    <p id="modalPublic"></p>
  </div>
</div>