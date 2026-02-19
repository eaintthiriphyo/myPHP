<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


        <?php
            $name="";
            $email="";
            $isValid=false;
            $nameError="";
            $emailError="";

            if($_SERVER["REQUEST_METHOD"]=="POST"){
                // $name=$_POST["name"]??""; 
                // $email=$_POST["email"]??"";


                $name=htmlspecialchars(stripslashes(trim($_POST["name"])));
                $email=htmlspecialchars(stripslashes(trim($_POST['email'])));


                if($name==""){
                    $nameError="Name must be required";

                }else if(!preg_match("/[a-zA-Z]+$/",$name)){
                    $nameError="Name must be characters only";
                }

                 if($email==""){
                    $emailError="Email must be requird";
                }else if(!preg_match("/^[a-zA-Z0-9-+_]+@[a-zA-Z0-9._]+\.[a-zA-Z]{2,}$/",$email)){
                    $emailError="Email Format is wrong";

                }

               
            }
            //  if($name== "" || $email== ""){
            //         $isValid=true;
            //     }
        ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name:<input type="text" name="name">
      <?php if ($nameError): ?>
    <span class="error" style="color:red">
        <?= $nameError ?>
    </span>
<?php endif; ?>

<br><br>

      
        Email:<input type="text" name="email">
        <?php if($emailError): ?>
        <span class="error"  style="color:red"><?= $emailError ?></span>
        <?php endif; ?>
        
        
        
        <br><br>
        <input type="submit" value="submit">
        </form>

        <?php
       
    //    if(! $isValid){
    //     echo "<h1>Your Name is : $name</h1>";
    //     echo "<h1>Your Email is : $email</h1>";
    //    }

    
     echo "<h1>Your Name is : $name</h1>";
        echo "<h1>Your Email is : $email</h1>";
            
        ?>
          
        
</body>
</html>