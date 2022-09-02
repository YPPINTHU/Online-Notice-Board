<?php
include("C:/xampp/htdocs/projectOne/connect.php");
$user_id=$_GET['id'];
$q=mysqli_query($conn,"DELETE FROM notice WHERE notice_id='$user_id'");
?>
?>