//hello there
$(document).ready(function() {
    $('#email').submit(function(e) {
      e.preventDefault(); // prevent the default form submission behavior
      $.ajax({
        url: 'join.php',
        type: 'POST',
        data: $('#email').serialize(), // serialize the form data
        success: function(response) {
          // handle the response from the server
          console.log(response);
          $('#email')[0].reset(); //resets the form after submission
          $('.success-message').show();
          $('.email').fadeOut(150);
          $('#email').prop('disabled',true)
          $('.submitbtn').prop('disabled',true)
            
        }
      });
    });
  });
  