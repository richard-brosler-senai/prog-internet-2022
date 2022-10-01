<?php
    $valor = 0;
    $msg = "";
    switch($valor){
        case 0: $msg .= "Olá ";
        case 1: $msg .= "Meu nome é ";
        case 2: $msg .= "Richard, " ;
        case 3: $msg .= "como ";
        case 4: $msg .= "você se chama? ";
        case 10: $msg .= "Acabou o texto. rsss";
    }
    echo $msg;