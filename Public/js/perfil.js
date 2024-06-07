document.addEventListener("DOMContentLoaded", function() {
    let userDataOriginal;

    function getUsuarios() {
        fetch("/perfil/getdata/", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
        })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                const userData = result.data;
                document.getElementById('nombreH1').innerText = userData.nombre;
                document.getElementById('nombrep').innerText = userData.nombre;
                document.getElementById('rut').value = userData.rut;
                document.getElementById('email').value = userData.correo;
                document.getElementById('fechanac').value = userData.fechaNacimiento;
                document.getElementById('telefono').value = userData.telefono;
                document.getElementById('direccion').value = userData.direccion;
                document.getElementById('password').value = userData.clave;
                userDataOriginal = userData;
            } else {
                console.error("Error message:", result.message);
            }
        })
        .catch(error => {
            console.error('Error al obtener los datos del usuario:', error);
        });
    }

    function obtenerExperienciaLaboral() {
        fetch("/perfil/getDataLaboral")
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                mostrarExperienciaLaboral(data.data);
            } else {
                console.error("Error al obtener los datos de experiencia laboral:", data.message);
                mostrarExperienciaLaboral([]);
            }
        })
        .catch(error => {
            console.error("Error en la solicitud AJAX:", error);
            mostrarExperienciaLaboral([]);
        });
    }

    function obtenerExperienciaAcademica() {
        fetch("/perfil/getDataAcademica")
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log(data)
                mostrarExperienciaAcademica(data.data);
            } else {
                console.error("Error al obtener los datos de experiencia Academica:", data.message);
                mostrarExperienciaAcademica([]);
            }
        })
        .catch(error => {
            console.error("Error en la solicitud AJAX:", error);
            mostrarExperienciaAcademica([]);
        });
    }



    function mostrarExperienciaLaboral(data) {
        const formularioContainer = document.getElementById('formularioexperiencialaboral');
        formularioContainer.innerHTML = '';
        if (data.length > 0) {
            data.forEach(experiencia => {
                agregarFormularioExperiencia(experiencia);
            });
        } else {
            agregarFormularioExperiencia();
        }
    }

    function mostrarExperienciaAcademica(data) {
        const formularioContainer = document.getElementById('formularioexperienciaacademica'); // Aquí corregimos el ID
        formularioContainer.innerHTML = '';
        if (data.length > 0) {
            data.forEach(experiencia => {
                agregarFormularioExperienciaA(experiencia);
            });
        } else {
            agregarFormularioExperienciaA();
        }
    }
    

    function agregarFormularioExperiencia(experiencia = {}) {
        const formularioContainer = document.getElementById('formularioexperiencialaboral');
        const maxExperiencias = 3;
        const mensajeError = document.getElementById('mensaje-error');
        let experienciasCount = formularioContainer.querySelectorAll('.formulario-experiencia').length;
    
        if (experienciasCount >= maxExperiencias) {
            maxExperiencias3();
        }
    
        const nuevoFormulario = document.createElement('div');
        nuevoFormulario.classList.add('formulario-experiencia', 'mt-2');
        nuevoFormulario.innerHTML = `
            <input type="hidden" name="experienciaID" value="${experiencia.ID || ''}">
            <div class="grid">
                <div>
                    <label for="desde">Desde:</label>
                    <input type="date" name="fechadesde" value="${experiencia.fechadesde || ''}" class="form-control">
                </div>
                <div>
                    <label for="hasta">Hasta:</label>
                    <input type="date" name="fechahasta" value="${experiencia.fechahasta || ''}" class="form-control">
                </div>
                <div>
                    <label for="puesto">Puesto:</label>
                    <input type="text" name="puesto" value="${experiencia.puesto || ''}" class="form-control">
                </div>
                <div>
                    <label for="empresa">Empresa:</label>
                    <input type="text" name="empresa" value="${experiencia.empresa || ''}" class="form-control">
                </div>
                <div>
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" rows="4" class="form-control">${experiencia.Descripcion || ''}</textarea>
                </div>
                <div>
                    <label for="trabaja-actualmente">¿Trabaja actualmente aquí?</label>
                    <div>
                        <label>
                            <input type="radio" name="trabaja-actualmente${experienciasCount}" value="si" ${experiencia.trabajaActualmente === 'si' ? 'checked' : ''}> Sí
                        </label>
                        <label>
                            <input type="radio" name="trabaja-actualmente${experienciasCount}" value="no" ${experiencia.trabajaActualmente === 'no' ? 'checked' : ''}> No
                        </label>
                    </div>
                </div>
            </div>
        `;
        formularioContainer.appendChild(nuevoFormulario);
    }

    function agregarFormularioExperienciaA(experiencia = {}) {
        const formularioContainer = document.getElementById('formularioexperienciaacademica');
        const maxExperiencias = 3;
        const mensajeErroracademico = document.getElementById('mensaje-error-academico');
        let experienciasCount = formularioContainer.querySelectorAll('.formulario-experiencia-academica').length;
    
        if (experienciasCount >= maxExperiencias) {
            maxExperiencias3();
        }
    
        const nuevoFormulario = document.createElement('div');
        nuevoFormulario.classList.add('formulario-experiencia-academica', 'mt-2');
        nuevoFormulario.innerHTML = `
            <input type="hidden" name="experienciaIDAcademica" value="${experiencia.ID || ''}">
            <div class="grid">
                <div>
                    <label for="desde">Fecha de Finalización:</label>
                    <input type="date" name="fechafinalizacion" value="${experiencia.fechafinalizacion || ''}" class="form-control">
                </div>
                <div>
                    <label for="hasta">Titulo Obtenido:</label>
                    <input type="text" name="titulobtenido" value="${experiencia.titulobtenido || ''}" class="form-control">
                </div>
                <div>
                    <label for="cursa-actualmente">¿Cursa actualmente aquí?</label>
                    <div>
                        <label>
                            <input type="radio" name="cursa-actualmente${experienciasCount}" value="si" ${experiencia.cursaactualmente === 'si' ? 'checked' : ''}> Sí
                        </label>
                        <label>
                            <input type="radio" name="cursa-actualmente${experienciasCount}" value="no" ${experiencia.cursaactualmente === 'no' ? 'checked' : ''}> No
                        </label>
                    </div>
                </div>
            </div>
        `;
        formularioContainer.appendChild(nuevoFormulario);
    }
    
    
    
    function guardarCambiosUsuario(event) {
        event.preventDefault();
    
        const camposModificados = {};
        const rut = document.getElementById('rut').value;
        const correo = document.getElementById('email').value;
        const telefono = document.getElementById('telefono').value;
        const direccion = document.getElementById('direccion').value;
        const fechaNacimiento = document.getElementById('fechanac').value;
        const clave = document.getElementById('password').value;
        const imagenInput = document.getElementById('imagen');
        const archivocv = document.getElementById('archivocv');
    
        if (correo !== userDataOriginal.correo) camposModificados.correo = correo;
        if (telefono !== userDataOriginal.telefono) camposModificados.telefono = telefono;
        if (direccion !== userDataOriginal.direccion) camposModificados.direccion = direccion;
        if (fechaNacimiento !== userDataOriginal.fechaNacimiento) camposModificados.fechaNacimiento = fechaNacimiento;
        if (clave !== userDataOriginal.clave) camposModificados.clave = clave;
    
        const experienciasLaborales = [];
        document.querySelectorAll('.formulario-experiencia').forEach((form, index) => {
            const experiencia = {
                ID: form.querySelector('input[name="experienciaID"]').value || '', 
                desde: form.querySelector('input[name="fechadesde"]').value || '',
                hasta: form.querySelector('input[name="fechahasta"]').value || '',
                puesto: form.querySelector('input[name="puesto"]').value || '',
                empresa: form.querySelector('input[name="empresa"]').value || '',
                descripcion: form.querySelector('textarea[name="descripcion"]').value || '',
                trabajaActualmente: form.querySelector(`input[name="trabaja-actualmente${index}"]:checked`) ? form.querySelector(`input[name="trabaja-actualmente${index}"]:checked`).value : ''
            };
            experienciasLaborales.push(experiencia);
        });
    
        if (experienciasLaborales.length > 0) {
            camposModificados.experienciasLaborales = experienciasLaborales;
        }
    
        const experienciasAcademicas = [];
        document.querySelectorAll('.formulario-experiencia-academica').forEach((form, index) => {
            const experiencia = {
                ID: form.querySelector('input[name="experienciaIDAcademica"]').value || '',
                fechafinalizacion: form.querySelector('input[name="fechafinalizacion"]').value || '',
                titulobtenido: form.querySelector('input[name="titulobtenido"]').value || '',
                cursaactualmente: form.querySelector(`input[name="cursa-actualmente${index}"]:checked`) ? form.querySelector(`input[name="cursa-actualmente${index}"]:checked`).value : ''
            };
            console.log(experiencia);
            experienciasAcademicas.push(experiencia);
            
        });
    
        if (experienciasAcademicas.length > 0) {
            camposModificados.experienciasAcademicas = experienciasAcademicas;
        }
    
        const formData = new FormData();
        formData.append('rut', rut);
    
        for (const key in camposModificados) {
            if (key === 'experienciasLaborales' || key === 'experienciasAcademicas') {
                formData.append(key, JSON.stringify(camposModificados[key]));
            } else {
                formData.append(key, camposModificados[key]);
            }
        }
    
        if (imagenInput.files.length > 0) {
            formData.append('imagen', imagenInput.files[0]);
        }
        if (archivocv.files.length > 0) {
            formData.append('archivocv', archivocv.files[0]);
        }
    
        fetch("/perfil/guardardatosalumno", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                console.log('¡Cambios guardados correctamente!');
                cambiosGuardados();
            } else {
                console.error(result.message);
            }
        })
        .catch(error => {
            console.error('Error al guardar los cambios del usuario:', error);
        });
    }
    

    document.getElementById('agregar-experiencia-btn').addEventListener('click', () => agregarFormularioExperiencia());
    document.getElementById('agregar-experiencia-academica-btn').addEventListener('click', () => agregarFormularioExperienciaA());
    document.getElementById('guardar-cambios-usuario-btn').addEventListener('click', guardarCambiosUsuario);

    getUsuarios();
    obtenerExperienciaLaboral();
    obtenerExperienciaAcademica();
});


function obtenerArchivoCV(event) {
    event.preventDefault();
    fetch("/perfil/getDataArchivoCV")
        .then(response => response.json())
        .then(result => {
            console.log(result);
            if (result.success) {
                if (result.data.length > 0) {
                    const rutaArchivoCV = result.data[0].documento; 
                    // Generar un botón para abrir el archivo CV
                    const abrirArchivoBtn = document.createElement('button');
                    abrirArchivoBtn.textContent = 'Abrir Archivo CV';
                    abrirArchivoBtn.classList.add('btn', 'btn-primary');
                    abrirArchivoBtn.type = 'button';
                    abrirArchivoBtn.addEventListener('click', () => {
                        window.open(rutaArchivoCV, '_blank'); // Abrir la ruta del archivo en una nueva pestaña
                    });

                    // Agregar el botón al documento
                    const container = document.getElementById('contenedorcv'); 
                    container.appendChild(abrirArchivoBtn);
                } else {
                    console.error('No se encontró ningún archivo CV en la base de datos.');
                }
            } else {
                console.error(result.message);
            }
        })
        .catch(error => {
            console.error('Error al obtener la ruta del archivo CV:', error);
        });
}


// Llamar a la función para obtener la ruta del archivo CV cuando la página se cargue
window.addEventListener('load', obtenerArchivoCV);

// aqui las alerts

function cambiosGuardados(){
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "¡Cambios guardados correctamente!",
      showConfirmButton: false,
      timer: 1500
    });
  }

  function maxExperiencias3(){
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Solo puedes agregar hasta 3 experiencias.",
      showConfirmButton: false,
      timer: 1500
    });
  }
  