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
    });

    // Certificate Verification

    $('#certificate-verification').submit(function(e){
        e.preventDefault();

        var dataForm = $(this).serialize();

        var loadText = $('#loadText');
        var outputText = $('#outputText');

        var userInput = $('#certificate-no').val();
        $('#loadText').text("Loading Details for Certificate No:" + userInput);
        
        loadText.show();
        // this ensure the output text will hide in resubmission
        outputText.empty(); 
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: dataForm,
            success: function(response) {
                loadText.hide();
                
                // Display output data
                outputText.html(response);
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });

    });
});