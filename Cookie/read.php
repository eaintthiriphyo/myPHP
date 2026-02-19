<?php     //reading cookie
if(isset($_COOKIE["username"])) {
echo "Welcome, " . $_COOKIE["username"];
} else {
echo "Cookie not found.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Back</a>
<a href="delete.php">Delete</a>
</body>
</html>
