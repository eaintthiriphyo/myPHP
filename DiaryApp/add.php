<?php
include 'db.php';
session_start();
$u_id=$_SESSION['u_id'];
$u_name=$_SESSION['username'];

if(isset($_POST['save'])){
    $date=$_POST['diary_date'];
    $content=$_POST['content'];

    $sql="insert into diary (diary_date,content,user_id) values ('$date','$content','$u_id')";

    mysqli_query($conn ,$sql);
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    
    <form method="post" >
        <h3>User : <?=  $u_name?></h3>
    Date :<br>
     <input type="date" name="diary_date" require>
     <br><br>
     Content : <br>
     <textarea name="content" rows="6" cols="50" require></textarea>
     <br><br>
     <button type="submit" name="save">Save</button>



    </form>
</body>
</html>