// Selecionando os componentes que estão utilizando a classe
// btnReq
var btns = document.querySelectorAll(".btnReq");
// Criando a função que será executada para buscar
// as informações em um código php
function buscarExercicio(idExercicio,cmpDestino,parametrosExercicio){
    var corpoMensagem = `{ "exercicio" : "${idExercicio}",
                           "parametros" : "${parametrosExercicio}" }`;
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST","exercicio.php",true);
    xhttp.setRequestHeader("Content-Type","application/json");
    xhttp.send(corpoMensagem);
    xhttp.onload = ()=> {
        if (xhttp.status === 200){
            cmpDestino.innerHTML = xhttp.responseText;
        }
    }
}
// Criando o evento do click do botão
btns.forEach(it =>{
    it.addEventListener("click",()=>{
        cmpDestino = document.querySelector("#" + it.dataset.destino);
        cmpValor= document.querySelector("#" + it.dataset.campo);
        buscarExercicio(it.id,cmpDestino,cmpValor.value);
    })
})