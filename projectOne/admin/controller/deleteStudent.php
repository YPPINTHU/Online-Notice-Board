<?php
include_once "C:/xampp/htdocs/projectOne/connect.php";
$student_ID=$_POST['record'];
$query="DELETE FROM student WHERE student_id='$student_ID'"; 
$data=mysqli_query($conn,$query);
if($data){
    echo "Student Records Successfullly Delete";
}
else{
    echo "Not able to Delete";
}
?>