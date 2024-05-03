<section style="margin: 10px;">
    <div class="">
        <form action="#">
            <button type="button" class="btn-supervisor marginBtn btnAgregar" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                Nuevo perfil
            </button>
            <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllPerfil" name="select-all"></th><!--CHECKBOX PRINCIPAL-->
                        <th class="widthName">Descripción</th>
                        <th>Fecha creación</th>
                        <th>Fecha eliminación</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxPerfil" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="">Administrador</a></td>
                        <td>01-04-2024</td>
                        <td></td>
                    </tr>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxPerfil" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="">Supervisor</a></td>
                        <td>01-04-2024</td>
                        <td></td>
                    </tr>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxPerfil" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="">Usuario</a></td>
                        <td>01-04-2024</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </form>
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
                <form action="">
                    <label for="nuevaCategoria">Nuevo perfil: </label>
                    <input type="text" name="nuevaCategoria" id="nuevaCategoria">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn-supervisor marginBtn">Agregar</button>
            </div>
        </div>
    </div>
</div>