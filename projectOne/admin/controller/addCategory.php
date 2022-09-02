<?php
    include_once "c:/xampp/htdocs/projectOne/connect.php"; 
    if(isset($_POST['upload']))
    {
       
        $catname = $_POST['c_name'];
         $result = mysqli_query($conn,"INSERT INTO category (category_name) VALUES ('$catname')");
 
         if(!$result)
         {
             echo mysqli_error($conn);
            //  header("Location: ../?category=error");
            
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?category=success");
         }
     
    } 
?>