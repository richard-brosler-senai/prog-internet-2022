<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo de uso do form no php</title>
</head>

<body>
  <form action="#" method="post">
    <div>
      <label for="idnome">Digite seu nome:</label>
      <input type="text" name="nome" id="idnome">
    </div>
    <div>
      <label for="ididade">Digite sua idade:</label>
      <input type="number" name="idade" id="ididade">
    </div>
    <input type="submit" value="Enviar">
    &nbsp;
    <input type="reset" value="Limpar">
  </form>
  <?php
    date_default_timezone_set('America/Sao_Paulo');
    if ($_POST){
      echo "<hr>";
      $var = 15 /  $_REQUEST["idade"];
      echo date("d-m-Y H:i:s") . " $var " . $_REQUEST["nome"];
    }
  ?>
</body>

</html>