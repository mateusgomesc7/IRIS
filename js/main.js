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
        data: [12, 19, 3, 5, 2, 3],
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
//Linkando o arquivo json
fetch('data/doughnut.json')
  .then(res => res.json())
  .then(json => setDoughnut(json))

function setDoughnut(stats){ //Funciona pq Deus qr--Dentro de uma função para que sejam lidos todos os valores do jason
    for(const data of stats){ //tlendo todos os dados do json
        const positivo=data.positivo //atribuindo os valores do json
        const negativo=data.negativo
        const dataDoughnut = {
            labels: ["Contém %", "Resto %"], //Legendas do grafico
            datasets: [{
                data: [positivo,negativo], //dados mostrados
                backgroundColor: ["#9B59B6", "#BDC3C7"],
                hoverBackgroundColor: ["#B370CF", "#CFD4D8"]
            }]
        }
        const optionsDoughnut = {//Sem legendas
            legend: {
                display: false
            }
        }

        const configDoughnut = {//Tipo do gráfico e suas configurações
            type: 'doughnut',
            data: dataDoughnut,
            options: optionsDoughnut
        }
        const canvasDoughnut = new Chart(ctxDoughnut, configDoughnut)//Mostrando o gráfico
    }
}//Essa função deve conter os atributos do gráfico doughnut, pois os valores estão contidos nela


//--+--+--+--+--+--+--+--+--+--+   EM DESENVOLVIMENTO --+--+--+--+--+--+--+--+--+--+
//--+--+--+--+--+--+--+--+--+--+    GRÁFICO DE LINHA  --+--+--+--+--+--+--+--+--+--+

// Gráfico de Linha1 - data
fetch('data/linha1.json')
  .then(res => res.json())
  .then(json => setLinha1(json))
//Função para mostrar o gráfico da temperatura
function setLinha1(stats){

    //const hora = [hora3.length]
    //const hora = data.hora
    const dataLinha1 = {
        labels: stats.map(v => v.hora),
        datasets: [
            {
                backgroundColor: 'rgba(65, 179, 249, 0.1)',
                borderColor: '#41b3f9',
                data: stats.map(v => v.valor)
            }
        ]
    }
    // Gráfico de Linha1 - options
    const optionsLinha1 = {
        maintainAspectRatio: false,
        legend: {
            display: false
        }
    }
    // Gráfico de Linha1 - config
    const configLinha1 = {
        type: 'line',
        data: dataLinha1,
        options: optionsLinha1
    }
    //Mostrar Gráfico da temperatura
    const lineChart1 = new Chart(ctxLinha1, configLinha1)
    
}

//--+--+--+--+--+--+--+--+--+--+  FIM EM DESENVOLVIMENTO --+--+--+--+--+--+--+--+--+--+ 
//--+--+--+--+--+--+--+--+--+--+   FIM GRÁFICO DE LINHA  --+--+--+--+--+--+--+--+--+--+



// Gráfico de Linha2 - data- Umidade
fetch('data/linha2.json')
  .then(res => res.json())
  .then(json => setLinha2(json))
//Função para mostrar o gráfico da temperatura
function setLinha2(stats){
for(const data of stats){
     const valor2 =data.valor
     const hora2 =data.hora
const dataLinha2 = {
    labels: [hora2],
    datasets: [
        {
            backgroundColor: 'rgba(65, 179, 249, 0.1)',
            borderColor: '#41b3f9',
            data: [valor2]
        }
    ]
}
// Gráfico de Linha1 - options
const optionsLinha2 = {
    maintainAspectRatio: false,
    legend: {
        display: false
    }
}
// Gráfico de Linha1 - config
const configLinha2 = {
    type: 'line',
    data: dataLinha2,
    options: optionsLinha2
}
//Mostrar Gráfico da temperatura
const lineChart2 = new Chart(ctxLinha2, configLinha2)}
}


// ============================================ SECUNDÁRIO =============================================
// Gráfico de Barra - config
const configBar = {
    type: 'bar',
    data: dataBar,
    options: optionsBar
}
// ============================================ PRIMÁRIO =============================================
const myChart = new Chart(ctxBar, configBar)
