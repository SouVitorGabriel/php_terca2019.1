<?php

/* if(empty($_COOKIE["nomeUser"]))
{
    echo "Bem-vindo ANÔNIMO!";
}
else
{
    echo "Bem-vindo " . $_COOKIE["nomeUser"] . "!";
}

if(empty($_COOKIE["nomeDoNovoUser"]))
{
    echo "Bem-vindo ANÔNIMO!";
}
else
{
    echo "Bem-vindo " . $_COOKIE["nomeDoNovoUser"] . "!";
} */

session_start();

if (empty($_SESSION["nomeUser"]) || empty($_SESSION["loginUser"]) )
{
        echo "Olar seu ANÔNIMO";
    }
else
{
    echo "Bem-vindo " .  $_SESSION["nomeUser"] . ", seu login é: " . $_SESSION["loginUser"];
}
?>