<?php
// session_start();
include('security.php');
include('header.php'); 
include('navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit blog
    </h6>
  </div>

  <div class="card-body">
      <?php

      $connection= mysqli_connect("localhost","root","","adminpanel");
  if(isset($_POST['blog_edit_btn']))
{
    $id = $_POST['edit_id'];
   
    $query="SELECT * FROM blogs WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    foreach($query_run as $row)
    {

?>
  <!DOCTYPE html>
<html lang="en">
  <!-- <section class ="showcase"> -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sign.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

 
  <!-- jQuery CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>blog form</title>
</head>
 
<body>
  <!-- <video src="C:\Users\Ritika Ghosh\Downloads\video.mp4" muted loop autoplay></video> -->
  <div class="overlay"></div>
  <div class="container">
    <div class="form">
      <div class="content">
        <header>Edit here</header>
        
      </div>
      <form class="signUp" action="code1.php" method="POST" enctype="multipart/form-data">
      <div class="formGroup">
      <!-- <span class="fa fa-id-badge"></span> -->
          <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control" placeholder="Enter id">
    </div>
      <div class="formGroup">
      <span class="#"></span>
          <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" class="form-control" placeholder="Enter Title">

        </div>
        <div class="formGroup">
          <span class="#"></span>
    
          <input type="text" name="edit_description" value="<?php echo $row['description'] ?>" class="form-control" placeholder="Enter Description">
      
        </div>
        <div class="formGroup">
         
          <span class="#"></span>
          <input type="file" id="photo" name="photo" value="<?php echo $row['photo'] ?>" class="form-control" accept=".jpg, .jpeg, .png">
                  </div>
        
        
        <div class="formGroup">
          
            
              <a href="blog.php" class="btn btn-danger"> CANCEL</a>
            <button type="submit" name="blog_update_btn" class="btn btn-primary">UPDATE</button>
            
        </div>
 
      </form>
        
<?php
    }
}
?>
      
 
    </div>
  </div>
 
  <!-- <script src="jQuery.js"></script> -->
</body>
  <!-- </section> -->
</html>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('scripts.php');
include('footer.php');
// session_destroy();
?>