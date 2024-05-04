
<link rel="stylesheet" href="../../../../Public/css/ofertasalumnos.css">
<section class="seccion" style="padding: 3%; color: black;">
    <h1 class="section-title h1">Ofertas Laborales</h1><br>
    <form method="post" action="Registro.php">
        <div class="form-row">
            <div class="col-sm-2">
                <label for="fechaInicio">Fecha de Creación:</label>
                <input type="date" class="form-control" name="fechaInicio">
            </div>
            <div class="col-sm-2">
                <label for="fechaFin">Tipo de oferta:</label>
                <select class="form-control">
                    <option value="Práctica">Práctica</option>
                    <option value="Práctica">Part Time</option>
                    <option value="Práctica">Full Time</option>
                </select>
            </div>
            <div class="col-sm-2">
                <label for="fechaFin">Categoría:</label>
                <select class="form-control">
                    <option value="Práctica">Educación y Bienestar</option>
                    <option value="Práctica">Tecnología y productividad</option>
                    <option value="Práctica">Negocios e Innovación</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label></label><br>
                <input type="submit" class="btn btn-primary" value="Filtrar" name="Filtrar">
            </div>
        </div>
    </form>
    <section >
        <div class="table-responsive">
            <table id="tableUsers" class="tabla table">
                <thead>
                    <tr>
                        <th style="text-align: center;">Tipo</th>
                        <th style="text-align: center;">Cargo</th>
                        <th style="text-align: center;">Empresa</th>
                        <th style="text-align: center;">Fecha Creación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table table-striped">
                        <td>Práctica</td>
                        <td><a onclick="veroferta()"><b>TÉCNICA O PROFESIONAL PARA SECCIÓN PROGRAMACIÓN Y
                                    CONTROL</b></a>
                        </td>
                        <td>Ministerio de Defensa Nacional / Dirección General de Aeronáutica Civil /</td>
                        <td class="tr-table">
                            13/09/20
                        </td>
                      </tr>
                    <tr class="table table-striped">
                        <td>Práctica</td>
                        <td><a onclick="veroferta()"><b> Profesional para Departamento Programación Física y
                                    Control</b></a>
                        </td>
                        <td>Servicio de Vivienda y Urbanización Región de Coquimbo</td>
                        <td class="tr-table">
                            13/09/20
                        </td>
                    </tr>
                    <tr class="table table-striped">
                        <td>Práctica</td>
                        <td><a onclick="veroferta()"><b> Técnica para Estudiantes de Programación y Conectividad Soporte
                                    Informático HRLBO</b></a></td>
                        <td>Servicio de Salud O'Higgins</td>
                        <td class="tr-table">
                            13/09/20
                        </td>
                    </tr>
                    <tr class="table table-striped">
                        <td>Práctica</td>
                        <td><a onclick="veroferta()"><b> Profesional para Departamento Programación Física y
                                    Control</b></a>
                        </td>
                        <td>Servicio de Vivienda y Urbanización Región de Coquimbo</td>
                        <td class="tr-table">
                            13/09/20
                        </td>
                    </tr>
                    <tr class="table table-striped">
                        <td>Práctica</td>
                        <td><a onclick="veroferta()"><b>TÉCNICA O PROFESIONAL PARA SECCIÓN PROGRAMACIÓN Y
                                    CONTROL</b></a>
                        </td>
                        <td>Ministerio de Defensa Nacional / Dirección General de Aeronáutica Civil /</td>
                        <td class="tr-table">
                            13/09/20
                        </td>
                    </tr>
                    <tr class="table table-striped">
                        <td>Part Time</td>
                        <td><a onclick="veroferta()"><b> Profesional para Departamento Programación Física y
                                    Control</b></a>
                        </td>
                        <td>Servicio de Vivienda y Urbanización Región de Coquimbo</td>
                        <td class="tr-table">
                            13/09/20
                        </td>
                    </tr>
                    <tr class="table table-striped">
                        <td>Práctica</td>
                        <td><a onclick="veroferta()"><b>Técnica para Estudiantes de Programación y Conectividad Soporte
                                    Informático HRLBO</b></a></td>
                        <td>Servicio de Salud O'Higgins</td>
                        <td class="tr-table">
                            13/09/20
                        </td>
                    </tr>
                    <tr class="table table-striped">
                        <td>Full Time</td>
                        <td><a onclick="veroferta()"><b>Profesional para Departamento Programación Física y
                                    Control</b></a>
                        </td>
                        <td>Servicio de Vivienda y Urbanización Región de Coquimbo</td>
                        <td class="tr-table">
                            13/09/20
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>
</section>