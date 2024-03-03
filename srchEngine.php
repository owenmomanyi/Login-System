<?php
include 'conn.php';

if (isset($_POST['srch'])) {
    $srch = $_POST['srch'];

    $sql = "SELECT * FROM `users` WHERE reg LIKE '%$srch%'";
    $res = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($res);

    if ($rows > 0) {
        ?>
        <table>
            <tr>
                <th>Reg Number</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
            <?php
            while ($data = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><?php echo $data['reg'] ?></td>
                    <td><?php echo $data['phone'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                </tr>
            <?php
            } ?>
        </table>
    <?php
    } else { ?>
        <div class="holder">
            <h2>No matching records!</h2>
        </div>
<?php
    }
}
?>