<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CODE</title>
</head>
<body>
    <?php
        $name = "Jone Thomson";
        echo "My name is $name <br> My name's length is";
        echo strlen($name);
        echo "<br>Converted to upper case ";
        echo strtoupper($name);
        echo "<br>Converted to lower case ";
        echo strtolower($name);        
        echo "<br>Word at 3rd index is ";
        echo $name[3];
        echo "<br>Replacing the string from Jone to Mark: ";
        echo str_replace("Jone","Mark",$name);
        echo "<br>Grabbing Substring ";
        echo substr($name, 4);
    ?>
    
</body>
</html>