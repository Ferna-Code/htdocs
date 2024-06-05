<section style="margin: 10px;">
    <div class="">
        <form method="POST" action="#">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">

                <input type="text" class="ofertaFiltro" placeholder="Palabra clave">
                <select class="categoriaFiltro">
                    <option value="Práctica">Educación y Bienestar</option>
                    <option value="Práctica">Tecnología y productividad</option>
                    <option value="Práctica">Negocios e Innovación</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar">
            </div>
        </form>


        <a href="#" onclick="controlVisi11()" class="btn-supervisor marginBtn btnAgregar">Agregar curso</a>
        <a href="#" class="btn-supervisor marginBtn">Editar</a>
        <button type="button" id="deleteSelectedCurso" class="btn-supervisor marginBtn">Eliminar</button>

        <table id="tableUsers" class="tabla table">
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllCurso" name="select-all"></th><!--CHECKBOX PRINCIPAL-->
                    <th class="widthName">Nombre curso</th>
                    <th>Centro de capacitación</th>
                    <th>Fecha publicación</th>

                </tr>
            </thead>
            <tbody id="tbodyCurso">
               
            </tbody>
        </table>

    </div>
</section>