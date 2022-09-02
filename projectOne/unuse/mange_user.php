<?php
include("C:/xampp/htdocs/projectOne/connect.php");
$query=mysqli_query($conn,"SELECT * FROM user");
$result=mysqli_num_rows($query);
if(!$result){
    echo "<h3> No any User exists...! </h3>";
}
else
{
?>
    <h2>All Users</h2>
    <table>
        <tr>
            <th>Index_No</th>
            <th>User Name</th>
            <th>Email</th>
            <th>phone_No</th>
            <th>Gender</th>
        </tr>
        <?php
        $i=1;
        while($row=mysqli_fetch_assoc($query))
        {

            echo"<tr>";
            echo"<td>".$i."</td>";
            echo"<td>".$row['name']."</td>";
            echo"<td>".$row['email']."</td>";
            echo"<td>".$row['phone_No']."</td>";
            echo"<td>".$row['gender']."</td>";
            echo "</tr>";
            $i++;
        }
        ?>
    </table>
    <?php
}?>
