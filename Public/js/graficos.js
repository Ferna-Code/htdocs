// Carga de los paquetes de Google Charts
google.charts.load('current', {
    'packages': ['corechart', 'table']
});
// Carga de los paquetes de Google Charts
google.charts.setOnLoadCallback(drawCharts);

function drawCharts() {
    drawCurveChart(); //funcion que dibuja el grafico de linea
    drawPieChart();
}

// Gráfico de línea
function drawCurveChart() { //grafico de linea
    // Se crea y se llena el objeto DataTable con los datos de las publicaciones por fecha
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Fecha');
    data.addColumn('number', 'Cantidad de Publicaciones');
    datosPublicaciones.forEach(function(row) {
        data.addRow([row.fechaCreacion, parseInt(row.cantidad)]);
    });

    // Se configuran las opciones del gráfico de líneas
    var options = {
        title: 'Cantidad de publicaciones',
        curveType: 'function',
        legend: {
            position: 'bottom'
        },
        pointSize: 5,
        hAxis: {
            title: 'Fecha'
        },
        vAxis: {
            title: 'Cantidad de Publicaciones'
        }
    };

    // Se crea y se dibuja el gráfico de líneas en el elemento con el ID 'curve_chart'
    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
    chart.draw(data, options);
}

