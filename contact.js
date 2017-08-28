$(document).ready(function() {
  $("#submitForm").click(function() {
    var name = $("#fullName").val();
    var email = $("#emailAddress").val();
    var contact = $("#mobileNumber").val();
    $("#form-validation").empty(); // To empty previous error/success message.
    // Checking for blank fields.
    if (name == '' || email == '' || contact == '') {
      alert("Please Fill Required Fields");
    } else {
      // Returns successful data submission message when the entered information is stored in database.
      $.post("contact.php", {
        name: name,
        email: email,
        contact: contact
      }, function(data) {
        $("#form-validation").append(data); // Append returned message to message paragraph.
        if (data == "Your Query has been received, We will contact you soon.") {
          $("#contactForm")[0].reset(); // To reset form fields on success.
        }
      });
    }
  });
});
