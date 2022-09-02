//---------------view Notice---------//

function showNotices(){
    $.ajax({
        url:"./view/viewAllNotices.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//---------------view Category---------//

function showCategory(){
    $.ajax({url:"./view/viewCategory.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//---------------Add Category---------//

function addCategory(){
    var c_name=$('#c_name').val();
    var upload=$('#upload').val();

    var fd=new FormData();
    fd.append('c_name',c_name);
    fd.append('upload',upload);

    $.ajax({url:"./controller/addCategory.php",
        method:"post",
        data:fd,
        processData:false,
        contentType:false,
        success:function(data){
            alert('Category Added Successfuly.');
            $('form').trigger('reset');
            showCategory();
        }
    });
}


//-------------Add Notice---------------//

function addNotice(){
    var n_name=$('#n_name').val();
    var category=$('#category').val();
    var upload=$('#upload').val();
    var file=$('#file')[0].files[0];

    var fd=new FormData();
    fd.append('n_name',n_name);
    fd.append('category',category);
    fd.append('upload',upload);
    fd.append('file',file);
    $.ajax({
        url:"./controller/addNotice.php",
        method:"post",
        data:fd,
        processData:false,
        contentType:false,
        success:function(data){
            alert('Notice Added Successfuly.');
            $('form').trigger('reset');
            showNotices();
        }
    });
}


//Edit Notice-------------------//
function noticeEdit(id){
    $.ajax({
        url:"./view/editNotice.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//Update Notice-------------------//
function updateNotice(){
    var notice_id=$('#notice_id').val();
    var n_name=$('#n_name').val();
    var n_detail=$('#n_detail').val();
    var category=$('#category').val();
    var existingImage=$('#existingImage').val();
    var newImage=$('#newImage').val();
    var fd=new FormData();
    fd.append('notice_id',notice_id);
    fd.append('n_name',n_name);
    fd.append('n_detail',n_detail);
    fd.append('category',category);
    fd.append('existingImage',existingImage);
    fd.append('newImage',newImage);

    $.ajax({
        url:'./controller/updateNotice.php',
        method:'post',
        data:fd,
        processData:false,
        contentType:false,
        success: function(data){
            alert('Data Update Success.');
            $('form').trigger('reset');
            showNotices();
        }
    });
}


//Delete Notice-------------------//
function noticeDelete(id){
$.ajax({
    url:"./controller/deleteNotice.php",
    method:"post",
    data:{record:id},
    success:function(data){
        alert('Notice Successfully Deleted');
        $('form').trigger('reset');
        showNotices();
    }

});
}


//Delete Ctegory Notice-------------------//
function categoryDelete(id){
    $.ajax({
        url:"./controller/deleteCategory.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Category Successfully Deleted');
            $('form').trigger('reset');
            showCategory();
        }
    });
    }


/************************************* Staff Function ***************************************/

//--------------- view Staff Records ---------//

function showStaff(){
    $.ajax({url:"./view/viewStaff.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//--------------- Delete Staff Records ---------//

function staffDelete(id){
    $.ajax({
        url:"./controller/deleteStaff.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully Staff records Deleted');
            $('form').trigger('reset');
            showStaff();
        }
    });
}

/************************************* Student Function ***************************************/

//--------------- view Students Records ---------//

function showStudent(){
    $.ajax({url:"./view/viewStudent.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//--------------- Delete Staff Records ---------//

function studentDelete(id){
    $.ajax({
        url:"./controller/deleteStudent.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully Student records Deleted');
            $('form').trigger('reset');
            showStudent();
        }
    });
}