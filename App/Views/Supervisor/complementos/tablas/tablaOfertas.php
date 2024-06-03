<section style="margin: 10px;">
    <div class="">
        <form method="POST" action="#">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <select class="ofertaFiltro">
                    <option value="Práctica">Práctica</option>
                    <option value="Práctica">Part Time</option>
                    <option value="Práctica">Full Time</option>
                </select>

                <select class="categoriaFiltro">
                    <option value="Práctica">Educación y Bienestar</option>
                    <option value="Práctica">Tecnología y productividad</option>
                    <option value="Práctica">Negocios e Innovación</option>
                </select>

                <input type="submit" class="btnFiltro" value="Filtrar">
            </div>
        </form>

        <form action="" method="POST">
        <button type="button" id="deleteSelectedOfertas" class="btn-supervisor marginBtn">Eliminar</button>
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr>
                        <th class="widthCheck"><input type="checkbox" id="checkAllOferta" name="select-all"></th>
                        <th>Cargo</th>
                        <th>Empresa</th>
                        <th>Tipo de oferta</th>
                        <th>Fecha publicación</th>
                        <th>Fecha eliminación</th>
                    </tr>
                </thead>
                <tbody id="tbodyOferta">
                  
                </tbody>
            </table>
        </form>
    </div>
</section>