<?php
// $user=$_SESSION['user'];
// extract($_POST);
// if(isset($update))
// {
//     $img=$_FILES['f']['name'];
//     echo $img;

//     $query="update user set image='$img' where email='".$_SESSION['user']."'";
//     mysqli_query($conn,$query);

//     move_uploaded_file($_FILES['f']['tep_name'],"../images/$user/".$_FILES['f']['name']);

//     $error="<font color='blue'>Profile update Pic updated successfully !! </font>";

// }




// $sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user'].",");
// $res=mysqli_fetch_assoc($$sql)

?>
<link rel="stylesheet" href="update_pass.css" type="text/css">
<header>
            <img class="logo" src="images/logo.jfif" alt="logo">
            <nav>
                <ul class="nav_links">
                   
                    <li ><a href="#">Home</a></li>
                    <li ><a href="#">About</a></li>
                    <li ><a href="#">Contact</a></li>
                     
                </ul>
        </nav>
            <a class=cta href="#"><button>Logout</button></a>
        </header>


        <div><h3>Update Your Profile Picture</h3></div>

        <div class="formsec">
    <form method="post" enctype="multipart/form-data" >

        <table class="table" align="center">
            <tr>
                <td colspan="2"><?php echo @$error;?></td>
            </tr>
            
            <tr>
                <td>Choose Your Picture</td>
                <td><input class="form-control" type="file" name="f"></td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <button type="submit" class="upbtn" name="update">Update My Profile Picture </button>
                
                </td>
            </tr>
        </table>
        <div style="display: flex; justify-content: flex-end;">
                <button class="upbtn" value="cancel"><a href="index.php">cancel</a></button>
                </div>
    </form>
    </div>