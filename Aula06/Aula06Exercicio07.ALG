Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 09/06/2022
Var
// Se��o de Declara��es das vari�veis 
  pessoa : vetor[1..20] de inteiro
  signos : vetor[1..12] de caracter
  ultdia : vetor[1..12] de inteiro
  i, vlr, dd, mm : inteiro
  signoPessoa : caracter
Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
  //montando a tabela do ultimo dia e do signo
  signos[1] <- "Capric�rnio"
  signos[2] <- "Aqu�rio"
  signos[3] <- "Peixes"
  signos[4] <- "�ries"
  signos[5] <- "Touro"
  signos[6] <- "G�meos"
  signos[7] <- "C�ncer"
  signos[8] <- "Le�o"
  signos[9] <- "Virgem"
  signos[10] <- "Libra"
  signos[11] <- "Escorpi�o"
  signos[12] <- "Sagit�rio"
  ultDia[1] <- 20
  ultDia[2] <- 19
  ultDia[3] <- 20
  ultDia[4] <- 20
  ultDia[5] <- 20
  ultDia[6] <- 20
  ultDia[7] <- 21
  ultDia[8] <- 22
  ultDia[9] <- 22
  ultDia[10] <- 22
  ultDia[11] <- 21
  ultDia[12] <- 21
  //Colocando aleat�rio
  aleatorio on
  //Determinando o aleat�rio entre 1 e 31
  aleatorio 1, 31
  //La�o de repeti��o para "cadastrar" os dias/meses
  para i de 1 ate 20 faca
    //pegando o dia
    leia(dd)
    //pegando o m�s
    leia(mm)
    //For�ando o m�s a ser entre 1 e 12 (o aleat�rio vai de 1 a 31)
    mm <- mm mod 12
    //Se for m�s 12 o m�dulo volta zero
    se mm=0 entao
      mm<-12
    fimse
    //verificando a quest�o de dias com 30, 31 ou 28
    //n�o estou considerando o ano bissexto
    escolha mm
    caso 2
      dd <- dd mod 28
      se dd=0 entao
         dd <- 28
      fimse
    caso 4,6,9,11
      dd <- dd mod 30
      se dd=0 entao
         dd <- 30
      fimse
    fimescolha
    pessoa[i] <- dd * 100 + mm
  fimpara
  aleatorio off
  
  para i de 1 ate 20 faca
   dd <- pessoa[i] div 100
   mm <- pessoa[i] mod 100
   //Se o dia for maior, aumentamos 1 m�s
   se ( ultDia[mm] < dd ) entao
     mm <- ( mm + 1 ) mod 12
     //se o mm + 1 der 12 o resto ser� zero
   fimse
   //nesse caso temos que testar e deixar como 12
   se ( mm = 0 ) entao
     mm <- 12
   fimse
   //agora podemos pegar o signo
   signoPessoa <- signos[mm]
   escreval(i, " - ", pessoa[i]," - ", signoPessoa)
  fimpara
Fimalgoritmo