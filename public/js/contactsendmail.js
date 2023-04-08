$(document).on('click', 'a#contact_form_btn', function (e){
    e.preventDefault();
    /** Get full_name, email, subject and message variables */
    var full_name = $('input#contact_name').val()+' '+$('input#contact_prenom').val();
    var email = $('input#contact_email').val();
    var subject = $('input#contact_subject').val();
    var message = $('textarea#contact_message').val();
    //console.log(full_name+' '+email+' '+subject+' '+message);
    $.ajax({ 
        url: 'sendmail',
        type: 'GET',
        data: {
            full_name: full_name,
            email: email,
            subject: subject,
            message: message
        },
        success: function(response) {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Your message was successful sent!' 
            });
        },
        error: function(response) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!'
            });
        }
    });
    
});