<?php
include_once("C:/xampp/htdocs/projectOne/connect.php");
if(isset($_POST['update']))
{
    $op=$_POST['op'];
    $np=$_POST['np'];
    $cp=$_POST['cp'];

    if($op=="" || $np=="" || $cp=="")
    {
        $err="<font color='red'> fill all the fileds first</font>"; 
    }
    else
    {
        $sql=mysqli_query($conn,"SELECT * FROM admin WHERE password='$op'");
        $result=mysqli_num_rows($sql);
        if($result==true){
            if($np==$cp)
            {

                $sql=mysqli_query($conn,"UPDATE admin SET password='$np' WHERE admin_name='admin'");
                $err="<font color='green'>Password Updated </font>";
            }
            else
            {
                $err="<font color='red'>New Password not match with Confirm Password </font>";
            }
        } 
        else
        {
            $err="<font color='red'> Wrong old Password</font>";
    
        }
    }

}
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="admin_update_pass.css" type="text/css">
    </head>

        <div><h3>Update Password</h3></div>

<div class="formsec">
<form method="POST">

<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><p style="text-align: center;"><?php echo @$err;?></p></div>
</div>


<br>
<div>
    <div>Enter Your Old Password : <input type = "password" name ="op" class="form-control"/></div>   
</div>
<br>
<div class="row">
    <div >Enter Your New Password : <input type = "password" name ="np" class="form-control"/></div>      
</div>
<br>
<div class="row">
    <div>Enter Your Confirm Password : <input type = "password" name ="cp" class="form-control"/></div>        
</div>
<br>
<div >
    <button class="upbtn" type="submit" name="update">Update Password</button>
    <button class="rebtn" type="reset">Reset</button>
    </div>
    <br>

    <div style="display: flex; justify-content: flex-end;">
                <button class="upbtn"><a href="admin_index.php">Cancel</a></button>
                </div>
</div>


</form>
</div>
</html>