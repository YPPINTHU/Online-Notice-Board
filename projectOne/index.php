<!DOCTYPE html>
<?php
include("C:/xampp/htdocs/projectOne/connect.php");

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>



    <!--------------------------------------Navication bar top------------------------------------------------------>
    <header>
        <img class="logo" src="./image/logo.png" alt="logo" width="45" height="50">
        <nav>
            <ul class="nav_links">

                <li><a href="#" style="color: #edf0f1;">Home</a></li> <li><a href="#" style="color: #edf0f1;">Home</a></li>
                <li><a href="#" style="color: #edf0f1;">About</a></li>
                <li><a href="./contact us/contact.html" style="color: #edf0f1;">Contact</a></li>

            </ul>
        </nav>
        <a class=cta href="./login/index.html"><button style="border-radius: 50px;">Login</button></a>
    </header>


    <div class="noticeboard">
        <h3 style="color: #fff;">Uva Wellassa University Of Srilanka</h3>
    </div>
    <div class="notices">
        <div class="head">
            <h2><b>Notice Board</b></h2>
        </div>
        <div class="row cardrow">
            <?php
            $row = 1;
            $colunm = 0;
            $query = "SELECT category_name FROM category";
            $result = mysqli_query($conn, $query);
            $numrow = mysqli_num_rows($result);


            for ($i = 1; $i <= $numrow; $i++) {
                $row = mysqli_fetch_array($result);
            ?>
                <div class=" card col-2"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><?= $row['category_name'] ?></button> </div>
            <?php }

            ?>
        </div>

        <div class="footer">
            <footer><b>©</b> Copyright 2022. All Rights Reserved.</footer>
        </div>

     
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
</body>



<style>
    .notices {
        background-image: URL(back.jpg);

    }
</style>

</html>