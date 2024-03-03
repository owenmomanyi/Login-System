<?php
include 'conn.php';
include 'log_errors.php';
session_start();

if (isset($_POST['email']) && isset($_POST['pass'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql1 = "SELECT * FROM users WHERE email='$email'";
    $res1 = mysqli_query($conn, $sql1);
    $rows = mysqli_num_rows($res1);

    


    if ($rows > 0) {
        $sql = "UPDATE `users` SET `pass`='$pass' WHERE email = '$email'";
        $res = mysqli_query($conn, $sql);
            if ($res) {
                echo 'success';
            }else{
                echo "Unable to reset your password";
            }
    }else{
        echo "Invalid email!";
    }
}