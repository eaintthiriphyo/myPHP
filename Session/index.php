<?php
session_start();
$_SESSION["username"]="Ma Ma";
$_SESSION["role"]="Admin";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<h2>Session Started</h2>
    <a href="welcome.php">Go to Session Data Page</a>
</body>
</html>