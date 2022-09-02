<div class="sidebar" id="addsidebar">
    <!------------------------------------------------------------Side Bar Header------------------------------------------------------------->
    <div class="side-header">
        <img src="./img/user.png" width="120" height="120" style="object-fit: contain;">
        <h4>Hello,Admin</h4><br>
    </div>
    <!------------------------------------------------------------Side Bar Content------------------------------------------------------------->

    <a href="javacript:void(0)" class="closebtn" onclick="closenav()">X</a>
    <a href="./admin_index.php"><img class="sideimg" src="./img/dash.png" width="30px" height="30px">Dashboard</a>
    <a href="#staff" onclick="showStaff()"> <img class="sideimg" src="./img/totuser.png" width="30px" height="30px">Staff</a>
    <a href="#students" onclick="showStudent()"> <img class="sideimg" src="./img/totuser.png" width="30px" height="30px">Students</a>
    <a href="#notice" onclick="showCategory()"><img class="sideimg" src="./img/category1.png" width="30px" height="30px">Category</a>
    <a href="#category"onclick="showNotices()"><img class="sideimg" src="./img/notice1.png" width="30px" height="30px">Notice</a>
    <a href="./update_password.php"><img class="sideimg" src="./img/settings.png" width="30px" height="30px">Setting</a>
</div>

<!------------------------------------------------------Side Bar Navigation Open Button---------------------------------------------------->

<div id="main">
    <button class="openimg" onclick="opennav()"><img src="./img/home1.png" class="homeimg"></button>
</div>

<!------------------------------------------------------------Internal Style Sheet------------------------------------------------------------->
<style>
    h4 {
        color: #edf0f1;
        text-align: center;
    }

    .homeimg {
        width: 70px;
        height: 70px;

    }

    .openimg {
        background-color: #edf0f1;
        border-radius: 20px;
    }

    .sideimg {
        margin: 10px;
    }
</style>