Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Se��o de Declara��es das vari�veis 
  nome: caracter
  ano_atual : inteiro
  ano_nasc  : inteiro
  idade     : inteiro
Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
   escreval("Digite seu nome: ")
   leia(nome)
   escreval("Digite o ano de seu nascimento:")
   leia(ano_nasc)
   escreval("Digite o ano atual:")
   leia(ano_atual)
   //calculando a idade
   idade <- ano_atual - ano_nasc
   se idade >= 18 entao
     escreval("Voc� � maior, j� possui carteira de motorista?")
   sen�o
     escreval("Infelizmente voc� n�o tem carteira de motorista, voc� � um menor de idade")
   fimse

Fimalgoritmo