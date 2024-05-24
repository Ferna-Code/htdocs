

let contadorFormularios = 1;

function agregarTrabajo() {
    if (contadorFormularios <= 2) {
        // Clona el primer formulario de experiencia laboral
        const nuevoFormulario = document.querySelector('.formulario-experiencia.visible').cloneNode(true);

        // Incrementa el contador de formularios
        contadorFormularios++;

        // Asigna un ID único al nuevo formulario
        const nuevoId = `experiencia${contadorFormularios}`;
        nuevoFormulario.id = nuevoId;

        // Modifica los atributos "for" de las etiquetas <label> para asociarlos con los nuevos inputs
        nuevoFormulario.querySelectorAll('label').forEach(label => {
            const inputId = label.getAttribute('for');
            if (inputId) {
                const nuevoInputId = `${inputId}-${contadorFormularios}`;
                label.setAttribute('for', nuevoInputId);
            }
        });

        // Modifica los atributos "id" y "name" de los inputs del nuevo formulario
        nuevoFormulario.querySelectorAll('input, textarea').forEach(input => {
            const inputName = input.getAttribute('name');
            if (inputName) {
                const nuevoInputName = `${inputName}-${contadorFormularios}`;
                input.setAttribute('id', nuevoInputName);
                input.setAttribute('name', nuevoInputName);
            }
        });

        // Oculta el nuevo formulario
        nuevoFormulario.classList.remove('visible');
        nuevoFormulario.classList.add('oculto');

        // Agrega el nuevo formulario clonado al contenedor
        document.getElementById('experiencia-laboral-container').appendChild(nuevoFormulario);

        // Muestra el nuevo formulario
        setTimeout(() => {
            nuevoFormulario.classList.add('visible');
        }, 10);
    } else {
        alert("Solo se permiten agregar hasta 3 trabajos.");
    }
}

let contadorFormulariosEducacion = 1;

function agregarEducacion() {
    if (contadorFormulariosEducacion <= 2) {
        // Clona el primer formulario de educación
        const nuevoFormulario = document.querySelector('.formulario-educacion').cloneNode(true);

        // Incrementa el contador de formularios de educación
        contadorFormulariosEducacion++;

        // Asigna un ID único al nuevo formulario de educación
        const nuevoId = `educacion${contadorFormulariosEducacion}`;
        nuevoFormulario.id = nuevoId;

        // Modifica los atributos "for" de las etiquetas <label> para asociarlos con los nuevos inputs
        nuevoFormulario.querySelectorAll('label').forEach(label => {
            const inputId = label.getAttribute('for');
            if (inputId) {
                const nuevoInputId = `${inputId}-${contadorFormulariosEducacion}`;
                label.setAttribute('for', nuevoInputId);
            }
        });

        // Modifica los atributos "id" y "name" de los inputs del nuevo formulario de educación
        nuevoFormulario.querySelectorAll('input, textarea').forEach(input => {
            const inputName = input.getAttribute('name');
            if (inputName) {
                const nuevoInputName = `${inputName}-${contadorFormulariosEducacion}`;
                input.setAttribute('id', nuevoInputName);
                input.setAttribute('name', nuevoInputName);
            }
        });

        // Oculta el nuevo formulario de educación
        nuevoFormulario.classList.remove('visible');
        nuevoFormulario.classList.add('oculto');

        // Agrega el nuevo formulario de educación clonado al contenedor
        document.getElementById('educacion-container').appendChild(nuevoFormulario);

        // Muestra el nuevo formulario de educación
        setTimeout(() => {
            nuevoFormulario.classList.add('visible');
        }, 10);
    } else {
        alert("Solo se permiten agregar hasta 3 formularios de educación.");
    }
}
