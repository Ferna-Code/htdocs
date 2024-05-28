<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Categorias</title>
<body>
    <hr>
    <h1>Categorías</h1>
    <div class="body-panel">
    <div style="margin: 10px;">
            <div class="containerFiltro">
                <input type="date" class="fechaFiltro" name="fechaFiltro" id="fechaFiltro">
                <select class="categoriaFiltro">
                    <option value="Práctica">Educación y Bienestar</option>
                    <option value="Práctica">Tecnología y productividad</option>
                    <option value="Práctica">Negocios e Innovación</option>
                </select>
                <input type="submit" class="btnFiltro" value="Filtrar">

                <button type="button" class="btn-supervisor " data-bs-toggle="modal" data-bs-target="#modalCrear">
                Nuevo
            </button>
            <button type="button" class="btn-supervisor " data-bs-toggle="modal" data-bs-target="#modalEditar">
                Editar
            </button>
                <a href="#" class="btn-supervisor marginBtn">Eliminar</a>
            </div>

        <table id="tableUsers" class="tabla table">
            <thead>
                <tr>
                    <th class="widthCheck"><input type="checkbox" id="checkAllCategoria" name="select-all"></th>
                    <th class="anchoId">ID</th>
                    <th>Categoría</th>
                    <th class="anchoFecha">Fecha de Creación</th>
                    <th class="anchoActiv">Activo</th>
                    <th class="anchoFecha">Fecha de Eliminación</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCategoria" name="checkId"></td>
                    <td class="anchoId">01</td>
                    <td>Educación Bienestar y Calidad de vida</td>
                    <td class="anchoFecha">12-04-2024</td>
                    <td class="anchoActiv">1</td>
                    <td class="anchoFecha">23-04-2024</td>
                </tr>
                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCategoria" name="checkId"></td>
                    <td class="anchoId">02</td>
                    <td>Informática Tecnología y Productividad</td>
                    <td class="anchoFecha">12-04-2024</td>
                    <td class="anchoActiv">1</td>
                    <td class="anchoFecha">23-04-2024</td>
                </tr>
                <tr class="table table-striped">
                    <td><input type="checkbox" class="checkboxCategoria" name="checkId"></td>
                    <td class="anchoId">03</td>
                    <td>Negocios Gestión e Innovación</td>
                    <td class="anchoFecha">12-04-2024</td>
                    <td class="anchoActiv">1</td>
                    <td class="anchoFecha">23-04-2024</td>
                </tr>
            </tbody>  
        </table>
               <!-- seccion footer -->
               <div class="footer-tools">
                <div class="list-items">
                    Mostrar
                    <select name="n-entries" id="n-entries" class="n-entries">
                        <option value="10">10</option>
                        <option value="15" selected>20</option>
                        <option value="20">50</option>
                    </select>
                    Entradas
                </div>   
                <div class="pages">
                    <ul>
                        <li><span class="active">1</span></li>
                        <li><button>2</button></li>
                        <li><button>3</button></li>
                        <li><span>...</span></li>
                        <li><button>9</button></li>
                        <li><button>10</button></li>
                    </ul>

                </div>
        </div>
    </div>
    </div>

    <!-- Modal Nuevo -->
<div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalCrearLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCrearLabel">Agregar nueva categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addCategoria" method="POST" action="">
                    <label for="nuevaCategoria">Nueva categoria: </label>
                    <input type="text" name="nuevaCategoria" id="nuevaCategoria">
                    <div class="col">
                <label >Activo:</label>
                <select class="form-select"  name="EstadoCategoria" id="EstadoCategoria" required>
                    <option>1</option>
                    <option>0</option>
                </select> 
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" form="addCategoria" class="btn-supervisor marginBtn">Agregar</button>
            </div>
        </div>
    </div>
</div>
  <!-- Modal Editar -->
  <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar categoría</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editCategoria" method="POST" action="">
                        <input type="hidden" name="editId" id="editId">
                        <label for="editCategoria">Categoría: </label>
                        <input type="text" name="editCategoria" id="editCategoria">
                        <div class="col">
                            <label>Activo:</label>
                            <select class="form-select" name="editActivo" id="editActivo" required>
                                <option value="1">1</option>
                                <option value="0">0</option>
                            </select> 
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-supervisor marginBtn" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" form="editCategoria" class="btn-supervisor marginBtn">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $("#agregarCategoria").click(function(){
        var nuevaCategoria = $("#nuevaCategoria").val();
        var estadoCategoria  = $("#EstadoCategoria").val();
        $.ajax({
            url: 'categoria.php', 
            type: 'post',
            data: $('#addCategoria').serialize(), 
            success: function(response){
                alert(response); 
                $('#modalCrear').modal('hide'); 
            }
        });
    });
});

    //opcion para editar//
    $(document).ready(function(){
    // Trigger to open the edit modal and populate the fields
    $(".editButton").click(function(){
        var categoriaId = $(this).data('id');
        var categoriaName = $(this).data('name');
        var categoriaEstado = $(this).data('estado');
        
        $("#editId").val(categoriaId);
        $("#editCategoria").val(categoriaName);
        $("#editActivo").val(categoriaEstado);
        
        $('#modalEditar').modal('show');
    });
    
    // Handle the form submission for editing
    $("#editCategoria").submit(function(event){
        event.preventDefault(); // Prevent the form from submitting the default way
        $.ajax({
            url: 'editar_categoria.php', // The server-side script for editing
            type: 'post',
            data: $(this).serialize(), // Serialize the form data
            success: function(response){
                alert(response); // Show the response from the PHP script
                $('#modalEditar').modal('hide'); // Hide the modal
                // You can add further actions here, such as updating the table content without page reload
            }
        });
    });
});
</script>
</script>
    <script src="../../../../Public/js/check.js"></script>
    <script>
        // Llamada en una vista
        initializeCheckboxMaster('checkAllCategoria', 'checkboxCategoria');
    </script>

</body>
