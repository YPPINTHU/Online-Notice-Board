<div>
    <h3>Students Details</h3>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Student Name</th>
                <th>Phone Number</th>
                <th> Mail</th>
                <th>Degree Program</th>
                <th>Year</th>
                <th>Smester</th>
                <th>Gender</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        <?php
        include_once "C:/xampp/htdocs/projectOne/connect.php";
        $query = "SELECT * FROM student";
        $result = mysqli_query($conn, $query);
        $numrow = mysqli_num_rows($result);
        $count = 1;
        if ($numrow > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr> 
                    <td><?php echo $count++; ?></td>
                    <td><?=$row['student_name'] ?></td>
                    <td><?=$row['phone_no'] ?></td>
                    <td><?=$row['email'] ?></td>
                    <td><?=$row['degree'] ?></td>
                    <td><?=$row['year'] ?></td>
                    <td><?=$row['semester'] ?></td>
                    <td><?=$row['gender'] ?></td>

                    <td><button class="btn btn-danger" style="height:40px;" onclick="studentDelete('<?= $row['student_id'] ?>')">Delete</button></td>
                </tr>

        <?php
            }
        }
        ?>
    </table>