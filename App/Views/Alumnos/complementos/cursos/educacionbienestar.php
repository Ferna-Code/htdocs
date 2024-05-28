<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'getData') {
	$controller = new PerfilController();
	$controller->getData();
	exit;
}
?>

<div >
	<div >
		<div >
			<div>
				<h1>EDUCACIÓN Y BIENESTAR</h1><br><br><br>
			</div>
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
			</div>
			<div >	
					<div class="mb-3" id="cursosContainer"></div>

			</div>
		</div>
	</div>
</div>