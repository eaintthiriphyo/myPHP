<?php
include 'db.php';
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from users where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);

if($result){
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['u_id']=$row['id'];
        header("Location:home.php");
    }else{
        echo "Login failed";
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
    <form action="login.php" method="post" >
        <div class="col-4 mx-auto p-3  card">
            <h3 class="text-center">Login From</h3>
            <div class="mb-3">
                <label for="username">User Name</label>
                <input type="text" name="username" class="form-control">
            </div>
             <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="bg-primary text-white col-12">Login</button>
           <p class="text-center">Don't have an account ?  <a href="signup.php">SignUp</a></p>
        </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>