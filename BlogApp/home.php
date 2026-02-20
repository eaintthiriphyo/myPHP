<?php
ob_start();
include 'db.php';
?>
<?php
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['u_id'])){
$u_name=$_SESSION['username'];
$u_id=$_SESSION['u_id'];
}else{
$u_name="";
$u_id="";

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
    <div class="container">
        <div class="mx-auto">

    
    <h3>Welcome <?= $u_name?></h3>

    <?php
    if($u_name!="" && $u_id!=""){
        ?>
         <a href="profile.php"><button>Profile</button></a>

        <a href="logout.php"><button>Logout</button></a><br><br>
        <a href="add.php"><button>Add New Post</button></a>

        <?php
    }else{
        ?>
         <a href="login.php"><button>Login</button></a>
        <?php
    }
    ?>
 

   
    <?php
    $status=0;
    $sql="select posts.* ,users.username from posts inner join users on posts.user_id=users.id where status='$status' order by post_date desc";
    $result=mysqli_query($conn,$sql);

   

    if($result){
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
              
             ?>
              <div class='col-10 card p-3 mb-3'>
        <div class='d-flex justify-content-between align-items-center mb-2 '>
    <div class="text-primary"><h3>Title :  <?= $row['title'] ?></h3></div>
    <div class="text-muted"> <span>(<?=   $row['username']?>)</span> Date :  <?= $row['post_date'] ?> </div>
</div>
    <div><h4>Content </h4> </div><hr>
<p>     <?= $row['content'] ?>
</p>    

   

              <div class="col-4"><button class="btn btn-primary" id="toggleComment">View Comments
</button> </div>
<div class="col-8 my-3" id='displayCmt'>
    <div class="card">
        <div class="card-body p-2">
            <div class="comments-scroll" style="max-height:130px; overflow-y:auto;">
                <?php
                    $sql1="select * from comments inner join posts on comments.post_id=posts.id where posts.id='$row[id]' order by comment_date desc";
    $result1=mysqli_query($conn,$sql1);

    if($result1){
        if(mysqli_num_rows($result1)>0){
            while($r=mysqli_fetch_assoc($result1)){
                 if($row['id'] == $r['post_id']){
                        ?>
                        <div class="mb-2 p-2 border rounded">
                            <?= htmlspecialchars($r['comment']) ?>
                            <br>
                            <small class="text-muted">Date: <?= $r['comment_date'] ?></small>
                        </div>
                        <?php
                    }
          
    }
        }}
                ?>
                
            </div>
        </div>
   
</div>
 <br>
  <?php
              if($u_name!="" && $u_id!=""){
                ?>
               <form action="home.php" method="post">
                <div class="col-8">
                 <label for="comment"> Comment Box</label>
                <textarea name="comment" class="form-control" rows="1"  required></textarea>
                <input type="hidden" name="post_id" value="<?= $row['id'] ?>"><br>
                <button type="submit" class="btn btn-primary">Sent</button>

                
               </div>
               </form>
              <?php
              
              }
              ?>
               
              
</div>
</div>
<br>
 


                

                <?php

              
            }
        }
    }
    ?>



           
 
   

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $comment=$_POST['comment'];
        $p_id=$_POST['post_id'];
        $u_id=$_SESSION['u_id'];

        $sql="insert into comments (comment,post_id,user_id) values ('$comment',$p_id,$u_id)";
       mysqli_query($conn,$sql);

header("Location:home.php");
       ob_end_flush();

    }
    
    ?>

</div>
   </div>



<script>
    document.querySelectorAll('#toggleComment').forEach(function(btn){
        btn.addEventListener('click',function(){
                    var commentSection = this.parentElement.nextElementSibling; 

            if(commentSection.style.display=="none"){
                commentSection.style.display="block";
            }else{
                commentSection.style.display="none";
        }
    })
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>
</html>