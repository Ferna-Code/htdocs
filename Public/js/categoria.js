document.addEventListener("DOMContentLoaded", function() {
    function getCategorias() {
        fetch("/categorias/getdata/", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
        })
        .then(response => {
            if (!response.ok) {
                return response.text().then(text => {
                    throw new Error(`Network response was not ok: ${text}`);
                });
            }
            return response.json();
        })
        .then(data => {
            if (data && data.categorias) {
                const categorias = data.categorias;
                const categoriasContainer = document.getElementById("categoriasContainer");
                categoriasContainer.innerHTML = ''; // Limpiar el contenedor 
                categorias.forEach((categoria, index) => {
                    const cardcategoria = document.createElement("div");
                    cardcategoria.className = "col-xs-12 col-sm-6 col-md-4";
                    cardcategoria.innerHTML = `
                        <div class="cardc mb-4">
                            <div class="cardc-details">
                                <p style="display: none;" class="text-title">${categoria.id}</p>
                                <p class="text-title">${categoria.nombre}</p>
                            </div>
                            <button class="cardc-button" onclick="controlVisi6(${categoria.id})">Ver más</button>
                        </div>
                    `;
                    
                    if (index % 3 === 0) {
                        const rowContainer = document.createElement("div");
                        rowContainer.className = "row";
                        categoriasContainer.appendChild(rowContainer);
                    }
                    // Agregar la tarjeta al contenedor de fila actual
                    categoriasContainer.lastChild.appendChild(cardcategoria);
                });
            } else {
                console.error("Error al obtener datos del servidor:", data.message);
            }
        })
        .catch(error => {
            console.error('Error al obtener los datos de las categorías:', error);
        });
    }


    getCategorias();
});
