$(document).ready(function(){
    $.ajax({
        url:"tables-load.php",
        method:"POST",
        data:{course:"house-course"},
        success: function(response){
            $('#house-course-table-data').html(response);
        }
    })
    $.ajax({
        url:"marina-course-table.php",
        method:"POST",
        data:{marina_course:"marina-course"},
        success: function(response){
            $('#marina-course-table-data').html(response);
        }
    })
    $.ajax({
        url:"practical-assesment-table.php",
        method:"POST",
        data:{practical_assesment:"practical-assesment"},
        success: function(response){
            $('#practical-assesment-table-data').html(response);
        }
    })
    $.ajax({
        url:"electrical-course-table.php",
        method:"POST",
        data:{electrical_course:"electrical-course"},
        success: function(response){
            $('#electrical-course-table-data').html(response);
        }
    })
});