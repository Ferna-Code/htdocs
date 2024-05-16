<section style="margin: 10px;">
    <div class="">
        <form action="">


            <button type="button" class="btn-supervisor marginBtn btnAgregar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Nueva categoria
            </button>

            <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr class="table table-striped">
                        <th class="widthCheck"><input type="checkbox" id="checkAllCategoria" name="select-all"></th>
                        <th>Categorias</th>
                        <th>Fecha creación</th>
                        <th>Fecha eliminación</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCategoria" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi14()">Educación y Bienestar</a></td>
                        <td>03-11-2005</td>
                        <td>25-03-2022</td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCategoria" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi14()">Tecnología y productividad</a></td>
                        <td>03-11-2005</td>
                        <td>25-03-2022</td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCategoria" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi14()">Negocios e Innovación</a></td>
                        <td>03-11-2005</td>
                        <td>25-03-2022</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nueva categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="nuevaCategoria">Nueva categoria: </label>
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