<?php
  $foo="bob";
  $bar=&$foo;

  $bar="My name is $bar";
  echo $bar . "<br>";
  echo $foo . "<br>"; 

  $foo="alterei o conteúdo";

  echo $bar . "<br>";
  echo $foo . "<br>"; 