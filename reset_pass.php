<?php
include 'conn.php';
session_start();
$email = $_SESSION['ver_mail'];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Set New Password</title>
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <div class="content">
        <form id="newPassForm">
            <div class="reg-form">
            <div class="form-title">
              <i class="fas fa-key icon-font1"></i>
              <h2>New Password</h2>
              <span id="error"></span>
            </div>
            <div class="form-body">
              <div class="row">
                <input type="hidden" id="email" value="<?php echo $email;?>">
                <p>Enter New password</p>
                <input required type="password" id='password'>
              </div>
              <div class="row">
                <p>Confirm Password</p>
                <input required type="password" id='password_match'>
              </div>
            </div>
            <span id="loader">
              <input type="submit" class="submit" id="reset">
            </span>
          </div>
          </form>
      </div>
    </body>
    <script src="js/jquery.min.js"></script>
    <script src="js/reset_pass_engine.js"></script>
    </html>