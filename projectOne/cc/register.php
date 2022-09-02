<?php
include "../connect.php";
$uname = $_GET['uname'];
$email  = $_GET['email'];
$phone = $_GET['phone'];
$password = $_GET['password'];
$repassword = $_GET['repassword'];


$query1="SELECT * FROM staff WHERE email";
$query2="SELECT * FROM staff WHERE email";
$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);
$numrow1=mysqli_num_rows($result1);
$numrow2=mysqli_num_rows($result2);

if($numrow1>0){

  



}



// if (!empty($uname1) || !empty($email) || !empty($degree) || !empty($year) || !empty($upswd1) || !empty($upswd2) )
// {

// $host = "localhost";
// $dbusername = "root";
// $dbpassword = "";
// $dbname = "project";

// // Create connection
// $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

// if (mysqli_connect_error()){
//   die('Connect Error ('. mysqli_connect_errno() .') '
//     . mysqli_connect_error());
// }
// else{
//   $SELECT = "SELECT email From register Where email = ? Limit 1";
//   $INSERT = "INSERT Into register (uname1 , email , degree , year, upswd1, upswd2 )values(?,?,?,?,?,?)";

// //Prepare statement
//      $stmt = $conn->prepare($SELECT);
//      $stmt->bind_param("s", $email);
//      $stmt->execute();
//      $stmt->bind_result($email);
//      $stmt->store_result();
//      $rnum = $stmt->num_rows;

//      //checking username
//       if ($rnum==0) {
//       $stmt->close();
//       $stmt = $conn->prepare($INSERT);
//       $stmt->bind_param("ssssss", $uname1,$email,$degree,$year,$upswd1,$upswd2);
//       $stmt->execute();
//       echo "New record inserted sucessfully";
//      } else {
//       echo "Someone already register using this email";
//      }
//      $stmt->close();
//      $conn->close();
//     }
// } else {
//  echo "All field are required";
//  die();
// }