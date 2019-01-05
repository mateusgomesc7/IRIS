// Organizei na ordem da lógica de execução, por isso os comentários abaixo(primário, secundário, terciário):

// ============================================ SECUNDÁRIO =============================================
// Gráfico de Barra
const ctxBar = document.getElementById("barChart").getContext('2d')
// Gráfico de Doughnut
const ctxDoughnut = document.querySelector('.canvasDoughnut').getContext('2d')
// Gráfico de Linha1
const ctxLinha1 = document.querySelector("#lineGraph1").getContext('2d')
// Gráfico de Linha2
const ctxLinha2 = document.querySelector("#lineGraph2").getContext('2d')

// ============================================ TERCIÁRIO DATA =============================================
// Gráfico de Barra - data
const dataBar = {
    labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun"],
    datasets: [{
        label: '# Reais',
        data: [4, 5, 1, 2, 2, 3],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
    }]
}
// Gráfico de Doughnut - data
// Criei um json aqui mesmo, pois não consegui resgatar os valores no doughnut.json e colocar aqui ainda
var dados = '{"positivo": "90","negativo": "10"}';
var obj = jQuery.parseJSON(dados);
const dataDoughnut = {
    labels: ["Contém %", "Resto %"],
    datasets: [{
        data: [obj.positivo, obj.negativo],
        backgroundColor: ["#9B59B6", "#BDC3C7"],
        hoverBackgroundColor: ["#B370CF", "#CFD4D8"]
    }]
}
// Gráfico de Linha1 - data
const dataLinha1 = {
    labels: ['15:45', '15:50', '15:55', '16:00', '16:05', '16:10', '16:15', '16:20'],
    datasets: [
        {
            backgroundColor: 'rgba(65, 179, 249, 0.1)',
            borderColor: '#41b3f9',
            data: [26, 26, 27, 26, 26, 25, 26, 28]
        }
    ]
}
// Gráfico de Linha2 - data
const dataLinha2 = {
    labels: ['15:45', '15:50', '15:55', '16:00', '16:05', '16:10', '16:15', '16:20'],
    datasets: [
        {
            backgroundColor: 'rgba(65, 179, 249, 0)',
            borderColor: '#4c5667',
            data: [50, 28, 70, 40, 50, 39, 50, 48]
        }
    ]
}
// ============================================ TERCIÁRIO OPTIONS =============================================
// Gráfico de Barra - options
const optionsBar = {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
// Gráfico de Doughnut - options
const optionsDoughnut = {
    legend: {
        display: false
    }
}
// Gráfico de Linha1 - options
const optionsLinha1 = {
    maintainAspectRatio: false,
    legend: {
        display: false
    }
}
// Gráfico de Linha2 - options
const optionsLinha2 = {
    maintainAspectRatio: false,
    legend: {
        display: false
    }
}
// ============================================ SECUNDÁRIO =============================================
// Gráfico de Barra - config
const configBar = {
    type: 'bar',
    data: dataBar,
    options: optionsBar
}
// Gráfico de Doughnut - config
const configDoughnut = {
    type: 'doughnut',
    data: dataDoughnut,
    options: optionsDoughnut
}
// Gráfico de Linha1 - config
const configLinha1 = {
    type: 'line',
    data: dataLinha1,
    options: optionsLinha1
}
// Gráfico de Linha2 - config
const configLinha2 = {
    type: 'line',
    data: dataLinha2,
    options: optionsLinha2
}
// ============================================ PRIMÁRIO =============================================
const myChart = new Chart(ctxBar, configBar)
const canvasDoughnut = new Chart(ctxDoughnut, configDoughnut)
const lineChart1 = new Chart(ctxLinha1, configLinha1)
const lineChart2 = new Chart(ctxLinha2, configLinha2)