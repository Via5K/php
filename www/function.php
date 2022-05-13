<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    
<?php
function Hello($name){
    //function body
    echo "Hello $name!!";
}

function add($num1, $num2){
    $sum = $num1+$num2;
    return $sum;
}
Hello("Neeraj"); echo "<br>";
Hello("Mark"); echo "<br>";
Hello("David"); echo "<br>";
Hello("Tom"); echo "<br>";


echo add(2,3);
?>
</body>
</html>