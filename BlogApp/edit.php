<?php
include 'db.php';
?>
<?php
session_start();
$u_id=$_SESSION['u_id'];


?>
<?php
  $p_id=$_GET['id'];

$sql="select * from posts where id='$p_id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$view="";
$title=$row['title'];
$content=$row['content'];
$status=$row['status'];
if($status==0){
    $view="public";
}
if($status==1){
    $view="private";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add posts</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
   <div class="container mt-3">
     <form  method="post">
            <h3>Add New Posts</h3>

        <div class="col-8 p-3 card">
            <input type="hidden" name="user_id" value="<?= $u_id ?>">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="<?= $title ?>"><br>
              <label for="content">Content</label>
              <textarea name="content" rows="5" cols="10"><?= $content ?></textarea><br>
              <label for="status">Status</label>
              <select name="status" >
                <option value="0" <?= ($view == "public") ? "selected" : "" ?>>public</option>
                  <option value="1" <?= ($view == "private") ? "selected" : "" ?>>private</option>

              </select><br>
                
                <button type="submit">Post</button>
        </div>
    </form>

   </div>


   <?php
   if($_SERVER['REQUEST_METHOD']=="POST"){
    $u_id=$_POST['user_id'];
     $title=$_POST['title'];
     $content=$_POST['content'];
     $status=(int)$_POST['status'];


  $p_id=(int)$_GET['id'];

  

$sql="update posts set title='$title',content='$content',status='$status' where id='$p_id' and user_id='$u_id'";
mysqli_query($conn,$sql);


    
    header("Location:home.php");

   }
   ?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>