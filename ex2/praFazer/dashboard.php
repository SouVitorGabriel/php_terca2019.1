<?php 
session_start();
include_once 'DBConnect.php';
$database = new dbConnect();

$db = $database->openConnection();
    
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashborad</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="demo-content">
    <div>
        Bem-vindo <?php echo $_SESSION["name"]; ?>
    </div>

    <div></div>
</div>
<div class="demo-content">
    <div>
        Lista de amigos:
    </div>
    <br>
    <div>
        <?php
            try
            {
                $sql = "SELECT friendof FROM friends WHERE me = $id";

                $result = $db->query($sql);

                $friends = array();
                while($linha = $result->fetch(PDO::FETCH_OBJ))
                {
                    array_push($friends, $linha->friendof);
                }
            }
            catch (PDOException $error)
            {
                echo "Recuperar falhou, erro: " . $error->getMessage();
            }

            foreach($friends as $users)
            {
                try
                {
                    $sql = "SELECT name FROM users WHERE id = $users";

                    $result = $db->query($sql);

                    $friends = array();
                    while($linha = $result->fetch(PDO::FETCH_OBJ))
                    {
                        echo "$linha->name <br><br>";
                    }
                }
                catch(PDOException $error)
                {
                    echo "Recuperar falhou, errou: " . $error->getMessage();
                }
            }
        ?>

    <br>
        <form action="" mathod="POST" onsubmit="return loginvalidation();">
            <div class="row">
                <label>Email</label> <span id="email_error"></span>
                <div>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Entre com seu email">
                </div>
            </div>

            <div class="row">
                <div>
                    <button type="submit" name="submit" class="btn login">LOGIN</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="demo-content">
    <div>
        Click para <a href="logout.php">SAIR</a>.
    </div>

    <div></div>
</div>
</body>
</html>