<?php
    setcookie("CookieTeste", "abriuOSite");

    echo $_COOKIE["CookieTeste"];

    setcookie("CookieTeste2", "abriuOSite2");

    echo $_COOKIE["CookieTeste2"];

    setcookie("nomeUser", "Predrin");

    setcookie("nomeUser", "", time()+ 0);

    setcookie("nomeDoNovoUser", "Vitor", time()+10);

    session_start();

    
    $_SESSION["nomeUser"] = "Bielzin";
    
    //substituição
    $_SESSION["nomeUser"] = "Predrin";
    $_SESSION["loginUser"] = "MKLV";


    //apaga os dados da sessão
    session_unset();

    //destroi a sessão
    session_destroy();


?>