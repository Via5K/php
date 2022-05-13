<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" value="male" name="gender[]"> Male <br>
        <input type="checkbox" value="female" name="gender[]"> Female <br>
        <input type="checkbox" value="binary" name="gender[]"> Binary <br>
        <input type="submit">
    </form>

    <?php 
        $current = $_POST["gender"];
        echo $current[1];
    ?>
</body>
</html>