<!DOCTYPE html>
<html lang="en">
  <!-- <section class ="showcase"> -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="blog.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

 
  <!-- jQuery CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>blog form</title>
</head>
 
<body>
  <!-- <video src="pexels-cottonbro-8088615.mp4" muted loop autoplay></video> -->
  <div class="overlay"></div>
  <div class="container">
    <div class="form">
      <div class="content">
        <header>Blog save here</header>
        
      </div>
      <form class="signUp" action="code1.php" method="POST" enctype="multipart/form-data">
        <div class="formGroup">
          <span class="#"></span>
          <input type="text" name="title" class="form-control" placeholder="Enter Title">

        </div>
        <div class="formGroup">
          <span class="#"></span>
    
          <input type="text" name="description" class="form-control" placeholder="Enter Description">
      
        </div>
        <div class="formGroup">
         
          <span class="#"></span>
          <input type="file" id="photo" name="photo" class="form-control" accept=".jpg, .jpeg, .png" required>
                  </div>
      
        
        <div class="formGroup">
          <!-- <a href="color code test.html"> -->
            
          <a href="blog.php" class="btn btn-danger" >Close</a>
            <button type="submit" name="blog_save" class="btn btn-primary">Save</button>
            <!-- </a> -->
        </div>
 
      </form>
        

      
 
    </div>
  </div>
 
  <!-- <script src="jQuery.js"></script> -->
</body>
  <!-- </section> -->
</html>