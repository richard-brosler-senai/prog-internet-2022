Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 21/05/2022
Var
   // Se��o de Declara��es das vari�veis
   numero : inteiro
   cnt : inteiro
   soma : inteiro

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   escreval("Usando enquanto")
   cnt <- 1
   soma <- 0
   enquanto cnt <= 5 faca
      escreval("Digite um n�mero:")
      leia (numero)
      soma <- soma + numero
      cnt <- cnt + 1
   fimenquanto
   escreval("O soma n�mero � ", soma/5)
   //repita
   escreval("Usando o repita")
   escreval("-------------------")
   cnt <- 1
   repita
      escreval("Digite um n�mero:")
      leia (numero)
      soma <- soma + numero
      cnt <- cnt + 1
   ate cnt > 5
   escreval("O soma n�mero � ", soma/5)
   //Para
   escreval("Usando o Para")
   escreval("-------------------")
   para cnt de 1 at� 5 passo 1 faca
      escreval("Digite um n�mero:")
      leia (numero)
      soma <- soma + numero
   fimpara
   escreval("O soma n�mero � ", soma/5)

Fimalgoritmo