$(document).ready(function(){
    const tables = [
        { url: "tables-load.php", key: "course", value: "house-course", selector: "#house-course-table-data" },
        { url: "marina-course-table.php", key: "marina_course", value: "marina-course", selector: "#marina-course-table-data" },
        { url: "practical-assesment-table.php", key: "practical_assesment", value: "practical-assesment", selector: "#practical-assesment-table-data" },
        { url: "electrical-course-table.php", key: "electrical_course", value: "electrical-course", selector: "#electrical-course-table-data" }
    ];

    tables.forEach(t => {
        $.ajax({
            url: t.url,
            method: "POST",
            data: { [t.key]: t.value },
            success: function (response) {
                $(t.selector).html(response);
            }
        });
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