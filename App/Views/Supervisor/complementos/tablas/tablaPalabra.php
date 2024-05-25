<section style="margin: 10px;">
    <div class="">

        <button type="button" class="btn-supervisor marginBtn btnAgregar" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            Agregar palabra
        </button>
        <a href="#" class="btn-supervisor marginBtn">Eliminar</a>

        <table id="TablaPalabra" class="tabla table">
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllPalabra" name="select-all"></th><!--CHECKBOX PRINCIPAL-->
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

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nueva palabra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="formPalabra" action="">
                    <label for="nuevaPalabra">Palabra: </label>
                    <input type="text" name="nuevaPalabra" id="nuevaPalabra">
                    <div class="modal-footer">
                        <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn-supervisor marginBtn" value="Agregar">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>