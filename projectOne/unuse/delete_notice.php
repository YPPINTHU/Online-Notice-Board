<?php
include("C:/xampp/htdocs/projectOne/connect.php");
$notice_id=$_GET['id'];
$q=mysqli_query($conn,"DELETE FROM notice WHERE notice_id='$notice_id'");
?>