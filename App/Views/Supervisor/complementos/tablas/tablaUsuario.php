<section style="margin: 10px;">
    <div class="">
        <form action="#">
            <a href="#" onclick="" class="btn-supervisor marginBtn btnAgregar">Agregar Usuario</a>
            <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr>
                        <th  class="widthCheck"><input type="checkbox" id="checkAllUsuario" name="select-all"></th><!--CHECKBOX PRINCIPAL-->
                        <th>RUT</th>
                        <th>Nombre</th>
                        <th>Fecha nacimiento</th>
                        <th>Perfil</th>
                        <th>Correo electronico</th>
                        <th>Fecha creación</th>
                        <th>Fecha eliminación</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxUsuario" name="checkId"></td>
                        <td>11111111-1</td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi17()">Luis Yañez</a></td>
                        <td>01-01-1901</td>
                        <td>Administrador</td>
                        <td>luis.yanez@docente.ipleones.cl</td>
                        <td>01-04-2024</td>
                        <td></td>
                    </tr>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxUsuario" name="checkId"></td>
                        <td>33333333-3</td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi17()">Ivan Rojas</a></td>
                        <td>03-03-1903</td>
                        <td>Estudiante</td>
                        <td>ivan.rojas@alumnos.ipleones.cl</td>
                        <td>01-04-2024</td>
                        <td></td>
                    </tr>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxUsuario" name="checkId"></td>
                        <td>22222222-2</td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi17()">Ramón Vasquez</a></td>
                        <td>02-02-1902</td>
                        <td>Supervisor</td>
                        <td>ramon.vasquez@docente.ipleones.cl</td>
                        <td>01-04-2022</td>
                        <td></td>
                    </tr>
                    
                </tbody>
            </table>
        </form>
    </div>
</section>