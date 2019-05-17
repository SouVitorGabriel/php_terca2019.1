<?php
    //Verifica se tem um BD no computador
    //print_r(PDO::getAvailableDrivers());

    try
    {
        $conexao = new PDO("mysql: host=localhost; dbname=phpsamples;", "root", "");

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Conectado com sucesso";
    }
    catch (PDOException $error)
    {
        echo "Conexao falhou, erro: " . $error->getMessage();
    }

    /* try
    {
        $sql = "INSERT INTO `capita`(`planeta`, `tipo`, `poderes`) VALUES ('Marte','Marciano','Pedra da mente')";

        $conexao->exec($sql);

        echo "Informações adicionadas ao BD com sucesso<br>";
    }
    catch (PDOException $error)
    {
        echo "Adicionar dados falhou, erro: " . $error->getMessage(); 
    }
 */
   /*  //criando tabelas
    try
    {
        $sql = "CREATE TABLE tbl_registered_users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            email VARCHAR(30) NOT NULL,
            password VARCHAR(50) NOT NULL)";

        $conexao->exec($sql);
        echo "Tabela criada com sucesso<br>";
    }
    catch (PDOException $error)
    {
        echo "Criação de tabela falhou, erro: " . $error->getMessage();
    }  */

    /* try
    {
        $conexao->exec("CREATE SCHEMA Marrvell");
        echo "Banco de Dados criado com sucesso";
    }
    catch (PDOException $error)
    {
        echo "Criação do BD falhou, erro: " . $error->getMessage();
    } */

?>