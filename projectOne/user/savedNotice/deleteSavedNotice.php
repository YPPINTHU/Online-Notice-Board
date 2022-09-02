<?php
include_once "C:/xampp/htdocs/projectOne/connect.php";
$notice_ID=$_POST['record'];
$query="DELETE FROM notice WHERE notice_id='$notice_ID'";
$data=mysqli_query($conn,$query);
if($data){
echo"Category Item Deleted";
}
else{
    echo "Not able to delete";
}
?>