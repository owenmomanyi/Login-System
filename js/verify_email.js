$("#veriForm").submit((e) => {
    e.preventDefault();
  
    $('#loader').html('<span class="loader"><span class="loading"></span></span>')
  
    var code = $("#code").val();
  
    $.post(
      "verify_code.php",
      {
        code: code
      },
      function (data) {
        if (data === "success") {
          window.location.href = "reset_pass.php";
          $('#loader').html('<input type="submit" class="submit" />')
  
        } else {
          $("#error").html(data);
          $("#error").addClass("error");
          $('#loader').html('<input type="submit" class="submit" />')
        }
      }
    );
  });
  