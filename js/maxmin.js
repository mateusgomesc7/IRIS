const maxtemp = document.getElementById("maxtemperatura") //constante de temperatura maxima:://id do texto dentro de h5
const mintemp = document.getElementById("mintemperatura")//constante de temperatura minima:://id do texto dentro de h5
const mediatemp = document.getElementById("mediatemperatura")//constante de temperatura minima:://id do texto dentro de h5
const minumidade = document.getElementById("minumidade")//constante de temperatura minima:://id do texto dentro de h5
const maxumidade = document.getElementById("maxumidade")//constante de temperatura minima:://id do texto dentro de h5
const mediaumidade = document.getElementById("mediaumidade")//constante de temperatura minima:://id do texto dentro de h5

fetch('iris-crud/json/max-temperatura.php')//requisição do json
.then(res => res.json())
.then(json => setmaxtemperatura(json))
function setmaxtemperatura(status){
    const max = parseFloat(status["max(temperatura)"]).toFixed(1);//define uma chave para pegar apenas o valor referente a ela
    maxtemp.innerHTML=max+"ºC";//modifica o html, adiciona o ºC a string   
}

fetch('iris-crud/json/min-temperatura.php')//requisição do json
.then(res => res.json())
.then(json => setmintemperatura(json))
function setmintemperatura(status){
    const min =parseFloat(status["min(temperatura)"]).toFixed(1);//define uma chave para pegar apenas o valor referente a ela
    mintemp.innerHTML=min+"ºC";//modifica o html, adiciona o ºC a string   
}

fetch('iris-crud/json/media-temperatura.php')//requisição do json
.then(res => res.json())
.then(json => setmediatemperatura(json))
function setmediatemperatura(status){
    const media= parseFloat(status["avg(temperatura)"]).toFixed(1);//define uma chave para pegar apenas o valor referente a ela
    mediatemp.innerHTML=media+"ºC";//modifica o html, adiciona o ºC a string   
}


//Umidade
fetch('iris-crud/json/mediaumidade.php')//requisição do json
.then(res => res.json())
.then(json => setmediaumidade(json))
function setmediaumidade(status){
    const media =parseFloat(status["avg(umidade)"]).toFixed(1);//define uma chave para pegar apenas o valor referente a ela
    mediaumidade.innerHTML=media+"%";//modifica o html, adiciona o ºC a string   
}

fetch('iris-crud/json/maxumidade.php')//requisição do json
.then(res => res.json())
.then(json => setmaxumidade(json))
function setmaxumidade(status){
    const max = parseFloat(status["max(umidade)"]).toFixed(1);//define uma chave para pegar apenas o valor referente a ela
    maxumidade.innerHTML=max+"%";//modifica o html, adiciona o ºC a string   
}

fetch('iris-crud/json/minumidade.php')//requisição do json
.then(res => res.json())
.then(json => setminumidade(json))
function setminumidade(status){
    const min = parseFloat(status["min(umidade)"]).toFixed(1);//define uma chave para pegar apenas o valor referente a ela
    minumidade.innerHTML=min+"%";//modifica o html, adiciona o ºC a string   
}
