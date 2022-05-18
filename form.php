<!DOCTYPE html>
<html lang="en">
  <!-- <section class ="showcase"> -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sign.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

 
  <!-- jQuery CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>admin form</title>
</head>
 
<body>
  <!-- <video src="Pexels Videos 2249630.mp4" muted loop autoplay></video> -->
  <div class="overlay"></div>
  <div class="container">
    <div class="form">
      <div class="content">
        <header>Register here</header>
        
      </div>
      <form class="signUp" action="code.php" method="POST">
        <div class="formGroup">
          <span class="fa fa-user"></span>
          <input type="text" name="username" class="form-control" placeholder="Enter Username">

        </div>
        <div class="formGroup">
          <span class="fa fa-envelope"></span>
    
          <input type="email" name="email" class="form-control" placeholder="Enter Email">
      
        </div>
        <div class="formGroup">
         
          <span class="fa fa-lock"></span>
          <input type="password" name="password" class="form-control" placeholder="Enter Password">
        
                  </div>
        <div class="formGroup">
          <span class="fa fa-lock"></span>
    
          <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
      
          
        
        </div>
        
        <div class="formGroup">
          <!-- <a href="color code test.html"> -->
            
          <a href="register.php" class="btn btn-danger" >Close</a>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
            <!-- </a> -->
        </div>
 
      </form>
        

      
 
    </div>
  </div>
 
  <!-- <script src="jQuery.js"></script> -->
</body>
  <!-- </section> -->
</html>