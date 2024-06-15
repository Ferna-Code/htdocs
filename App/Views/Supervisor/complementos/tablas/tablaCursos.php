<section style="margin: 10px;">
    <div class="">
        <form method="POST" action="#">
            <div class="containerFiltro">
            <input style="margin-bottom: 15px" type="text" id="filtroCurso" placeholder="Buscar por Curso">

            </div>
        </form>


        <a href="#" onclick="controlVisi11()" class="btn-supervisor marginBtn btnAgregar">Agregar curso</a>
      
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