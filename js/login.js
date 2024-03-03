
$("#loginForm").submit((e)=>{
    e.preventDefault();

    $('#loader').html('<span class="loader"><span class="loading"></span></span>')
    
    var email = $("#staticEmail").val();
    var pass = $("#inputPassword").val();
    
    if (email !== '' || pass !== '') {
        if(email !== ''){
            if(pass !== ''){
                $.post("logProcess.php",
                {
                    email: email,
                    pass: pass
                },
              function(data){
                  if (data === "success") {
                      $('#error').html('');
                      $('#error').removeClass('error');
                      window.location.href = "index.php";
                      $('#loader').html('<input type="submit" value="Login" id="login" class="submit" />')
                    }else{  
                        $('#error').html(data);
                        $('#error').addClass('error');
                        $('#loader').html('<input type="submit" value="Login" id="login" class="submit" />')
                    }
                });
            }else{
                $('#error').html('Enter your password');
                $('#error').addClass('error');
                $('#loader').html('<input type="submit" value="Login" id="login" class="submit" />')
            }
        }else{
            $('#error').html('Enter your email address');
            $('#error').addClass('error');
            $('#loader').html('<input type="submit" value="Login" id="login" class="submit" />')
            
        }
    }else{
        $('#error').html('Enter your info to log in');
        $('#error').addClass('error');
        $('#loader').html('<input type="submit" value="Login" id="login" class="submit" />')
    }
});