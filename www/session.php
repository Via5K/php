<?php
//this will start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <form action="./session.php" method="POST">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="submit"><br>
    </form>

    <?php 
        $username = $_POST["username"];
        $password = $_POST["password"];

        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        if(isSet($_SESSION['username'])){
            echo "Session successfully set!!";
            echo "<br>";
            echo '
            <form action="./sessionDestroy.php" method="POST">
                <button type="submit">Destroy Session</button><br>
            </form>
            ';
        }
        else{
            echo "Session <b>Not</b> set";
        }
    ?>
</body>

</html>