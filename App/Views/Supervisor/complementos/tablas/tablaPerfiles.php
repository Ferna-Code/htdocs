<section style="margin: 10px;">
    <div class="">

        <button type="button" class="btn-supervisor marginBtn btnAgregar" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            Nuevo perfil
        </button>
        <button type="button" id="deleteSelectedPerfil" class="btn-supervisor marginBtn">Eliminar</button>
        <table id="tableUsers" class="tabla table">
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllPerfil" name="select-all"></th><!--CHECKBOX PRINCIPAL-->
                    <th class="widthName">Descripción</th>
                    <th>Activo</th>
                    <th>Fecha creación</th>
                    <th>Fecha eliminación</th>

                </tr>
            </thead>
            <tbody id="tbodyPerfil">
               
            </tbody>
        </table>

    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="FormPerfil" action="">
                    <label for="nuevoPerfil">Nuevo perfil: </label>
                    <input type="text" name="nuevoPerfil" id="nuevoPerfil">
                    <div class="modal-footer">
                        <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn-supervisor marginBtn" value="Agregar">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>