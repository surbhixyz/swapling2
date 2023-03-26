$(document).ready(function() {
  $('form').submit(function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();
    
    // Get the form data
    var formData = $(this).serialize();
    
    // Send an AJAX request to the PHP script
    $.ajax({
      url: 'submit.php',
      type: 'POST',
      data: formData,
      success: function(response) {
        // Do something with the response, if needed
        alert('Form submitted successfully!');
      },
      error: function(xhr, status, error) {
        // Handle any errors that occur
        console.error(error);
      }
    });
  });
});
