<section style="margin: 10px;">
    <div class="">
        <form action="">
            <a href="/importarExcel" class="btn-supervisor marginBtn btnAgregar">Agregar usuario</a>
           
            <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllUsuario" name="select-all"></th><!--CHECKBOX PRINCIPAL-->
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

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <table>
                        <tr>
                            <td><label for="nuevoRut">RUT: </label></td>
                            <td><input type="text" name="nuevoRut" id="NuevoRut"></td>
                        </tr>
                        <tr>
                            <td><label for="nuevoNombre">Nombre completo: </label></td>
                            <td><input type="text" name="nuevoNombre" id="nuevoNombre"></td>
                        </tr>
                        <tr>
                            <td><label for="nuevaEdad">Edad: </label></td>
                            <td><input type="date" name="nuevaEdad" id="nuevaEdad"></td>
                        </tr>
                        <tr>
                            <td><label for="nuevoCorreo">Correo electronico: </label></td>
                            <td><input type="mail" name="nuevoCorreo" id="NuevoCorreo"></td>
                        </tr>
                        <tr>
                            <td> <label for="nuevaCategoria">Perfil: </label></td>
                            <td>
                                <select name="" id="">
                                    <option value="Administrador">Administrador</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Usuario">Usuario</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn-supervisor marginBtn">Agregar</button>
            </div>
        </div>
    </div>
</div>


<!-- composer require phpoffice/phpspreadsheet -->