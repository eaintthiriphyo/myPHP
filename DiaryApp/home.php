<?php
include "db.php";
session_start();
$u_id=$_SESSION['u_id'];
$u_name=$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <h3>Welcome : <?= $u_name ?></h3>
    <a href="logout.php"><button >Logout</button></a>
    <br><br>
    <a href="add.php">Add New Diary : </a>
    <br><br>

    <?php


    $sql="select * from diary where user_id='$u_id' order by diary_date desc";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){

        $id=(int)$row['id'];
        echo "Date : ".$row['diary_date']."<br>";
        echo "Note : ".$row['content']."<br>";
         echo "<a href=\"edit.php?id={$id}\">Edit</a>  |  ";

        echo "<a href=\"delete.php?id={$id}\" onclick=\"return confirm('Are you sure you want to delete this diary entry?')\">Delete</a> " ;
        echo "<hr>";
    }
    
    ?>
</body>
</html>