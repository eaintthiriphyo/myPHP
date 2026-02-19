<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Enter numbers separated by commas,space,or new line</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

    <textarea name="text"></textarea>

    <br><br>
    <input type="submit" value="Find Largest">
    <button type="submit" name="action" value="reset">Reset</button>

    </form>
    
    <?php
    $text="";
    $largestNumber="";
  

    if($_SERVER["REQUEST_METHOD"]==="POST" && ($_POST["action"] ??'')=="reset"){

        $text="";
    }

    else if($_SERVER["REQUEST_METHOD"]=="POST"){
        $text=htmlspecialchars(stripslashes(trim($_POST["text"])));

        $parts=explode(",",$text);
        $numbers=array_map("intval",$parts);
        
        $largestNumber=$numbers[0];
        foreach($numbers as $num){
            if($num>$largestNumber){
                $largestNumber=$num;
            }
        }

       
        echo "<h2> Largest number is : $largestNumber</h2> ";
    
    }
    

    
    ?>
    <?php include "exinclude.php"; ?>
</body>
</html>