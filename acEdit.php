<?php
    include 'conn.php';

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $user = $_POST['user'];
        $regNo = $_POST['reg'];
        $phone = $_POST['phone'];


        $sql = "UPDATE `users` SET `username`='$user', `reg`='$regNo', `phone`='$phone' WHERE id='$id'";
        $res = mysqli_query($conn, $sql);  
        if ($res) {
            echo 'success';
        }

    }