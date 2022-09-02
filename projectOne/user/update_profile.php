<?php
include_once "../connect.php";
if(isset($_GET['update'])){
$name=$_GET['name'];
$email=$_GET['email'];
$pn=$_GET['pn'];
$gender=$_GET['gender'];
$degree=$_GET['degree'];
$dep=$_GET['dep'];
$fac=$_GET['fac'];
$sem=$_GET['sem'];
$year=$_GET['year'];


$query="UPDATE student SET student_name='$name',phone_no='$pn',email='$email',degree='$degree',department='$dep',faculty='$fac',semester='$sem',year='$year',gender='$gender' WHERE email='sample@gmail.com'";
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
$query=("SELECT * FROM student where email='sample@gmail.com'");
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
            
            <td><input class="form-control" type="text" name="name" value="<?=$row['student_name']?>"> </td>
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
            <td>Select Your Degree Program</td>
            <td><select name="degree" style="margin-left: 30px; height:25px;width:200px; border-radius: 10px;" required>
                <option disabled selected>Select Degree Program</option>
                <option>CST</option>
                <option>IIT</option>
                <option>SCT</option>
                <option>MRT</option> 
              </select></td>
        </tr>
        <tr>
            <td>Select Your Department</td>
            <td><select name="dep" style="margin-left: 30px; height:25px;width:200px; border-radius: 10px;">
                <option disabled selected>Select Department</option>
                <option>CST</option>
                <option>IIT</option>
                <option>SCT</option>
                <option>MRT</option> 
              </select></td>
        </tr>
        <tr>
            <td>Select Your Faculty</td>
            <td><select name="fac" style="margin-left: 30px; height:25px;width:200px; border-radius: 10px;">
                <option disabled selected>Select Faculty</option>
                <option>CSI</option>
                <option>Manage</option>
                <option>SCT</option>
                <option>MRT</option> 
              </select></td>
        </tr>
        <tr>
            <td>Select Your Semester</td>
            <td><select name="sem" style="margin-left: 30px; height:25px;width:200px; border-radius: 10px;">
                <option disabled selected>Select Semester</option>
                <option>1.1</option>
                <option>1.2</option>
                <option>2.1</option>
                <option>2.2</option> 
                <option>3.1</option>
                <option>3.2</option>
                <option>4.1</option>
                <option>4.2</option> 
              </select></td>
        </tr>
        <tr>
            <td>Select Your Academic Year</td>
            <td><select name="year" style="margin-left: 30px; height:25px;width:200px; border-radius: 10px;">
                <option disabled selected>Select Academic Year</option>
                <option>1st Year</option>
                <option>2nd Year</option>
                <option>3rd Year</option>
                <option>4th Year</option> 
              </select></td>
        </tr>

        <tr>
            <td>Enter Your Gender</td>
            <td style="text-align: center;">Male<input style="margin-left: 5px;" type="radio"  name="gender" value="male">
                Female<input  style="margin-left: 5px;" type="radio" name="gender" value="female">
            </td>
        </tr>
        </table>

       
                <div>
                <button type="submit" class="upbtn"  value="update" name="update">Update Your Profile</button> 
                <button type="reset" class="rebtn" value="Reset">Reset</button>
                </div>

                <div style="display: flex; justify-content: flex-end;">
                <button class="upbtn" value="cancel"><a href="../user/indexstudent.php">cancel</a></button>
                </div>
    

    
                <?php   
 }}
?>
</form>

</div>