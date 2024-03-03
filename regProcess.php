<?php
    include 'conn.php';

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $regNo = $_POST['reg'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];


        $sql = "SELECT * FROM `users` WHERE email = '$email'";
        $res = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($res);
  
        if ($rows < 1) {
            $sql1 = "INSERT INTO `users`(`email`, `reg`, `phone`, `pass`) VALUES ('$email','$regNo','$phone','$pass')";
            $res1 = mysqli_query($conn, $sql1);
            if ($res1) {
                echo 'success';
            }else{
                echo 'Sorry, we are unable to complete registration';
            }
        }else{
            echo 'The email you entered is already registered';
        }

    }