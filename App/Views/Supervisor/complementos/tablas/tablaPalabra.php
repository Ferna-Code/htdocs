<section style="margin: 10px;">
    <div class="">
        <form action="#">
            <button type="button" class="btn-supervisor marginBtn btnAgregar" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Nuevo perfil
            </button>
            <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllPalabra" name="select-all"></th><!--CHECKBOX PRINCIPAL-->
                        <th>Palabra</th>
                        <th>Fecha creación</th>
                        <th>Fecha eliminación</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxPalabra" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="">system</a></td>
                        <td>01-04-2024</td>
                        <td></td>
                    </tr>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxPalabra" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="">mysql_query</a></td>
                        <td>30-03-2023</td>
                        <td></td>
                    </tr>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxPalabra" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="">$_SERVER</a></td>
                        <td>12-02-2022</td>
                        <td></td>
                    </tr>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxPalabra" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="">$_COOKIE</a></td>
                        <td>16-01-2021</td>
                        <td></td>
                    </tr>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxPalabra" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="">passthru</a></td>
                        <td>01-07-2012</td>
                        <td></td>
                    </tr>
                    <tr class="">
                        <td><input type="checkbox" id="checkboxPerfil" class="checkboxPalabra" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="">eval</a></td>
                        <td>09-07-2009</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nueva palabra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="nuevaCategoria">Palabra: </label>
                    <input type="text" name="nuevaPalabra" id="nuevaCategoria">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn-supervisor marginBtn">Agregar</button>
            </div>
        </div>
    </div>
</div>