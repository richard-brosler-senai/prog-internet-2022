Algoritmo "semnome"

Var
// Se��o de Declara��es das vari�veis 
  intI : inteiro
  nomes : vetor[1..10] de caracter

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
  para intI de 1 ate 10 faca
    escreva("Digite o nome ", intI,": ")
    leia(nomes[intI])
  fimpara
  
  para intI de 1 ate 10 faca
    escreval(intI," - ", nomes[intI])
  fimpara

Fimalgoritmo