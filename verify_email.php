<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="content">
      <form id="veriForm">
        <div class="reg-form">
          <div class="form-title">
            <i class="fas fa-rotate-left icon-font1"></i>
            <h2>Reset Password</h2>
            <span id="error"></span>
          </div>
          <div class="form-body">
            <div class="row">
                <label for="code">Enter the code sent to your email</label>
                <input class="big-input" required type="text" name="code" id="code"/>
            </div>
            <span id="loader">
              <input type="submit" class="submit" name="submit_email" />
            </span>
          </div>
        </div>
      </form>
    </div>
  </body>
  <script src="js/jquery.min.js"></script>
  <script src="js/verify_email.js"></script>
</html>
