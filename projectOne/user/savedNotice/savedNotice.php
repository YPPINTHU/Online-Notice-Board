<!-- <link rel="stylesheet" href="update_pass.css" type="text/css"> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

<!-- <header>
    <img class="logo" src="images/logo.png" alt="logo">
    <nav>
        <ul class="nav_links">

            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>

        </ul>
    </nav>
    <a class=cta href="#"><button>Logout</button></a>
</header> -->


<!-- <div>
    <h3>Saved Notices</h3>
</div> -->

<div>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Notice Image</th>
                <th class="text-center">Notice Name</th>
                <th class="text-center">Notice Details</th>
                <th class="text-center">Category Name</th>
                <th class="text-center" colspan="2">Action</th>
            </tr>
        </thead>
        <?php
        include_once "C:/xampp/htdocs/projectOne/connect.php";
        $query = "SELECT * FROM notice,category 
        WHERE notice.category_id=category.category_id";
        $result = mysqli_query($conn, $query);
        $count = 1;
        $numrow = mysqli_num_rows($result);
        if ($numrow > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?= $count ?></td>
                    <td><img src="<?= $row['notice_img'] ?>" height="100px"></td>
                    <td><?= $row['notice_name'] ?></td>
                    <td><?= $row['notice_detail'] ?></td>
                    <td><?= $row['category_name'] ?></td>
                    <td><button class="btn btn-danger" style="height: 40px;" onclick="noticeDelete('<?= $row['notice_id'] ?>')">Delete</button></td>
                </tr>
        <?php
                $count = $count + 1;
            }
        }

        ?>
    </table>
</div>