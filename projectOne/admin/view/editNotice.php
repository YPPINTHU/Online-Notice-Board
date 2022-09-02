<div class="container p-5">

    <h4>Edit Notice</h4>
    <?php
    include_once "../projectOne/connect.php";
    $ID = $_POST['record'];
    $query = "SELECT * FROM  WHERE notice_id=''$ID";
    $result = mysqli_query($conn, $$query);
    $numrow = mysqli_num_rows($result);
    if ($numrow > 0) {
        while ($row1 = mysqli_fetch_array($result)) {
            $catID = $row1['category_id'];
    ?>


            <form id="update_items" onsubmit="updateNotice()" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" id="notice_id" value="<?= $row1['notice_id'] ?>" hidden>
                </div>
                <div class="form-group">
                    <label for="name">Notice Name:</label>
                    <input type="text" class="form-control" id="n_name" value="<?= $row1['notice_name'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Notice Details:</label>
                    <input type="text" class="form-control" id="n_detail" value="<?= $row1['notice_detail'] ?>">
                </div>


                
                <div class="form-group">
                    <label for="name">Category:</label>
                    <select id="category">
                        <?php
                        $sql = "SELECT * FROM category WHERE category_id='$catID'";
                        $result = mysqli_query($conn, $sql);
                        $numrow1 = mysqli_num_rows($result);
                        if ($numrow1 > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<potion value='" . $row['category_id'] . "'>" . $row['category_name'] . "</option";
                            }
                        }
                        ?>
                        <?php
                        $sql = "SELECT * FROM category WHERE category_id!='$catID'";
                        $result = mysqli_query($conn, $sql);
                        $numrow1 = mysqli_num_rows($result);
                        if ($numrow1 > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<potion value='" . $row['category_id'] . "'>" . $row['category_name'] . "</option";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <img width="200px" height="150px" src="<?= $row1['notice_name'] ?>">
                    <div>
                        <label for="file">Choose Image:</label>
                        <input type="text" id="existingImage" class="form-control" value="<?= $row1['notice_img'] ?>" hidden>
                        <input type="file" id="newImage" value="">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" style="height: 40px;" class="btn btn-primary"> Update Notice</button>
                </div>
        <?php
        }
    }
        ?>
            </form>

</div>
<style>
  .form-group{
    margin: 15px;
    padding: 8px;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }

</style>