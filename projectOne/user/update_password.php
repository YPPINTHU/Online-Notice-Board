<?php
include("../connect.php");
extract($_POST);



if (isset($_GET['update'])) {
    $op = $_GET['op'];
    $np = $_GET['np'];
    $cp = $_GET['cp'];

    if ($np == "" || $cp == "" || $op == "") {
        $error = "<font color ='red'>fill the fileds first</font>";
    } else {

        $sql1 = mysqli_query($conn, "select * from student where password='$op'");    
        $r1 = mysqli_num_rows($sql1);
      


        if ($r1 == true) {
            if ($np == $cp) {

                $sql1 = mysqli_query($conn, "update student set password='$np' where email='sample@gmail.com'");
                $error = "<font color='blue'>Password updated </font>";
            } else {
                $error = "<font color ='red'>New Password not matched eith Confirm Password </font>";
            }
        
        } else {

            $error = "<font color='red'>Wrong Old Password </font>";
        }
    }
}

?>
<link rel="stylesheet" href="update_pass.css" type="text/css">
<header>
    <img class="logo" src="images/logo.png" alt="logo">
    <nav>
        <ul class="nav_links">

            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>

        </ul>
    </nav>
    <a class=cta href="#"><button>Logout</button></a>
</header>


<div>
    <h3>Update Password</h3>
</div>

<div class="formsec">
    <form method="get">
        <table class="table table-boderless">

            <tr>
                <td colspan="2"><?php echo @$error; ?></td>
            </tr>


            <tr>
                <td>Enter Your Old Password : </td>
                <td><input type="password" name="op" class="form-control" /> </td>
            </tr>

            <tr>
                <td>Enter Your New Password : </td>
                <td><input type="password" name="np" class="form-control" /></td>
            </tr>

            <tr>
                <td>Confirm Password : </td>
                <td><input type="password" name="cp" class="form-control" /></td>
            </tr>

            </table>

            <div>
                <button class="upbtn" type="submit" name="update" value="update">Update Password</button>
                <button class="rebtn" type="reset">Reset</button>
            </div>
       
            <br>

            <div style="display: flex; justify-content: flex-end;">
                <button class="upbtn" value="cancel"><a href="../user/indexstudent.php">cancel</a></button>
            </div>
</div>


</form>
</div>