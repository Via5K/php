<?php
    setcookie("name","neeraj");
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    if(isSet($_COOKIE['name'])){
        echo "Welcome, ".$_COOKIE["name"];
    }else{
        echo "Sorry!! No cookie found";
    }
    ?>   
</body>
</html>