Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Se��o de Declara��es das vari�veis 
  numero : inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
  escreval("Digite um n�mero inteiro:")
  leia(numero)
  
  se numero % 2 = 0 entao
    escreval("O n�mero digitado � par")
  fimse
  
  se numero % 2 <> 0 entao //!=
    escreval("O numero digitado � impar")
  fimse
  
Fimalgoritmo