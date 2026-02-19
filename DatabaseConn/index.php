<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test_db";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);

}

echo "Connected successfully";

$sql="select * from users";

$result=$conn->query($sql);

if($result && $result->num_rows>0){
    echo "Users Tables : <br>";
    foreach($result as $row){
        echo "Name is ".$row['name']."<br>";
    }
}
$conn->close();

?>