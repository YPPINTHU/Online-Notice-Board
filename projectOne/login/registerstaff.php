<?php

$uname2 = $_POST['uname2'];
$email2 = $_POST['email2'];
$number2 = $_POST['number2'];
$upswds1 = $_POST['upswds1'];
$upswds2 = $_POST['upswds2'];





if (!empty($uname2) || !empty($email2) || !empty($number2) || !empty($upswds1) || !empty($upswds2) )
{
  if($upswds1==$upswds2){

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
  $SELECT = "SELECT email From staff Where email = ? Limit 1";
  $INSERT = "INSERT Into staff (username , email , phone_no, password )values(?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email2);
     $stmt->execute();
     $stmt->bind_result($email2);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $uname2,$email2,$number2,$upswds1);
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