<?php

    include ("um.php");

    $id7["Motorista"] = "Jason";
    $id7["Passageiro1"] = "Bonder";
    $id7["Passageiro2"] = "Júnior";

    $id1002["Motorista"] = "Ashe";
    $id1002["Passageiro1"] = "Ketty";

    
    $id300["Motorista"] = "Zeca";
    $id300["Passageiro1"] = "herculano";
    $id300["Passageiro2"] = "Krateus";
    $id300["Passageiro3"] = "Arialdo";

    $id3["Motorista"] = "Jef";
    $id3["Passageiro1"] = "Jen";
    $id3["Passageiro2"] = "Jet";

    $carros[7] = $id7;
    $carros[300] = $id300;
    $carros[1002] = $id1002;

    echo $carros[7]["Motorista"]."<br>";
    echo $carros[300]["Motorista"]."<br>";
    echo $carros[1002]["Motorista"]."<br><br>";

    echo "ID 300 passageiros:<br>";
    for($i = 1; $i <= 3; $i++)
    {
        echo $carros[300]["Passageiro".$i]."<br>";
    }

    foreach($id1002 as $var)
    {
        echo $var . " ALOW AQUI É DO FOREACH <br>";
    }

    $j = 1;
    while($j <= 3)
    {
        echo $carros[300]["Passageiro".$j]."<br>";
        $j = $j + 1;
    }

    echo "<br> aqui o do dowhile: <br>";
    $k = 1;
    do{
        echo $carros[300]["Passageiro".$k]."<br>";
        $k++;
    } while($k <= 3);

    echo "o numeros de pessoas do carro 1002 é: ". count($carros[1002]);

    echo cabeNoCarro(10);

    function cabeNoCarro($numeroDeFilhos){
        if($numeroDeFilhos < 3)
        {
            echo "<br>Cabe em um carro<br>";
        }
        else{
            echo "<br>Pegue um onibus<br>";
        }
    }

    function Soma($n1, $n2)
    {
       return $n1 + $n2;
    }

    $calculos[0] = Soma(3, 5);
    $calculos[1] = Soma(10, 12);
    $calculos[2] = Soma(2910, 19201);
    $calculos[3] = cabeNoCarro(6);

    foreach($calculos  as $Tempo)
    {
        echo $Tempo;
    }

    echo "<br><br><br>aqui vai ficar a aula de hoje:<br><br><br>";

    $frase =  "Pedrin é muito FALANte";
    $aluno =  "pepepepe pepe pepezinho";

    $Nome = "Pedrinho Pepezinho Cacetinho Falante";
 
    echo strtolower($frase) . "<br>";
    echo strtoupper($frase) . "<br>";

    echo ucfirst($aluno) . "<br>";
    echo ucwords($aluno) . "<br>";

    echo var_dump(str_split($Nome, 5)) . "<br><br>";
    echo var_dump(explode(" ", $Nome)) . "<br>";

    echo strlen($frase);

    pao();
?>