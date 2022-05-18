<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
</head>
<body>
    <form action="databaseConnection.php" method="post">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="text" name="password" placeholder="Enter Password">
        <input type="submit">
    </form>
    

    <?php
        $domain = "localhost";
        $username = $_POST["username"];
        $password = $_POST["password"];
        // creating a connection
        $connection = mysqli_connect($domain,$username,$password);
        if($connection){
            echo "Connection Established";
        }
        else{
            echo "Connection Failed";   
        }
        echo "<br>";
    ?>
</body>
</html>