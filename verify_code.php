<?php
    include 'conn.php';
    session_start();

    if (isset($_POST['code'])) {
        $code = $_POST['code'];
        $email = $_SESSION['ver_mail'];

        $sql = "SELECT * FROM `users` WHERE email ='$email' AND ver_code='$code'";
        $res = mysqli_query($conn,$sql);
        $rows = mysqli_num_rows($res);

        if ($rows > 0) {
            echo 'success';
        }else{
            echo 'Invalid verification code!';
        }
    }
?>