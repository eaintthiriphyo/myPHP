<?php 
include 'db.php';
$p_id=$_GET['id'];
$sql="delete from posts where id='$p_id'";
mysqli_query($conn,$sql);
header(("Location:profile.php"));
?>