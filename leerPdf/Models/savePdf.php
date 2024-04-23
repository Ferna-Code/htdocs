<?php
$tamanio = 500;
if (isset ($_FILES['documento']) && $_FILES['documento']['type'] == 'application/pdf') {
    if ($_FILES['documento']['size'] < ($tamanio * 1024)) {
        $archivo = move_uploaded_file($_FILES['documento']['tmp_name'], 'documento/' . $_FILES['documento']['name']);
        echo
            '
            
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                 El documento se ha guardado correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        
        ';
    } else {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
               Error al subir el documento peso superior al permitido !.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        
        ';
    }
}else if(isset($_FILES['documento']) && $_FILES['documento']['type'] !== 'application/pdf'){
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
             Solo se admiten documentos PDF
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    
    ';
}

