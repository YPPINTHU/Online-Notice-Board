<div>
  <h2>Notices</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Notice Image</th>
        <th class="text-center">Notice Name</th>
        <th class="text-center">Category Name</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
    include_once ("C:/xampp/htdocs/projectOne/connect.php");
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
          <td>
            <?php
            echo "<img width='200px' height='200px' src='data:image;base64,{$row['notice_img']}' alt='img'>";
            ?>
          </td>
          <td><?= $row['notice_name'] ?></td>
          <td><?= $row['category_name'] ?></td>
          <td><button class="btn btn-primary" style="height: 40px;" onclick="noticeEditForm('<?= $row['notice_id'] ?>')">
              Edit</button></td>
          <td><button class="btn btn-danger" style="height: 40px;" onclick="noticeDelete('<?= $row['notice_id'] ?>')">
              Delete</button></td>
        </tr>
    <?php
        $count = $count + 1;
      }
    }

    ?>
  </table>

  <!--------------------------------Modal Trigger Button------------------------------------------>
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#addModal">
    Add Notice
  </button>
  <!---------------------------------------------------------Modal Section------------------------------------------------------------------------>
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="color: black;
          font-family:'Times New Roman', Times, serif">New Notice</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


        <!---------------------------------------------------------Modal Body Section------------------------------------------------------------------------>
        <div class="modal-body">
          <form enctype='multipart/form-data' onsubmit="addNotice()" method="POST">
            <div class="form-group">
              <label for="name">Notice Name:</label>
              <input type="text" class="form-control" id="n_name" required>
            </div>

            <div class="form-group">
              <label>Category:</label>
              <select id="category">
                <option disabled selected>Select category</option>
                <?php
                $query = "SELECT * from category";
                $result = mysqli_query($conn, $query);
                $numrow = mysqli_num_rows($result);

                if ($numrow > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {

                    echo "<option value='" . $row['category_id'] . "'>" . $row['category_name'] . "</option>";
                  }
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label for="file">Choose Image:</label>
              <input type="file" class="form-control-file" id="file">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height: 40px;">ADD</button>
            </div>
          </form>
        </div>

        <!---------------------------------------------------------Modal footer------------------------------------------------------------------------>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>

    </div>
  </div>
</div>
<!---------------------------------------------------------Internal Style------------------------------------------------------------------------>
<style>
  .form-group {
    margin: 15px;
    padding: 8px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }
  table{
    text-align: center;
  }
</style>