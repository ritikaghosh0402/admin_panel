<?php

include('security.php');
include('header.php'); 
include('navbar.php'); 
?>



<div class="container-fluid">


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
          <a href="blog_form.php">  <button type="button" class="btn btn-primary" >
             Post a Blog
            </button></a>
    </h6>
  </div>

  <div class="card-body">
   
           <?php
           if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
            echo '<h2>'.$_SESSION['success'].'</h2>'; 
            unset($_SESSION['success']);
           }
           if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
             echo '<h2 >'.$_SESSION['status'].'</h2>'; 
             unset($_SESSION['status']);
            }
        
       ?>
       
       
       
           <div class="table-responsive">
           <?php
                       



                $query = "SELECT * FROM blogs";
                $query_run = mysqli_query($connection, $query);
            ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>ID</th>
          <th> TITLE</th>
            <th> DESCRIPTION </th>
            <th> IMAGE</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
                    <?php
                        if(mysqli_num_rows($query_run) > 0)
                        {        
                       
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                    ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['title']; ?></td>
                                <td><?php  echo $row['description']; ?></td>
                                <td><?php  echo '<img src="upload/' .$row['photo'].'" width="100px;" height="100px;"  alt="image">'?></td>
                                
            <td>
                <form action="blog_edit.php" method="POST">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="blog_edit_btn" class="btn btn-success"> EDIT</button>
                            </form>
                  </td>
            <td>
                <form action="code1.php" method="POST">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="blog_delete_btn" class="btn btn-danger"> DELETE</button>
                            </form>
            </td>
          </tr>
          <?php
                            } 
                          }
                        else {
                            echo "No Record Found";
                        }
                        ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>


<?php
include('scripts.php');
include('footer.php');

?>