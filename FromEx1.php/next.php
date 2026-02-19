<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    $name=$_POST["username"]??$_GET["username"]?? "";

    ?>
    
    <h1>Welcome, <?= $name ?>!</h1>
   <p> You have successfully moved to the next page.</p>
    <a href="index.php">Back to Register</a>


  
</body>
</html>