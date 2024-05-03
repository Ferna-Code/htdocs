<section style="margin: 10px;">
    <div class="table-responsive">

        <form method="POST" action="#">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <input type="text" class="ofertaFiltro" name="idFiltro" placeholder="Filtrar por ID">
                <input type="submit" class="btnFiltro" value="Filtrar">
            </div>
        </form>

        <form action="#">
           
            <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr><!--CHECK PRINCIPAL-->
                        <th  class="widthCheck"><input type="checkbox" id="checkAllPublicacion" name="select-all"></th>
                        <th>ID Publicación</th>
                        <th>RUT Usuario</th>
                        <th>Cantidad de reportes</th>
                        <th>Fecha Creación</th>
                        <th>Fecha Eliminación</th>
                        <th>Ver</th>


                    </tr>
                </thead>
                <tbody>
                    <tr class="table table-striped">
                        <td><input type="checkbox" id="tableUsers" class="checkboxPublicacion" name="checkId"></td>
                        <td>01</td>
                        <td>55555555-5</td>
                        <td>2</td>
                        <td>12-05-1996</td>
                        <td></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi16()">Ver Publicación</a></td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" id="tableUsers" class="checkboxPublicacion" name="checkId"></td>
                        <td>02</td>
                        <td>66666666-6</td>
                        <td>3</td>
                        <td>12-12-2010</td>
                        <td>01-02-2020</td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi16()">Ver Publicación</a></td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" id="tableUsers" class="checkboxPublicacion" name="checkId"></td>
                        <td>03</td>
                        <td>77777777-7</td>
                        <td>1</td>
                        <td>12-06-1998</td>
                        <td></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi16()">Ver Publicación</a></td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" id="tableUsers" class="checkboxPublicacion" name="checkId"></td>
                        <td>04</td>
                        <td>88888888-8</td>
                        <td>2</td>
                        <td>04-05-2004</td>
                        <td>11-10-2005</td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi16()">Ver Publicación</a></td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" id="tableUsers" class="checkboxPublicacion" name="checkId"></td>
                        <td>05</td>
                        <td>99999999-9</td>
                        <td>3</td>
                        <td>12-02-1879</td>
                        <td></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi16()">Ver Publicación</a></td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" id="tableUsers" class="checkboxPublicacion" name="checkId"></td>
                        <td>06</td>
                        <td>11111111-1</td>
                        <td>1</td>
                        <td>06-09-2000</td>
                        <td></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi16()">Ver Publicación</a></td>
                    </tr>
                    <tr class="table table-striped">
                        <td><input type="checkbox" id="tableUsers" class="checkboxPublicacion" name="checkId"></td>
                        <td>07</td>
                        <td>22222222-2</td>
                        <td>1</td>
                        <td>05-11-1998</td>
                        <td></td>
                        <td><a href="#" class="linkTabla" onclick="controlVisi16()">Ver Publicación</a></td>
                    </tr>

                </tbody>
            </table>
        </form>

    </div>
</section>