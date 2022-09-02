<?php
include_once "C:/xampp/htdocs/projectOne/connect.php";
$staff_ID=$_POST['record'];
$query="DELETE FROM staff WHERE staff_id='$staff_ID'"; 
$data=mysqli_query($conn,$query);
if($data){
    echo "Staff Records Successfullly Delete";
}
else{
    echo "Not able to Delete";
}
?>