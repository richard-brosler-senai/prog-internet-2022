Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 28/05/2022
Var
// Se��o de Declara��es das vari�veis 
  intNSeq : inteiro
  intI, intNumAnt, intNumAntAnt, intApoio : inteiro
Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
  escreval("Sequ�ncia de Fibonacci")
  escreval("Digite o termo desejado da sequ�ncia (maior que 4):")
  leia (intNSeq)
  intNumAnt := 1   //segundo termo
  intNumAntAnt := 0 //primeiro termo
  escreva(intNumAntAnt,", ",intNumAnt)
  para intI de 3 ate intNSeq faca //a partir do 3 termo
    escreva(",", intNumAnt + intNumAntAnt)
    intApoio := intNumAntAnt
    intNumAntAnt := intNumAnt
    intNumAnt := intNumAnt + intApoio
  fimpara
Fimalgoritmo