<section style="margin: 10px;">
    <div class="">
        <form action="">
            <a href="/importarExcel" class="btn-supervisor marginBtn btnAgregar">Agregar usuario</a>
           
            <button type="button" id="deleteSelectedUsuarios" class="btn-supervisor marginBtn">Eliminar</button>
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
                       

                    </tr>
                </thead>
                <tbody id="tbodyUsuario">
                    
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