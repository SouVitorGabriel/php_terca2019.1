<?php
    $texto = "Texto";
    $numero = 42;
    $verdeiro =  true;

    $nome1 = $_POST["identificador1"]; 
    $nome2 = $_POST["identificador2"];
    $numero1 = $_POST["numero1"];
    $numero2 =$_POST["numero2"];

    $nomes = array($nome1, $nome2);
    $numeros = array($numero1, $numero2);
?>

<html>
    <head>
        <title>Bem vindo</title>

        <style>
            body{
                background-color: black;
                color : white;
            }
        </style>
    </head>
    <body>
        <h2>Bem vindo, <?php echo "$nomes[0]";?></h2>
        <h3>Seu numero é <?php echo "$numeros[0]";?></h3>
        <h2>Bem vindo, <?php echo $nomes[1];?></h2>
        <h3>Seu numero é <?php echo $numero1[1];?></h3>
    </body>
</html>