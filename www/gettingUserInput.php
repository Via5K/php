<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CODE</title>
</head>
<body>
    <h1>Enter Your full Name:</h1>
    <form action="./gettingUserInput.php" method="get">
        Full Name: <input type="text" name = "fullName">
        <input type="submit">
    </form>
    <br>
    <?php
    echo $_GET["fullname"];
    ?>
    
</body>
</html>