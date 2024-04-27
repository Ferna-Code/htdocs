<section style="margin: 10px;">
    <div class="">
        <form action="#">
            <a href="#" onclick="" class="btn-supervisor marginBtn btnAgregar">Agregar perfil</a>
            <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr>
                        <th  class="widthCheck"><input type="checkbox" id="checkAllPerfil" name="select-all"></th><!--CHECKBOX PRINCIPAL-->
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