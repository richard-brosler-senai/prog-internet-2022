<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exemplo de HTML com PHP</title>
</head>
<body>
    <h1>Vamos começar a codar em php</h1>
    <?php
        $teste = false;
    ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quis laudantium vero libero asperiores illo consequuntur unde, quam maxime, odit sed natus nostrum quaerat, voluptatum voluptatibus eaque. Hic, amet mollitia.</p>
    <!-- Colocando o if em conjunto com o html -->
    <?php if ($teste): ?>
    <div>
        <p>Olá, só vou aparecer se o teste for verdadeiro!</p>
    </div>
    <?php else: ?>
    <div>
        <p>Olá, só vou aparecer se o teste for falso!</p>
    </div>
    <?php endif; ?>
    <!-- Colocando o mesmo código acima, porém somente com o uso do php -->
    <?php
    if ($teste){
        echo "<div>
        <p>Olá, só vou aparecer se o teste for verdadeiro!</p>
    </div>";
    } else {
        echo "<div>
        <p>Olá, só vou aparecer se o teste for verdadeiro!</p>
    </div>";
    }
    $teste2 = 015;
    ?>
</body>
</html>