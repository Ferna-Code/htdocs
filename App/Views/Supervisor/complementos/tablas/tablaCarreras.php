<section style="margin: 10px;">
    <div class="">
        <form method="POST"  action="#">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <select class="categoriaFiltro">
                    <option value="Práctica">Educación y Bienestar</option>
                    <option value="Práctica">Tecnología y productividad</option>
                    <option value="Práctica">Negocios e Innovación</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar">
            </div>
        </form>

        <form action="" class="paddingCont">
        <button type="button" id="deleteSelected1" class="btn-supervisor marginBtn">Eliminar</button>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllCarrera" name="select-all"></th>
                        <th>Carrera</th>
                        <th>Categoria</th>
                        <th>Fecha creación</th>
                        <th>Fecha eliminación</th>
                    </tr>
                </thead>
                <tbody id="tbodyCarrera">
                   
                </tbody>
            </table>
        </form>
    </div>
</section>