$("#newPassForm").submit((e) => {
  e.preventDefault();

  $('#loader').html('<span class="loader"><span class="loading"></span></span>')

  var email = $("#email").val();
  var pass = $("#password").val();
  var pass_match = $("#password_match").val();

        if (pass === pass_match) {
          $.post(
            "reset_pass_engine.php",
            {
              email: email,
              pass: pass,
            },
            function (data) {
              if (data === "success") {
                window.location.href = "login.html";
                $('#loader').html('<input type="submit" value="Submit" class="submit"/>')
              }else{
                $("#error").html(data);
                $("#error").addClass("error");
                $('#loader').html('<input type="submit" value="Submit" class="submit"/>')
              }
            }
          );
        }else{
            $("#error").html("Your passwords do not match!");
            $("#error").addClass("error");
            $('#loader').html('<input type="submit" value="Submit" class="submit"/>')
        }
});
