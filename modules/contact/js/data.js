$(document).on("submit", "#contact", function(e) {
  e.preventDefault();
  var fname = $("#fname").val();
  var email = $("#email").val();
  var phone = $("#phone").val();
  var message = $("#message").val();
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

  if (fname == "" || fname == null) {
   msgError("Please enter your name","#response");
   return false;
  } else if (email == "" || email == null) {
    msgError("Please enter email address","#response");
    return false;
  } else if (reg.test(email) == false) {
    msgError( "Invalid email address","#response");
    return false;
  } else if (phone == "" || phone == null) {
    msgError("Please enter phone number","#response");
    return false;
  } else if (message == "" || message == null) {
   msgError("Please enter message","#response");
   return false;
 }  else {
    $.ajax({
      url: "modules/contact/data.php",
      type: "POST",
      cache: false,
      data: {
        fname: fname,
        email: email,
        phone: phone,
        message: message
      },
      success: function(data) {
        $("#response").html(data);
        // $('#contact').trigger("reset");
      },
    });
  }
});
