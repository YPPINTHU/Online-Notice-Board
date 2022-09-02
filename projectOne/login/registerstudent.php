<?php

$uname1 = $_POST['uname1'];
$email  = $_POST['email'];
$degree = $_POST['degree'];
$number = $_POST['number'];
$upswd1 = $_POST['upswd1'];
$upswd2 = $_POST['upswd2'];




if (!empty($uname1) || !empty($email) || !empty($degree) || !empty($number) || !empty($upswd1) || !empty($upswd2) )
{
  if($upswd1==$upswd2){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_noticeboard";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From student Where email = ? Limit 1";
  $INSERT = "INSERT Into student (username , email , degree, phone_no , password)values(?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssss", $uname1,$email,$degree,$number,$upswd1);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
  }
  else {
    echo "Password And Retype Password Not Matching";
  }
}
 else {
 echo "All field are required";
 die();
}
?>