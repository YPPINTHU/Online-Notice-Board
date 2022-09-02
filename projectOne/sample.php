<?php
    include_once "C:/xampp/htdocs/projectOne/connect.php";
    $query = "SELECT * FROM notice,category WHERE notice.category_id=category.category_id";
    $result = mysqli_query($conn, $query);
    $count = 1;
    $numrow = mysqli_num_rows($result);
    if ($numrow > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
   
            echo"<img src='data:image;based64,{$row['notice_img']}'>";
      }}
?>