<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/ajaxfile.js"></script>
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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>