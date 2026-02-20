<?php
include 'db.php';
?>
<?php
session_start();
$u_name=$_SESSION['username'];
$u_id=$_SESSION['u_id'];

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
    <h3>Welcome <?= $u_name?></h3>
    <?php
    if($u_name!=""){
        ?>
        <a href="home.php"><button>Home</button></a>

         <a href="profile.php"><button>Profile</button></a>

        <a href="logout.php"><button>Logout</button></a><br><br>
        <a href="add.php"><button>Add New Post</button></a>

        <?php
    }
    ?>
 

   
    <?php
    $status=0;
    $sql="select * from posts where user_id='$u_id'  order by post_date desc";
    $result=mysqli_query($conn,$sql);

    
    if($result){
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                
             ?>
              <div class='col-8'>
        <div class='d-flex justify-content-between align-items-center mb-2 '>
    <div><strong>Title :  <?= $row['title'] ?></strong></div>
    <div class="text-muted">Date :  <?= $row['post_date'] ?> </div>
</div>

 <div class='d-flex justify-content-between align-items-center mb-2 '>

<div><strong>Content </strong> (<?= $row['status']==0 ? "Public" : "Private" ?>)<br><hr> <?= $row['content'] ?></div><br><hr>
<div>        <a href="edit.php?id=<?= $row['id'] ?>"><button>Edit </button></a>
        <a href="delete.php?id=<?=  $row['id']?>"><button>Delete </button></a>

</div>
    
</div>
    

    </div>
             <hr>
             
             <?php
            }
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>