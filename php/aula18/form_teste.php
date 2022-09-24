<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Teste</title>
</head>

<body>
  <form action="#" method="post">
    <div>
      <label for="idNome">Digite seu Nome:</label>
      <input type="text" name="nome" id="idNome">
    </div>
    <div>
      <label for="idTelefone">Digite seu telefone:</label>
      <input type="tel" name="telefone" id="idTelefone">
    </div>
    <input type="submit" value="Enviar">
    &nbsp;
    <input type="reset" value="Limpar">
  </form>
  <?php
    if ($_POST){
      echo "<hr>";
      date_default_timezone_set('America/Sao_Paulo');
      echo date("d-m-Y H:m:s") . " - " . $_REQUEST["nome"] . " - " .$_REQUEST['telefone'];
    }
  ?>
</body>

</html>