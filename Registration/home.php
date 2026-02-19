<?php
include 'db.php';
session_start();
if(!isset($_SESSION['username'])){
    header("Location:login.php");
}
$user=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>Welcome : <?= $user ?>   <h3>
        <a href="logout.php">Logout</a>
</body>
</html>