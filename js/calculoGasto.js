const potencia = document.getElementById("potencia")
const agua = document.getElementById("agua")
const valorTotal = document.getElementById("valorTotal")

function potenciaUP(){
    
    var valorPotencia = parseFloat(potencia.innerText) + 1
    potencia.innerHTML = valorPotencia;
    valorGasto()
}

function potenciaDOWN(){
    var valorPotencia = parseFloat(potencia.innerText) - 1
    if((parseFloat(potencia.innerText) - 1)<0){
        valorGastoPotencia=0
    }
    else potencia.innerHTML = valorPotencia;
    
    valorGasto()
}

function aguaUP(){
    var valorAgua = parseFloat(agua.innerText) + 1000
    agua.innerHTML = valorAgua;
    valorGasto()
}

function aguaDOWN(){
    var valorAgua = parseFloat(agua.innerText) - 1000
    if((parseFloat(agua.innerText) - 1)<0){
        valorAgua=0
    }
    else agua.innerHTML = valorAgua;
    valorGasto()
}

function valorGasto(){
   var valorPotencia = parseFloat(potencia.innerText);
   var precoagua;
   var valorAgua = parseFloat(agua.innerText)
   if((valorAgua*(1/1000))<=10){
       precoagua=36.84;
   }
   else precoagua=(((valorAgua*(1/1000))%100)*4.37);
   var gastoTotal = ((valorPotencia)*0.572 + precoagua).toFixed(2)
   valorTotal.innerHTML = "R$" + gastoTotal
}