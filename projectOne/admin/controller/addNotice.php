<?php
  include_once "C:/xampp/htdocs/projectOne/connect.php";
  if(isset($_POST['upload']))
{
    $noticeName =$_POST['n_name'];
    $category=$_POST['category'];

    $image=$_FILES['file']['tmp_name'];
    $name=$_FILES['file']['name'];

    $image=file_get_contents($image);
    $image=base64_encode($image);

    $result=mysqli_query($conn,"INSERT INTO notice(notice_name,category_id,notice_img) VALUES('$noticeName','$category','$image')");

    if(!$result)
    {
        echo mysqli_error($conn);
    }
    else
    {
        echo "Notice added successfully.";
    }
}
