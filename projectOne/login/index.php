<?php
include_once "../connect.php";
session_start();
if (isset($_POST)) {

    $uname = $_POST['uname'];
    $upswd = $_POST['upswd'];

    $query1 = "SELECT * FROM admin WHERE admin_name='$uname' and password='$upswd'";
    $result1 = mysqli_query($conn, $query1);
    $numrow1 = mysqli_num_rows($result1);

    $query2 = "SELECT * FROM staff WHERE username='$uname' and password='$upswd'";
    $result2 = mysqli_query($conn, $query2);
    $numrow2 = mysqli_num_rows($result2);

    $query3 = "SELECT * FROM student WHERE username='$uname' and password='$upswd'";
    $result3 = mysqli_query($conn, $query3);
    $numrow3 = mysqli_num_rows($result3);


        if($numrow1 == true)
        {
            header("Location:../admin/admin_index.php");
        }
        elseif($numrow2 == true)
        {
            header("Location:../user/indexstaff.php");
        }
        elseif($numrow3 == true){
            header("Location:../user/indexstudent.php");
        }
        else{
            $err="<font color='red'>Wrong Username and Password</font>";
            
        }
        

}
?>