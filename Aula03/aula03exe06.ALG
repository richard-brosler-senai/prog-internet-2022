Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Se��o de Declara��es das vari�veis 
  opcao : inteiro
  pesoNaTerra : real
  pesoNoPlaneta : real

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
  escreval("Digite o peso na terra:")
  leia(pesoNaTerra)
  escreval("Op��es de planetas")
  escreval("1 - Merc�rio")
  escreval("2 - V�nus")
  escreval("3 - Marte")
  escreval("4 - J�piter")
  escreval("5 - Saturno")
  escreval("6 - Urano")
  escreval("Digite a op��o")
  leia(opcao)
  escolha (opcao)
    caso 1
      pesoNoPlaneta := pesoNaTerra / 10 * 0.37
    caso 2
      pesoNoPlaneta := pesoNaTerra / 10 * 0.88
    caso 3
      pesoNoPlaneta := pesoNaTerra / 10 * 0.38
    caso 4
      pesoNoPlaneta := pesoNaTerra / 10 * 2.64
    caso 5
      pesoNoPlaneta := pesoNaTerra / 10 * 1.15
    caso 6
      pesoNoPlaneta := pesoNaTerra / 10 * 1.17
    outrocaso
      pesoNoPlaneta := pesoNaTerra
      escreval("Planeta n�o est� na rela��o!")
  fimescolha
  escreval("O peso no planeta � ",pesoNoPlaneta)

Fimalgoritmo