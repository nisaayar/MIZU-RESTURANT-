
$(document).ready(function() {
    
    $(".contact-form").submit(function(event) {
        
        event.preventDefault();

        
        var formData = {
            name: $("#name").val(),
            email: $("#email").val(),
            phone: $("#phone").val()
        };

        $.ajax({
            type: "POST", 
            url: "submit.php", 
            success: function(response) {
               
                console.log("Form başarıyla gönderildi!");
                console.log("Sunucudan gelen yanıt: ", response);
                
            },
            error: function(error) {
                console.error("Form gönderme hatası: ", error);
             
            }
        });
    });
});
