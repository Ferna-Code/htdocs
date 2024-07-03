<section style="margin: 10px;">
    <div class="">
        <input style="margin-bottom: 15px" type="text" id="filtroDiccionario" placeholder="Buscar por nombre...">
        <button type="button" class="btn-supervisor marginBtn btnAgregar" onclick="agregarPalabra()">
            Agregar palabra
        </button>

        <button type="button" id="deleteSelectedPalabra" class="btn-supervisor marginBtn">Eliminar</button>

        <table id="TablaPalabra" class="tabla table">
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllPalabra" name="select-all"></th>
                    <!--CHECKBOX PRINCIPAL-->
                    <th>Palabra</th>
                    <th>Fecha creación</th>
                    <th>Fecha eliminación</th>

                </tr>
            </thead>
            <tbody id="tbodyPalabra">

            </tbody>
        </table>

    </div>
</section>


<script src="../../../../Public/js/deletes.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
