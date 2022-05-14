<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
    $arr = array(1,2,3,4,5,6,7,8,9,0,1,2,123,123,123,123,12,31,3,143,24,53,6,346,35,73,52,35,26,34,63,452,534,4,635);
        echo "<br>For Loop<br>";
        for($i=0;$i<count($arr);$i++){
            echo "At position [$i] = $arr[$i] <br>";
        }
    ?>
</body>
</html>