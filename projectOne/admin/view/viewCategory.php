<div>
    <h3>Notice Categories </h3>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Category name</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        <?php
        include_once "C:/xampp/htdocs/projectOne/connect.php";
        $query = "SELECT * FROM category";
        $result = mysqli_query($conn, $query);
        $numrow = mysqli_num_rows($result);
        $count = 1;
        if ($numrow > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?=$row['category_name'] ?></td>
                    <td><button class="btn btn-danger" style="height:40px;" onclick="categoryDelete('<?= $row['category_id'] ?>')">Delete</button></td>
                </tr>

        <?php
            }
        }
        ?>
    </table>

    <!---------------------------------------------------------Modal trigger------------------------------------------------------------------------>

    <button type="button" class="btn btn-secondary" style="height: 40px;" data-toggle="modal" data-target="#catModal">
        Add Category
    </button>

    <!---------------------------------------------------------Modal Section------------------------------------------------------------------------>
    <div class="modal fade" id="catModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="color: black;
          font-family:'Times New Roman', Times, serif">New Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
<!---------------------------------------------------------Modal Body Section------------------------------------------------------------------------>
                <div class="modal-body">
                    <form enctype="multipart/form-data" onsubmit="addCategory()" method="POST">
                        <div class="form-group">
                            <label for=c_name>Category Name:</label>
                            <input type="text" class="form-control" id="c_name" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary" id="upload" style="height: 40px;">ADD</button>
                        </div>
                    </form>
                </div>
<!---------------------------------------------------------Modal footer------------------------------------------------------------------------>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" style="height: 40px;">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>
<style>
  .form-group{
    margin: 15px;
    padding: 8px;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }
</style>