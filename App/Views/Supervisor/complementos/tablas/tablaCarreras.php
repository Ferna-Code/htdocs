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
            <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
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
                <tbody>
                    <!--Educación y Bienestar-->
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi13()">Psicodefagogía</a></td>
                        <td>Educación y Bienestar</td>
                        <td>03-11-2005</td>
                        <td>25-03-2022</td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi13()">Técnico en Servicio Social</a></td>
                        <td>Educación y Bienestar</td>
                        <td>05-09-2017</td>
                        <td></td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi13()">Laboratorista Dental</a></td>
                        <td>Educación y Bienestar</td>
                        <td>22-01-2006</td>
                        <td></td>
                    </tr>
                    
                    <!--Tecnología y productividad-->
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi13()">Analista Programador</a></td>
                        <td>Tecnología y productividad</td>
                        <td>12-04-2024</td>
                        <td></td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi13()">Técnico en Conectividad y Redes</a></td>
                        <td>Tecnología y productividad</td>
                        <td>13-05-2000</td>
                        <td></td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi13()">Técnico en Prevención de Riesgos</a></td>
                        <td>Tecnología y productividad</td>
                        <td>14-06-2020</td>
                        <td></td>
                    </tr>

                    <!--Negocios e Innovación-->
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi13()">Técnico en Gestión de Empresas</a></td>
                        <td>Negocios e Innovación</td>
                        <td>22-03-2021</td>
                        <td></td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi13()">Contador Auditor</a></td>
                        <td>Negocios e Innovación</td>
                        <td>24-06-2008</td>
                        <td></td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" class="checkboxCarrera" name="checkId"></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi13()">Ingeniería en Marketing</a></td>
                        <td>Negocios e Innovación</td>
                        <td>27-10-2022</td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </form>
    </div>
</section>