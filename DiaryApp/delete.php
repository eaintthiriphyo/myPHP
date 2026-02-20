<?php
include 'db.php';
?>

<?php
$id=$_GET['id'];
$sql="delete from diary where id=$id";
mysqli_query($conn,$sql);
header("location:home.php");
?>
