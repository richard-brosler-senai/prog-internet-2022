Algoritmo "semnome"

Var
// Se��o de Declara��es das vari�veis
  intI : inteiro
  numeros : vetor[1..8] de inteiro
  mult : inteiro
Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc...
  para intI de 1 ate 8 faca
    escreva("Digite um numero ", intI,": ")
    leia(numeros[intI])
  fimpara
  
  mult <- 0
  
  para intI de 1 ate 8 faca
    escreval(numeros[intI])
    se numeros[intI] mod 6 = 0 entao
      mult <- mult + 1
    fimse
  fimpara
  
  escreval("Total de m�ltiplos de 6 foi ", mult)
  
Fimalgoritmo