<?php
include 'db.php';
session_start();
$u_id=$_SESSION['u_id'];
$u_name=$_SESSION['username'];
$id=$_GET['id'];
$sql="select * from diary where id=$id";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$date=$row['diary_date'];
$content=$row['content'];


if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['update'])){

$date  = $_POST['diary_date'] ?? '';
 $content=$_POST['content']?? '';
 if($date===''|| $content===''){
    throw new Exception("Data and content are requird.");
 }

 $d=DateTime::createFromFormat("Y-m-d",$date);
 if(!$d||$d->format('Y-m-d')!==$date){
    throw new Exception("Invalid date format exception YYYY-MM-DD.");
 }

 $stmt=$conn->prepare("Update diary SET diary_date=?,content=?,user_id=? WHERE id=?");
 $stmt->bind_param('ssii',$date,$content,$u_id,$id);
 $stmt->execute();
 $stmt->close();
 header("Location:home.php");
 exit;
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

    <h3>Edit Diary Entry : <?=$u_name ?></h3>
    <form method="post" >

    Date :<br>
     <input type="date" name="diary_date"  value="<?= $date ?>" >
     <br><br>
     Content : <br>
     <textarea name="content" rows="6" cols="50"> <?= $content ?></textarea>
     <br><br>
     <button type="submit" name="update">Update</button>



    </form>
</body>
</html>