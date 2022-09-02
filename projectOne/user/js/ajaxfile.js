//---------------view SavedNotice---------//

function showNotices(){
    $.ajax({
        url:"./savedNotice/savedNotice.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//Delete Saved Notice-------------------//
function noticeDelete(id){
$.ajax({
    url:"./savedNotice/deleteSavedNotice.php",
    method:"post",
    data:{record:id},
    success:function(data){
        alert('Notice Successfully Deleted');
        $('form').trigger('reset');
        // showNotices();
    }

});
}



