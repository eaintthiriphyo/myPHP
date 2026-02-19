<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Shape Area Calculator</h4>
    <p>Choose a shape,enter its demensions and submit</p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
       Shape :  <select name="shape" id="">

        <option value="Circle">Circle</option>
      <option value="Rectangle">Rectangle</option>
        <option value="Triangle">Triangle</option>

        </select><br><br>

        Width(Rectangle):<input type="number" name="width">
        Height(Rectangle):<input type="number" name="height"><br><br>
        Radius(Circle):<input type="number" name="radius"><br><br>
        Base(Circle):<input type="number" name="base"><br><br>



        <input type="submit" value="Compute Area">

    </form>
</body>
</html>