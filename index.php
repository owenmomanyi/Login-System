<?php
include 'conn.php';
session_start();
if (!isset($_SESSION['usid'])) {
    header('Location: login.html');
}
$id = $_SESSION['usid'];
$sql = "SELECT * FROM `users` WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($res);
$rows = mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="nav">
        <div class="account">Hello <a href="account.php"><?php if ($data['username'] == '') {
            echo $data['email'];
        }else{
            echo $data['username'];
        } ?></a>, <a href="logout.php"><i class="fas fa-arrow-right-from-bracket"></i></a></div>
    </div>
    <div class="container">
        <div class="wrapper">
            <div class="controls">
                <div class="search">
                    <i class="fa-solid fa-user"></i>
                    <input placeholder="Search with registration number" type="text" name="srch" id="srch">
                </div>
            </div>
            <div class="data-sheet">
                <span id="infoSearch">
                    <div class="holder" id="holder">
                        <h2>Your Search Results</h2>
                    </div>
                </span>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/index.js"></script>

</html>