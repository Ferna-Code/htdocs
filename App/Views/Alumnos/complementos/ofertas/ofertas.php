<link rel="stylesheet" href="../../../../Public/css/categorias.css">
<div  style="margin-top: 5%">
    <h1 class="mb-4">Ofertas Laborales</h1>
    <div>
    <form method="post" action="Registro.php">
                    <div class="form-row">
                        <div class="col-sm-2">
                            <label for="fechaInicio">Fecha de Creación:</label>
                            <input type="date" class="form-control" name="fechaInicio">
                        </div>

                        <div class="col-sm-4">
                            <label for="fechaFin">Filtrar por carrera:</label>
                            <select class="form-control">
                                <option value="Práctica">Técnico en Farmacia.</option>
                                <option value="Práctica">Psicodefagogía.</option>
                                <option value="Práctica">Técnico en estética Integral.</option>
                                <option value="Práctica">Servicio Social.</option>
                                <option value="Práctica">Masoterapia.</option>
                                <option value="Práctica">Laborista Dental.</option>
                                <option value="Práctica">PET Educación Parvularia.</option>
                                <option value="Práctica">Técnico en educación Parvularia.</option>
                                <option value="Práctica">Técnico en Naturopatía y terapias Naturales.</option>
                                <option value="Práctica">Técnico en servicio social.</option>
                                <option value="Práctica">Naturopatía y terapias naturales.</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label></label><br>
                            <input type="submit" class="btn-supervisor" value="Filtrar" name="Filtrar">
                        </div>
                    </div>
                </form>
        <div class="row">
            <div class="mb-6" id="ofertasContainer"></div>
        </div>
    </div>
</div>
