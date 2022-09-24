<?php
  $vari01 = "richard";
  $vari02 = "Olá ${vari01}s, tudo bem?";
  $vari03 = 'olá $vari01, tudo bem?';
//   Aqui abaixo estou solicitando ao sistema operacional um dir (listar o diretório)
  $vari04 = `dir *.*`; //usei a crase
  
  echo $vari02 . "<br>";
  echo $vari03 . "<br>";
  echo $vari04;