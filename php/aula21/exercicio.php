<?php
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $dados = json_decode(file_get_contents('php://input'));
        echo $dados->parametros;
    }
