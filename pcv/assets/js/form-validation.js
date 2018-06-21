$().ready(function() {

  $("#pcv_form").validate({
    ignore:".ignore",
    rules: {

      firstname: "required",
      lastname: "required",
      email: "required",
      phone: "required",
      hiddenRecaptcha: {
          required: function () {
              if (grecaptcha.getResponse() == '') {
                  return true;
              } else {
                  return false;
              }
          }
      },
    },
      messages: {
        firstname: "Please enter your first name",
        lastname: "Please enter your last name",
        email: "Please enter a valid email address",
        phone: "Please enter a valid phone number",
        hiddenRecaptcha: "Please check the I am not a robot box"

      }


  }); // END Validate()


});// END ready