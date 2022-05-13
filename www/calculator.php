<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CALCULATOR</title>
</head>
<body>
    <h1>Sum:</h1>
    <form action="./calculator.php" method="get">
        NUM1: <input type="number" name = "num1"> <br>
        NUM2: <input type="number" name = "num2"> <br>
        <input type="submit">
    </form>

    <?php
        echo $_GET["num1"]+$_GET["num2"];
    ?>
</body>
</html>