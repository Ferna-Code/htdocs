<section style="margin: 10px;">
    <div class="">
        <div class="containerFiltro">
            <input style="margin-bottom: 15px" type="text" id="filtroCategoria" placeholder="Buscar por Categorias">
        </div>
        <form action="">
<!-- 
            <button type="button" class="btn-supervisor marginBtn btnAgregar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Nueva categoria
            </button> -->

            <button type="button" id="deleteSelected" class="btn-supervisor marginBtn">Eliminar</button>
            <table id="tablaCategoria" class="tabla table">
                <thead>
                    <tr class="table table-striped">
                        <th class="widthCheck"><input type="checkbox" id="checkAllCategoria" name="select-all"></th>
                        <th>Categorias</th>
                        <th>Fecha creación</th>
                        <th>Fecha eliminación</th>
                    </tr>
                </thead>
                <tbody id="tbodyCategoria">

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
                <form id="addCategoria" method="POST" action="">
                    <label for="nuevaCategoria">Nueva categoria: </label>
                    <input type="text" name="nuevaCategoria" id="nuevaCategoria">

                    <div class="modal-footer">
                        <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn-supervisor marginBtn" value="Agregar"></i>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="../../../../Public/js/supervisor.js"></script> -->