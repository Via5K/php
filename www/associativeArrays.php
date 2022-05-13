<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <form action="./associativeArrays.php" method="post">
        <input type="text" placeholder="Name" name="studentName"> <br> <br>
        <input type="submit">
    </form>

<?php
$grades = array("Neeraj"=>10, "Andrew"=>10, "Mark"=>8.7);
echo $grades[$_POST["studentName"]];
?>
</body>
</html>