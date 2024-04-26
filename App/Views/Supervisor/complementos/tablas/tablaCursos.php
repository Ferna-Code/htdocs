<section style="margin: 10px;">
    <div class="table-responsive">
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
        <table id="tableUsers" class="tabla table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre curso</th>
                    <th>Centro de capacitación</th>
                    <th>Fecha publicación</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td>1</td>
                    <td><a href="#" class="linkTabla" onclick="controlVerCurso()">Diseño Web Profesional El Curso Completo, Práctico y desde 0</a></td>
                    <td>Fundación Cristo Vive</td>
                    <td>12 / 06 / 2024</td>
                    
                    <td class="tr-table">
                        <a href="editar.php" class="btn-supervisor color-a">Modificar</a>
                    </td>
                    <td class="tr-table">
                        <a href="borrar.php" class="btn-supervisor color-b">Eliminar</a>
                    </td>
                   
                </tr>
                <tr class="table table-striped">
                <td>1</td>
                    <td><a href="" class="linkTabla" onclick="controlVerCurso()">Diseño Web Profesional El Curso Completo, Práctico y desde 0</a></td>
                    <td>Fundación Cristo Vive</td>
                    <td>12 / 06 / 2024</td>
                    
                    <td class="tr-table">
                        <a href="editar.php" class="btn-supervisor color-a">Modificar</a>
                    </td>
                    <td class="tr-table">
                        <a href="borrar.php" class="btn-supervisor color-b">Eliminar</a>
                    </td>
                    
                </tr>
                <tr class="table table-striped">
                <td>1</td>
                    <td><a href="" class="linkTabla" onclick="controlVerCurso()">Diseño Web Profesional El Curso Completo, Práctico y desde 0</a></td>
                    <td>Fundación Cristo Vive</td>
                    <td>12 / 06 / 2024</td>
                    
                    <td class="tr-table">
                        <a href="editar.php" class="btn-supervisor color-a">Modificar</a>
                    </td>
                    <td class="tr-table">
                        <a href="borrar.php" class="btn-supervisor color-b">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>