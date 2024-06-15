<section style="margin: 10px;">
    <div class="">
        
            <div class="containerFiltro">
            <input style="margin-bottom: 15px" type="text" id="filtroOfertas" placeholder="Buscar por cargo">
            </div>
        

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