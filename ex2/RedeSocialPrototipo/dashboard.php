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
                $sql = "SELECT friendof FROM friends WHERE isfriend = $id";
        
                $resultado = $db->query($sql);
                
                $ff = array();
                $num = 0;
                while ($linha = $resultado->fetch(PDO::FETCH_OBJ))
                {
                    array_push($ff, $linha->friendof);
                }
            }
            catch (PDOException $error)
            {
                echo "Recuperar falhou, erro: " . $error->getMessage();
            }

            foreach($ff as $users)
            {
                try
                {
                    $sql = "SELECT name FROM tbl_registered_users WHERE id = $users";
            
                    $resultado = $db->query($sql);
                    
                    $ff = array();
                    $num = 0;
                    while ($linha = $resultado->fetch(PDO::FETCH_OBJ))
                    {
                        echo "$linha->name <br>";
                    }

                }
                catch (PDOException $error)
                {
                    echo "Recuperar falhou, erro: " . $error->getMessage();
                } 
            }

        ?>
    <br>
    <form action="" method="POST"
            onsubmit="return loginvalidation();">


            <div class="row">
                <label>Email</label> <span id="email_error"></span>
                <div>
                    <input type="text" name="email" id="email"
                        class="form-control"
                        placeholder="Enter your Email ID">
                </div>
            </div>
            <div class="row">
                <div>
                    <button type="submit" name="submit"
                        class="btn login">Login</button>
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