<?php
    $valor = 1_000_000_000.23;
    $texto = "Olha que legal";
    $conteudo="valor";
    echo "<p>Olá ".htmlspecialchars($_REQUEST['nome'])." como você está?</p>";
    echo "<p>O limite é de ${_REQUEST['limite']}. $valor <br>";
    echo '<p>O limite é de ${_REQUEST[\'limite\']}. $valor <br>';
    echo "Mostrando o $conteudo da variavel ${$conteudo}<br>";
    echo $$conteudo."<br>";
    echo round((0.1+0.7)*10);
    $livro = "
    asdadasdas
    asdasasd
    asdasdasd
    
    asdasdasd
    asd
    asd
    asd
    asdas
    $conteudo
    das
    dasd
    asdd
    ";
    $livro2 = <<<EOT
    asadasd
    sadasd
    das
    sad
    sad
    asd
    sad
    sa
    sdasad
    dsa
    EOT;