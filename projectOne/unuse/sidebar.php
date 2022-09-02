<div class="sidebar" id="addsidebar">
    <div class="side-header">
        <img src="" width="120" height="120" style="object-fit: contain;">
        <h4>Hello,Admin</h4><br>
    </div>
    <a href="javacript:void(0)" class="closebtn" onclick="closenav()">X</a>
   
    <a href="./admin_index.php"><img class="sideimg" src="./img/dash.png" width="30px" height="30px">Dashboard</a>
    <a href=""> <img class="sideimg" src="./img/totuser.png" width="30px" height="30px">Update Profile</a>
    <a href=""><img class="sideimg" src="./img/category1.png" width="30px" height="30px">Change Password</a>
    <a href=""><img class="sideimg" src="./img/notice1.png" width="30px" height="30px">Saved Notices</a>
   
</div>
<div id="main">
    <button class="openimg" onclick="opennav()"><img src="./img/home1.png" class="homeimg"></button>
</div>

<style>

h4{
    color: #edf0f1;
    text-align: center;
}
.homeimg{
    width: 70px;
    height: 70px;

}
.openimg{
    background-color: #edf0f1;
    border-radius: 20px;
}
.sideimg{
    margin: 10px;
}

</style>