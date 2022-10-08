<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
</head>
<body>
    <!-- Primeiro exercício -->
    <fieldset>
        <legend>Primeiro Exercício:</legend>
        <p>Meu nome é <?="Richard Brosler"?></p>
        <p>Meu nome é <?php echo "Richard Brosler"; ?></p>
    </fieldset>
    <!-- Segundo exercício -->
    <fieldset>
        <legend>Segundo Exercício:</legend>
        <p>O produto de 28 x 43 é <?=28*43?></p>
    </fieldset>
    <!-- terceiro exercício -->
    <fieldset>
        <legend>Terceiro Exercício:</legend>
        <p>A média entre 8,9 e 7 é <?php echo (8+9+7)/3; ?></p>
    </fieldset>
    <!-- quarto exercício -->
    <fieldset>
        <legend>Quarto Exercício:</legend>
        <p>O valor é <?=$vlr=10?>.</p>
        <p>O valor é <?php echo $vlr=10; ?>.</p>
        <p>O antecessor é <?=$vlr-1?> e o sucessor é <?=$vlr+1?>.</p>
    </fieldset>
    <!-- quinto exercício -->
    <fieldset>
        <legend>Quinto Exercício:</legend>
        <?php
            $vlr1 = 10;
            $vlr2 = 5;
            $vlr3 = $vlr1 + $vlr2;
        ?>
        <p>Iremos somar os números <?=$vlr1?> e <?=$vlr2?>.</p>
        <p>A soma é <?=$vlr3?>.</p>
    </fieldset>
    <!-- sexto exercício -->
    <fieldset>
        <legend>Sexto Exercício:</legend>
        <p>O número real escolhido é <?=$vlr=2022.02?></p>
        <p>A terça parte do número é <?=round($vlr/3,2)?>.</p>
    </fieldset>
    <!-- sexto exercício -->
    <fieldset>
        <legend>Sexto Exercício:</legend>
        <p>O número real escolhido é <?=$vlr=2022.02?></p>
        <p>A terça parte do número é <?=round($vlr/3,2)?>.</p>
    </fieldset> 
    <!-- sétimo exercício -->
    <fieldset>
        <legend>Sétimo Exercício:</legend>
        <p>Tendo os valores <?=$vlr1=10?> e <?=$vlr2=2?> </p>
        <p>Tendo os valores 
        <?php 
          $vlr1=10; $vlr2=2; 
          echo "$vlr1 e $vlr2";
        ?> </p>
        <p>O dividendo é <?=$vlr1?> 
            o divisor é <?=$vlr2?>.</p>
        <p>O quociente é <?=intdiv($vlr1,$vlr2)?> 
         o resto é <?=$vlr1 % $vlr2?>.</p>
    </fieldset>
    <!-- oitavo exercício -->
    <fieldset>
        <legend>Oitavo Exercício:</legend>
        <p>Tendo o valor <?=$vlr1=123?>.</p>
        <?php
            $c=intdiv($vlr1,100); 
            $d=intdiv($vlr1%100,10); 
            $u=$vlr1%10;
            $resp = $u*100 + $d*10 + $c;
        ?>
        <p>O valor invertido é <?=$resp?>.</p>
        <p>O valor invertido é <?=strrev($vlr1)?>.</p>
    </fieldset>
    <!-- nono exercício -->
    <fieldset>
        <legend>Nono Exercício:</legend>
        <p>
        <?php
            $virgula="";
            for($vlr=11;$vlr<=99;$vlr++){
                $d = intdiv($vlr,10);
                if ( $vlr%10!=0 && $vlr%$d==0 ){
                    echo $virgula. $vlr;
                    $virgula=", ";
                }
            }
        ?>
        </p>
    </fieldset>
    <!-- décimo exercício -->
    <fieldset>
        <legend>Décimo Exercício:</legend>
        <p>
        <?php
            $virgula="";
            for($vlr=0;$vlr<20;$vlr++){
                $numero = rand(0,20);
                if ( $numero ** 2 < 225 ){
                    echo $virgula. $numero;
                    $virgula=", ";
                }
            }
        ?>
        </p>
    </fieldset>
</body>
</html>
<?php
