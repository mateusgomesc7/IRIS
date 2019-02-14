const potencia = document.getElementById("potencia")
const agua = document.getElementById("agua")
const valorTotal = document.getElementById("valorTotal")

function potenciaUP(){
    var valorPotencia = parseFloat(potencia.innerText) + 100
    potencia.innerHTML = valorPotencia;
    valorGasto()
}

function potenciaDOWN(){
    var valorPotencia = parseFloat(potencia.innerText) - 100
    potencia.innerHTML = valorPotencia;
    valorGasto()
}

function aguaUP(){
    var valorAgua = parseFloat(agua.innerText) + 10
    agua.innerHTML = valorAgua;
    valorGasto()
}

function aguaDOWN(){
    var valorAgua = parseFloat(agua.innerText) - 10
    agua.innerHTML = valorAgua;
    valorGasto()
}

function valorGasto(){
   var valorPotencia = parseFloat(potencia.innerText)
   var valorAgua = parseFloat(agua.innerText)
   var gastoTotal = ((valorPotencia)*0.572 + (36.84)).toFixed(2)
   valorTotal.innerHTML = "R$" + gastoTotal
}