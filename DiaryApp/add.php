<?php
include 'db.php';

if(isset($_POST['save'])){
    $date=$_POST['diary_date'];
    $content=$_POST['content'];

    $sql="insert into diary (diary_date,content) values ('$date','$content')";

    mysqli_query($conn ,$sql);
    header("location:index.php");
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