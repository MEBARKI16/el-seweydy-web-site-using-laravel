<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <form id="job_offer_form1" method="post" action="/submit-form" enctype="multipart/form-data">
        @csrf
        <label for="firstname">First name:</label>
        <input type="text" name="firstname" id="firstname">
        <br>
        <label for="secondname">Second name:</label>
        <input type="text" name="secondname" id="secondname">
        <br>
        <label for="country">Country:</label>
        <input type="text" name="country" id="country">
        <br>
        <label for="situation">Situation:</label>
        <input type="text" name="situation" id="situation">
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="cvfile">CV file:</label>
        <input type="file" name="cvfile" id="cvfile">
        <br>
        <button type="submit">Send job offer</button>
      </form>
      

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <script>
        $(document).ready(function() {
        // Attach a submit handler to the form
        $('#job_offer_form1').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            // Submit the form via AJAX
            $.ajax({
            url: $(this).attr('action'), // Use the form's action attribute as the URL
            type: $(this).attr('method'), // Use the form's method attribute as the HTTP method
            data: new FormData(this), // Use FormData to include file data
            dataType: 'json', // Expect a JSON response from the server
            processData: false, // Disable automatic processing of data
            contentType: false, // Disable automatic setting of content type
            success: function(response) {
                // Show a success message using SweetAlert
                Swal.fire({
                icon: 'success',
                title: 'Job offer sent successfully',
                text: response.message
                });
            },
            error: function(xhr, status, error) {
                // Show an error message using SweetAlert
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!'
                });
            }
            });
        });
        });

    </script>
</body>
</html>