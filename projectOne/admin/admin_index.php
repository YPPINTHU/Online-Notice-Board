<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scaler=1">
    <title>Online Notice board User Dashboard</title>
    <link rel="stylesheet" href="./css/add.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/ajaxfile.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</head>

<body>

    <!--------------------------------------Navication bar top------------------------------------------------------>
    <header>
        <img class="logo" src="img/user.png" alt="logo" width="50px" height="50px">

        <a href="./logout.php"><button class="logoutbtn">Logout</button></a>
    </header>


    <div>
        <h3 style="color: #fff;">Dashboard</h3>
    </div>
    <!--------------------------------------Content bar left------------------------------------------------------>
    <?php
    include("./sidebar.php");
    include_once("../connect.php");
    ?>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">

            <div class="col-sm-3">
                <div class="card" style="background-color: #3B3131;">
                    <img src="./img/totuser.png" class="adimg">
                    <h4 style="color:white;">Total Student</h4>
                    <h5 style="color:white;">
                        <?php
                        $sql = "SELECT * from student";
                        $result = mysqli_query($conn, $sql);
                        $num_row = mysqli_num_rows($result);
                        echo $num_row;
                      
                        ?></h5>
                </div>

            </div>
            <div class="row">

                <div class="col-sm-3">
                    <div class="card" style="background-color: #3B3131;">
                        <img src="./img/totuser.png" class="adimg">
                        <h4 style="color:white;">Total Staff</h4>
                        <h5 style="color:white;">
                            <?php
                            $sql = "SELECT * from staff";
                            $result = mysqli_query($conn, $sql);
                            $num_row = mysqli_num_rows($result);
                            echo $num_row;
                            
                            ?></h5>
                    </div>

                </div>
                <div class="col-sm-3">
                    <div class="card" style="background-color: #3B3131;">
                        <img src="./img/category1.png" class="adimg">
                        <h4 style="color:white;">Total Categories</h4>
                        <h5 style="color:white;">
                            <?php

                            $sql = "SELECT * from category";
                            $result = mysqli_query($conn, $sql);
                            $num_row = mysqli_num_rows($result);
                            echo $num_row;
                           
                            ?>
                        </h5>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="background-color: #3B3131;">
                        <img src="./img/notice1.png" class="adimg">
                        <h4 style="color:white;">Total Notices</h4>
                        <h5 style="color:white;">
                            <?php

                            $sql = "SELECT * from notice";
                            $result = mysqli_query($conn, $sql);
                            $num_row = mysqli_num_rows($result);
                            echo $num_row;
                            ?>
                        </h5>
                    </div>
                </div>

            </div>

        </div>


        
</body>

</html>