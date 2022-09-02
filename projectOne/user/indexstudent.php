<?php
session_start();
include("C:/xampp/htdocs/projectOne/connect.php");
$user = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scaler=1">
    <link rel="stylesheet" href="user.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Online Notice board User Dashboard</title>
</head>

<body>

    <!--------------------------------------Navication bar top------------------------------------------------------>
    <header>
        <img class="logo" src="./images/logo.png" alt="logo" width="45" height="50">
        <nav>
            <ul class="nav_links">

                <li><a href="#" style="color: #edf0f1;">Home</a></li>
                <li><a href="#" style="color: #edf0f1;">About</a></li>
                <li><a href="#" style="color: #edf0f1;">Contact</a></li>

            </ul>
        </nav>
        <a class=cta href="../user/logout.php"><button style="border-radius: 50px;">Logout</button></a>
    </header>


    <div>
        <h3 style="color: #fff;">Dashboard</h3>
    </div>
    <!--------------------------------------Content bar left------------------------------------------------------>

    <div class="row">
        <div class="col-3 content">
            <div class="userimage"><img src="./images/user1.png" alt="userimage" width="100" height="120">
            </div>
            <h4>Hello..</h4>>
            <ul class="can_links">
                <li><a href="update_profile.php">Update Profile</a></li>
                <li><a href="update_password.php">Change Password</a></li>
                <li><a href="#">Saved Notices</a></li>
            </ul>
        </div>

        <div class="col pinnotice">
            <div>
                <h2 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-align:center">Pinned Notices</h2>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col notice">
            <div>
                <h2 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-align:center">Notices</h2>
            </div>
            <form action="" method="POST">
                <div class="filter">
                    <lable>Filter :</lable>
                    <select id="category" >
                <option disabled selected>Select category</option>
                <?php

                  $query="SELECT * FROM category";
                  $result = mysqli_query ($conn,$query);
                  $numrow= mysqli_num_rows($result);

                  if ($numrow > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      echo"<option value='".$row['category_id']."'>".$row['category_name'] ."</option>";
                    }
                  }
                ?>
              </select>
                </div>
            </form>
            <div class="row cardrow">
            <?php
            $query = "SELECT category_name FROM category";
            $result = mysqli_query($conn, $query);
            $numrow = mysqli_num_rows($result);


            for ($i = 1; $i <= $numrow; $i++) {
                $row = mysqli_fetch_array($result);
            ?>
                <div class=" card col-3"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><?= $row['category_name'] ?></button> </div>
            <?php }

            ?>
        </div>

        </div>
        
    </div>


</body>

        <!----------Modal----------->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-----------modal content----------->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Notice Name</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" style="height: 40px">Save</button>
                        <button type="button" class="btn btn-default" style="height: 40px">Download</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<!--------------------------------- Internal Syle Sheet ----------------------------------->

<div class="footer">
    <footer><b>©</b> Copyright 2022. All Rights Reserved.</footer>
</div>
 <!--------------------------------- Internal Syle Sheet ----------------------------------->
<style>
    .logo {
        cursor: pointer;
        margin-right: auto;
        width: 50px;
        height: 50px;
    }

    .userimage {
        display: flex;
        justify-content: center;
    }

    h4 {
        color: #edf0f1;
        text-align: center;

    }

    .content {
        font-weight: bold;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 18px;
        text-decoration: none;
        background-color: #24252A;
        line-height: 40px;
        height: 100%;
        padding: 5px 5px 5px 5px;
        max-width: 250px;
        border-radius: 20px;

    }

    .can_links {
        list-style: none;
    }

    a {
        color: #edf0f1;
        text-decoration: none;
        font-size: 18px;
        text-align: center;
        padding: 8px;
    }

    a:hover {
        color: rgba(0, 136, 169, 0.8);
        transition: 0.3s;
    }

    .pinnotice {
        overflow-x: hidden;
        overflow-y: scroll;
        background-color: rgba(244, 237, 167, 0.8);
        border-radius: 20px;
        margin-left: 5px;

    }

    .notice {
        overflow-x: hidden;
        overflow-y: scroll;
        min-height: 150px;
        margin: 10px;
        border-radius: 8px;
        background-image: none;
        border-radius: 20px;
        background-color: rgb(168, 226, 241);
        justify-content: center;


    }
    .cardrow{
        margin: 10px;
        justify-content: center;

    }
    .card{
    margin: 50px 20px;
    padding: 10px;
    min-width: 100px;
    min-height: 200px;
    cursor: pointer;


    }
    .card:hover{
    box-shadow: 8px 5px 5px #3B3131;
}
.cardrow{
    display: flex;
    justify-content: space-between;
}

    footer {
        text-align: center;
        color: #fff;
        padding: 10px;
        background-color: #24252A;
    }

    .filter {
        text-align: center;
        font-size: 18px;
        display: flex;
        justify-content: flex-start;
        margin: 10px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;


    }

    select {
        width: 250px;
        border-radius: 10px;
        padding: 5px;
        margin: 5px;
        background-color: transparent;
        border: soli 1px;
    }

    h3 {
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        padding: 10px 10px;
        background-color: #404145;

    }

    button:hover {
        background-color: rgba(0, 136, 169, 0.8);
    }
</style>

</html>