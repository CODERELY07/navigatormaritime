$(document).ready(function(){
    $.ajax({
        url:"tables-load.php",
        method:"POST",
        data:{course:"house-course"},
        success: function(response){
            $('#house-course-table-data').html(response);
        }
    })
});