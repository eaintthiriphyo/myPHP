<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
 


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

  Username : <input type="text" name="username" ><br><br>
    Password : <input type="text" name="password" ><br><br>
    Confirm Password : <input type="text" name="confirm_password" ><br><br>
    <button type="submit" name="action" value="confirm">Confirm</button>
     <button type="submit" name="action" value="reset">Reset</button><br><br>


   
  </form>

  <?php
  $name="";
  $pwd="";
  $confirm_pwd="";
  $isValidate=false;

  if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=htmlspecialchars(stripcslashes(trim($_POST["username"]??"")));
     $pwd=htmlspecialchars(stripcslashes(trim($_POST["password"]??"")));
     $confirm_pwd=htmlspecialchars(stripcslashes(trim($_POST["confirm_password"]??"")));


       if((($_POST["action"]??" ")=="reset")){
        $name="";
        $pwd="";
        exit();

     }
     try{
        if($name=="" || $pwd=="" ||  $confirm_pwd==""){
        throw new Exception("Username and Password and confirm password required");

        }

        if (!preg_match("/^(?=.*[A-Za-z])(?=.*[0-9])(?=.*[@_.-])[A-Za-z0-9@_.-]{8,}$/", $pwd)) {
    throw new Exception("Password must be at least 8 characters and only contain letters, numbers, or @_.-");
}

        

        if(!($pwd===$confirm_pwd)){
            throw new Exception("Password and confirm password must be same");

        }

    
     
     }catch(Exception $e){
        echo "Error : ".$e->getMessage();
        $isValidate=true;
        exit();
     }

     
 if(!$isValidate && (($_POST["action"]??" ")=="confirm")){
        echo "<h2>Submitted Data:</h2>";
         echo "<h3>Username :$name</h3>";
         echo "<h3>Password :$pwd</h3>";
         ?>
             <a href="next.php?username=<?= $name ?>" > Sent </a>
             <form method="post" action="next.php">
            <input type="hidden" name="username" value="<?=$name?>">

             <button type="submit">Ok</button>
             </form>

         <?php

     }

   
  }
  ?>

 

</body>
</html>