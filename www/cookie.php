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
    setcookie("key","value");
    if(isSet($_COOKIE['key'])){
        echo "Welcome, ".$_COOKIE["key"];
    }else{
        echo "Sorry!!";
    }
    ?>
</body>
</html>