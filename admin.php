<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <section class ="showcase">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

 
  <!-- jQuery CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Admin form</title>
</head>
 
<body>
  <video src="Pexels Videos 2249630.mp4" muted loop autoplay></video>
  <div class="overlay"></div>
  <div class="container">
    <div class="form">
      <div class="content">
        <header>Admin</header>
        <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
                ?>
      </div>
      <form class="signUp" action="code.php" method="POST">
        <!-- <div class="formGroup">
          <span class="fa fa-user"></span>
          <input type="text" name="uname" required placeholder="User Name">

        </div> -->
        <div class="formGroup">
          <span class="fa fa-envelope"></span>
    
          <input type="email"  name="emaill" required placeholder="Email ID">
      
        </div>
        <div class="formGroup">
         
          <span class="fa fa-lock"></span>

          <input type="password" name="passwordd" class="pass-key" required placeholder="Password">
                  </div>
        <!-- <div class="formGroup">
          <span class="fa fa-lock"></span>
    
          <input type="password" class="pass-key" required placeholder="Confirm Password">
      
          
        
        </div>
         -->
         <br>
        <div class="formGroup">
          <button type="submit" name="login_btn" class="btn2">LOGIN</button>
        </div>
 
      </form>
        

      
 
    </div>
  </div>
 
  <!-- <script src="jQuery.js"></script> -->
</body>
  </section>
</html>