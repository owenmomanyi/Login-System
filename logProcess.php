<?php
include 'conn.php';
session_start();

if (isset($_POST['email']) && isset($_POST['pass'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `users` WHERE email = '$email' OR username = '$email'";
    $res = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($res);


    $sql2 = "SELECT * FROM `users` WHERE email = '$email' AND pass = '$pass' OR username = '$email' AND pass = '$pass'";
    $res2 = mysqli_query($conn, $sql2);
    $rows2 = mysqli_num_rows($res2);
    $data = mysqli_fetch_assoc($res2);
        if ($rows > 0) {
            if ($rows2 > 0) {
                $_SESSION['usid'] = $data['id'];
                echo 'success';
            }else{
                echo "Incorrect Password";
            }
        }else{
            echo "Account not found!";
        }
    }