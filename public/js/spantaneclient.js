$(document).ready(function() {
  $('#job_offer_form').submit(function(e) {
    e.preventDefault();

    // Validate form
    if (this.checkValidity() === false) {
      e.stopPropagation();
    } else {
      // Get form data
      var formData = new FormData(this);

      // Send data with AJAX
      $.ajax({
        url: "sendjoboffer",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          // Show success message with SweetAlert
          Swal.fire({
            title: "Success!",
            text: response.message,
            type: "success"
          }); /*.then(function() {
            // Redirect to home page
            window.location.href = "{{ route('detailoffredemploi') }}";
          }); */
        },
        error: function(xhr, status, error) {
          // Show error message with SweetAlert
          Swal.fire({
            title: "Error!",
            text: "Data could not be submitted.",
            type: "error"
          });
        }
      });
    }

    // Mark invalid fields
    $(this).addClass('was-validated');
  });
});