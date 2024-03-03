$("#resetForm").submit((e) => {
  e.preventDefault();

  $('#loader').html('<span class="loader"><span class="loading"></span></span>')

  var email = $("#email").val();

  $.post(
    "send_link.php",
    {
      email: email
    },
    function (data) {
      if (data === "success") {
        window.location.href = "verify_email.php";
        $('#loader').html('<input type="submit" class="submit" />')

      } else {
        $("#error").html(data);
        $("#error").addClass("error");
        $('#loader').html('<input type="submit" class="submit" />')
      }
    }
  );
});
