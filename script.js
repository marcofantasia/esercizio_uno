$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault();

        // Raccogli i dati dal form
        var formData = new FormData(this);

        $.ajax({
            url: "backend.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                
                $("#response").html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                
                console.log(textStatus, errorThrown);
            }
        });
    });
});
