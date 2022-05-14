<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch()</title>
</head>
<body>

    <form action="./switch.php" method="POST">
        <input type="number" name="num"> <br>
        <input type="submit">
    </form>

    <?php
    $roll = $_POST["num"];
    switch($roll){
        case 1:
            echo"You attendance is 10<br>";
            break;
        case 2:
            echo"You attendance is 20<br>";
            break;
        case 3:
            echo"You attendance is 8<br>";
            break;
        case 4:
            echo"You attendance is 15<br>";
            break;
        case 5:
            echo"You attendance is 23<br>";
            break;
        case 6:
            echo"You attendance is 14<br>";
            break;
        case 7:
            echo"You attendance is 40<br>";
            break;
        default:
            echo "Your attendace is Not recorded<br>";
    }
    ?>
</body>
</html>