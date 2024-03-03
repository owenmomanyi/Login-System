$("#regForm").submit((e) => {
    e.preventDefault();

    $('#loader').html('<span class="loader"><span class="loading"></span></span>')

    var email = $("#staticEmail").val();
    var reg = $("#reg").val();
    var phone = $("#phone").val();
    var pass = $("#password").val();
    var pass_match = $("#password_match").val();
  
        if (pass_match !== "") {
          if (pass === pass_match) {
            $.post(
              "regProcess.php",
              {
                email: email,
                reg: reg,
                phone: phone,
                pass: pass
              },
              function (data) {
                if (data === "success") {
                  window.location.href = "login.html";
                  $('#loader').html('<input type="submit" value="Submit" id="login" class="submit" />')
                }else{
                    $("#error").html(data);
                    $("#error").addClass("error");
                    $('#loader').html('<input type="submit" value="Submit" id="login" class="submit" />')               
                }
              }
            );
          }else{
              $("#error").html("Your passwords do not match!");
              $("#error").addClass("error");
              $('#loader').html('<input type="submit" value="Submit" id="login" class="submit" />')
          }
        }
    });
  