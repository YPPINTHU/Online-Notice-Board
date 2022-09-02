<?php
$conn=mysqli_connect("localhost","root","","online_noticeboard");
if(!$conn){
    die ("connection Erorr :".mysqli_connect_error($conn));
}
// else{
//     echo "success conection";
// }
?>