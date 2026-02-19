<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 



    <form method="post">
       <textarea name="text1"><?  echo $text ?? "" ;?></textarea>
        <button name="action" value="1" type="submit">1</button>
        <button name="action" value="1" type="submit">2</button>
        <button name="action" value="1" type="submit">3</button>
        <button name="action" value="1" type="submit">4</button>
        <button name="action" value="1" type="submit">5</button>
        <button name="action" value="6" type="submit">6</button>
        <button name="action" value="7" type="submit">7</button>
        <button name="action" value="8" type="submit">8</button>
        <button name="action" value="9" type="submit">9</button>
         <button name="action" value="0" type="submit">0</button>


    </form>

    <?php
   
    $text="";
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $text=$_POST["text1"]??"";
        $text=$text."1";
    }

    ?>
</body>
</html>