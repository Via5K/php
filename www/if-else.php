<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else Statements</title>
</head>
<body>

    <form action="./if-else.php" method="post">
    You Male? <input type="text" name="gender" placeholder="Enter True False"> <br>
    You Tall? <input type="text" name="tall" placeholder="Enter True False"> <br>
    <input type="submit">
    </form>


    <?php
        // $isFail = true;
        // if($isFail){
        //     echo "You have failed the exam";
        //     echo "<br>";
        // }
        // else{
        //     echo "You have passed the exam but failed life";
        // }
        
        // $isMale = "a";
        $isMale = "a";
        $isTall = false;
        if($isMale!=true || $isMale!=false && $isTall!=false || $isTall!=true ){
            echo "Ahh!! I don't know what you are and what's your height.<br>";
        }
        else if($isMale && $isTall){
            echo "You are Tall and Male <br>";
        }
        else if($isMale && !$isTall){
            echo "You are Male but small <br>";
        }
        else if(!$isMale && $isTall){
            echo "You are a woman and You are Tall <br>";
        }
        else{
            echo "You are a woman and You are small <br>";
        }

        echo "<br><br>Finding Maximum of 2 numbers<br>";
        
        function getMax($num1, $num2){
            if($num1>$num2) return $num1;
            else if ($num1==$num2) return $num1;
            else return $num2;
        }
        echo getMax(3,43);
    ?>
</body>
</html>