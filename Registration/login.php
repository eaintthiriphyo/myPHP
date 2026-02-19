<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
include 'db.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from registration where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);

if($result){
    if(mysqli_num_rows($result)>0){
        echo "Login Ok";
        $row=mysqli_fetch_assoc($result);
        session_start();

        $_SESSION['username']=$username;
        $_SESSION['u_id']=$row[$id];
        header("Location:../Diary/index.php");
    
    }else{
        echo "Invalid Login";
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



    
<div class="container mt-5">
    <form action="login.php" method="post">
        <div class="col-4 mx-auto p-3 bg-info">
        <h3>Registration Form</h3>
        <div class="mb-3">
            <label for="username">User name</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>