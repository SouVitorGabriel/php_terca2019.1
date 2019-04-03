<?php
    $emailIdentificador = "pepezinho42@gmail.com"

    if ($emailIdentificador == "v.gabriel@ctrlplay.com.br")
    {
        $usuario = "Bielzin Make-Lover Vraau";
    }
    else if ($emailIdentificador == "pepezinho42@gmail.com")
    {
        $usuario = "Pedrin AUTOESTIMA temer";
    }


    
    
?>

<html>
    <head>
        <title>Bem vindo, <?php echo "$usuario";?></title>

        <style>
            body{
                background-color: black;
                color : white;
            }
        </style>
    </head>
    <body>
        <h2>Bem vindo, <?php echo "$usuario";?></h2>
    </body>
</html>