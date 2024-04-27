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

        <form action="#">
            <a href="#" onclick="controlVisi11()" class="btn-supervisor marginBtn btnAgregar">Agregar curso</a>
            <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr>
                        <th  class="widthCheck"><input type="checkbox" id="checkAllCurso" name="select-all"></th><!--CHECKBOX PRINCIPAL-->
                        <th class="widthName">Nombre curso</th>
                        <th>Centro de capacitación</th>
                        <th>Fecha publicación</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><input type="checkbox" id="tableUsersCurso" class="checkbox-item" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi12()">Diseño Web Profesional El Curso Completo, Práctico y desde 0</a></td>
                        <td>Fundación Cristo Vive</td>
                        <td>12 / 06 / 2024</td>
                    </tr>
                    <tr class="">
                        <td><input type="checkbox" id="tableUsersCurso" class="checkbox-item" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi12()">Diseño Web Profesional El Curso Completo, Práctico y desde 0</a></td>
                        <td>Fundación Cristo Vive</td>
                        <td>12 / 06 / 2024</td>
                    </tr>
                    <tr class="">
                        <td><input type="checkbox" id="tableUsersCurso" class="checkbox-item" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi12()">Diseño Web Profesional El Curso Completo, Práctico y desde 0</a></td>
                        <td>Fundación Cristo Vive</td>
                        <td>12 / 06 / 2024</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</section>