<?php
$succeed=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=="POST"){
include 'db.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from users where username='$username'";
$result=mysqli_query($conn,$sql);

if($result){
    if(mysqli_num_rows($result)>0){
        // echo "already exist";
        $user=1;
    }else{
        $sql="insert into users (username,password) values ('$username','$password')";

$result=mysqli_query($conn,$sql);
if($result){
// echo "data inserted";
$succeed=1;
header("Location:login.php");
}else{
    die(mysqli_error($conn));
}
    }
}


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<?php
if($user){
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> User Already exist
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<?php
if($succeed){
   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulation!</strong> Data inserted
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

    
<div class="container mt-5">
    <form action="signup.php" method="post">
        <div class="col-4 mx-auto p-3 card">
        <h3 class="text-center">Registration Form</h3>
        <div class="mb-3">
            <label for="username">User name</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
         <p class="text-center">If you already have an account  ? ,<a href="login.php">Login</a></p>


    </div>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>