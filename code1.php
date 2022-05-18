<?php
// session_start();
include('security.php');

if(isset($_POST['blog_save']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $photo= $_FILES['photo']['name'];
   
        if(file_exists("upload/" . $_FILES["photo"]["name"]))
        {
            $store=$_FILES["photo"]["name"];
            $_SESSION['status'] = "Image Already exists. '.$store.'";
            header('Location: blog.php'); 
        }
            else 
            {
            $query = "INSERT INTO blogs (title,description,photo) VALUES ('$title','$description','$photo')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/".$_FILES["photo"]["name"]);
                $_SESSION['success'] = "blog Added";
                // $_SESSION['status_code'] = "success";
                header('Location: blog.php');
            }
            else 
            {
                $_SESSION['status'] = "blog Not Added";
                // $_SESSION['status_code'] = "error";
                header('Location: blog.php');  
            }
        }
  
}





if(isset($_POST['blog_update_btn']))
{
    $edit_id = $_POST['edit_id'];
    $edit_title = $_POST['edit_title'];
    $edit_description = $_POST['edit_description'];
    $edit_photo = $_FILES['photo']['name'];

   

    $query = "UPDATE blogs SET title='$edit_title',description='$edit_description',photo='$edit_photo' WHERE id='$edit_id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/".$_FILES["photo"]["name"]);
        $_SESSION['success'] = "Your Data is Updated";
        header('location:blog.php');
    }
    else{
        $_SESSION['status'] = "Your Data is not Updated";
        header('location:blog.php');
    }
    }



    if(isset($_POST['blog_delete_btn']))
    {
        $id = $_POST['delete_id'];
       
    
        $query = "DELETE  FROM  blogs  WHERE id='$id' ";
        $query_run = mysqli_query($connection,$query);
    
        if($query_run)
        {
            $_SESSION['success'] = "Your Data is Deleted";
            header('location:blog.php');
        }
        else{
            $_SESSION['status'] = "Your Data is not Deleted";
            header('location:blog.php');
        }
        }



?>