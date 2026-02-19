<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION["username"])){
        echo "User name is ".$_SESSION["username"];
         echo "User role is  ".$_SESSION["role"];

    }else{
        echo "Session deleted";
    }
    ?>
    <a href="destroy.php">Delete</a>
</body>
</html>