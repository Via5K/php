<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <form action="include.php" method="POST">
    Enter about Via5k: <input type="text" name="data"> <br> <br>
    <input type="submit"> <br>
</form>

<?php
    echo "<br><br><br>";
    include "header.php";
    echo "<h2>";
    echo $_POST["data"];
    echo "</h2>";
    include "footer.php";

    // Edit variable of other files and use fucntions of other php files.
    echo "<br><br><br><br><br><br>";
    echo "New web <br>";
    $authorName = "Neeraj";
    $authorArea = "Technology"; 
    $totalPosts = 10;
    include "authorDetail.php";
    include "author.php";
    $blogOwner = "VIASK";
    blogOwnerInfo ($blogOwner);
    info($authorName, $authorArea, $totalPosts);
?>



</body>
</html>