<?php
include_once "C:/xampp/htdocs/projectOne/connect.php";
$category_ID=$_POST['record'];
$query="DELETE FROM category WHERE category_id='$category_ID'";
$data=mysqli_query($conn,$query);
if($data){
echo"Category Item Deleted";
}
else{
    echo "Not able to delete";
}
?>