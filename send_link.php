<?php
session_start();
include 'conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['email']))
{
    $email = $_POST['email'];
    $sql = "SELECT username, email FROM `users` WHERE email = '$email'";
    $res = mysqli_query($conn, $sql);
  if(mysqli_num_rows($res)==1)
  {
    $row=mysqli_fetch_assoc($res);
    
    $username=$row['username'];
    $email=$row['email'];

    $ver_code = rand(10000,99999);

    $sql1 = "UPDATE users SET ver_code = '$ver_code' WHERE email = '$email'";
    $res1 = mysqli_query($conn, $sql1);

    if($res1){

      require 'PHPMailer/src/PHPMailer.php';
      require 'PHPMailer/src/Exception.php';
      require 'PHPMailer/src/SMTP.php';
      $mail = new PHPMailer(true);
  
      try {
      $mail->CharSet =  "utf-8";
      $mail->IsSMTP();
      // enable SMTP authentication
      $mail->SMTPAuth = true;                  
      // GMAIL username
      $mail->Username = "momanyiiowen@gmail.com";
      // GMAIL password
      $mail->Password = "owen@8305";
      $mail->SMTPSecure = "ssl";
      // sets GMAIL as the SMTP server
      $mail->Host = "smtp.gmail.com";
      // set the SMTP port for the GMAIL server
      $mail->Port = 465;
      $mail->setFrom('momanyiiowen@gmail.com');
      $mail->FromName='Login System';
      $mail->AddAddress($email, $username);
      $mail->Subject  =  'Verification Code';
      $mail->IsHTML(true);
      $mail->Body = 'Hello, here is your verification code:<br><br><h1>'.$ver_code.'</h1>';
      $mail->send();
      $_SESSION['ver_mail'] = $email;
      echo 'success';
      } catch (Exception $e) {
        echo $e->errorMessage();
      }catch (\Exception $e) {
        echo $e->getMessage();
    }
    }else{
      echo 'We encountered a problem';
    }
  }else{
    echo 'Invalid email address!';
  }
}
?>