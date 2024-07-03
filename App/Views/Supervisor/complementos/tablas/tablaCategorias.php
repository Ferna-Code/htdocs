<section style="margin: 10px;">
    <div class="">
        <div class="containerFiltro">
            <input style="margin-bottom: 15px" type="text" id="filtroCategoria" placeholder="Buscar por Categorias">
        </div>
        <form action="">

            <button type="button" class="btn-supervisor marginBtn btnAgregar" id="nuevaCategoria" onclick="agregarCategoria()">
                Nueva categoria
            </button>

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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="../../../../Public/js/supervisor.js"></script> -->