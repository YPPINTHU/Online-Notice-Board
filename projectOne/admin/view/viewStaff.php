<div>
    <h3>Staff Details</h3>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Staff Name</th>
                <th>Phone Number</th>
                <th> Mail</th>
                <th>Course</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        <?php
        include_once "C:/xampp/htdocs/projectOne/connect.php";
        $query = "SELECT * FROM staff";
        $result = mysqli_query($conn, $query);
        $numrow = mysqli_num_rows($result);
        $count = 1;
        if ($numrow > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr> 
                    <td><?php echo $count++; ?></td>
                    <td><?=$row['staff_name'] ?></td>
                    <td><?=$row['phone_no'] ?></td>
                    <td><?=$row['email'] ?></td>
                    <td><?=$row['course'] ?></td>
                    <td><button class="btn btn-danger" style="height:40px;" onclick="staffDelete('<?= $row['staff_id'] ?>')">Delete</button></td>
                </tr>

        <?php
            }
        }
        ?>
    </table>