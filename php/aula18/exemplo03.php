<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nesse trecho de código iremos abordar um exemplo
        de mesclagem de html e php.
    </p>
    <!-- Estou iniciando uma variável php para mudar o 
        código html -->
    <?php
        $flag = false;
        echo "<p>Logo abaixo iremos mudar conforme o conteúdo da variável flag<p>";
        if ($flag) {
            echo "<p>Esse texto só vai aparecer se o flag estiver como true.</p>";
        } else { 
        echo "<p>Esse texto só vai aparecer se o flag estiver como falso.</p>";
        } 
    ?>
</body>
</html>