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
        <div class="icon" onclick = "history.back()"><i class="fas fa-arrow-left"></i></div>
        <div class="account">Account, <a href="logout.php"><i class="fas fa-arrow-right-from-bracket"></i></a></div>
    </div>
    <div class="container">
        <div class="wrapper window">
            <div class="controls">
                <h2 style="color:white;">Edit Account Details</h2>
            </div>
            <div class="data-sheet">
                <form id="edit">
                <div class="edit-body">
                        <span id="error"></span>
                        <div class="row">
                            <label for="username">Username</label>
                            <div class="inputs">                 
                                <input class="edt" type="text" required id="username" value="<?php echo $data['username'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label for="reg">Registration Number</label>
                            <div class="inputs">
                                <input class="edt" type="text" required id="reg" value="<?php echo $data['reg'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label for="phone">Phone</label>
                            <div class="inputs">
                                <input class="edt" type="tel" required id="phone" value="<?php echo $data['phone'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <input type="hidden" value="<?php echo $id ?>" id="id">
                            <input type="submit" disabled value="Save" id="save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/account.js"></script>

</html>