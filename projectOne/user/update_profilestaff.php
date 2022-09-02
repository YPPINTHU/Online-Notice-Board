<?php
include_once "../connect.php";
if(isset($_GET['update'])){
$name=$_GET['name'];
$email=$_GET['email'];
$pn=$_GET['pn'];
$course=$_GET['course'];

$query="UPDATE staff SET staff_name='$name',phone_no='$pn',email='$email',course='$course' WHERE email='sample@gmail.com'";
$result=mysqli_query($conn,$query);

$error="<font color='blue'>Profile Updated Successfully </font>";

}
?>
<link rel="stylesheet" href="update_pass.css" type="text/css">
<header>
            <img class="logo" src="images/logo.png" alt="logo">
            <nav>
                <ul class="nav_links">
                   
                    <li ><a href="#">Home</a></li>
                    <li ><a href="#">About</a></li>
                    <li ><a href="#">Contact</a></li>
                     
                </ul>
        </nav>
            <a class=cta href="#"><button>Logout</button></a>
        </header>


        <div><h3>Update Your Profile </h3></div>

<?php
$query=("SELECT * FROM staff where email='sample@gmail.com'");
$result = mysqli_query($conn,$query);
$numrow = mysqli_num_rows($result);
if ($numrow > 0) {
    while ($row = mysqli_fetch_array($result)) {
?>


       
<div class="formsec">
<form method="get">
    <table class="table table-boderless">
        <tr>
            <td colspan="2"><?php echo @$error;?></td>
        </tr>
        

        <tr>
            <td>Enter Your Name</td>
            <td><input class="form-control" type="text" name="name" value="<?=$row['staff_name']?>"> </td>
        </tr>
        <tr>
            <td>Enter Your Email</td>
            <td><input class="form-control" type="email" name="email" value="<?php echo $row['email']?>"> </td>
        </tr>

        <tr>
            <td>Enter Your Mobile</td>
            <td><input class="form-control" type="text" name="pn" value="<?php echo $row['phone_no']?>"> </td>
        </tr>

        
        <tr>
            <td>Select Your Course</td>
            <td><select name="course" style="margin-left: 30px; height:25px;width:200px; border-radius: 10px;" required>
                <option disabled selected>Select Course</option>
                <option>CST</option>
                <option>IIT</option>
                <option>SCT</option>
                <option>MRT</option> 
              </select></td>
        </tr>
       
        </table>

       
                <div>
                <button type="submit" class="upbtn"  value="update" name="update">Update Your Profile</button> 
                <button type="reset" class="rebtn" value="Reset">Reset</button>
                </div>

                <div style="display: flex; justify-content: flex-end;">
                <button class="upbtn" value="cancel"><a href="../user/indexstaff.php">cancel</a></button>
                </div>
    

    
                <?php   
 }}
?>
</form>

</div>