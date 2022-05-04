
<?php
session_start();
if (isset($_POST['submit'])) {
    require_once('functions.php');
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $email = trim(strip_tags($email));
    $pass = trim(strip_tags($pass));

    $sql = "SELECT * FROM user WHERE email='{$email}' AND pass='{$pass}'";
    global $conn;
    $kq = $conn->query($sql);

    if ($kq->rowCount() == 0) {
        header("location: ../index.php?page=login");
        $error = 'Vui lòng kiểm tra lại thông tin';
    } else {
        header("location: index.php?page=theloai_ds");
    }

}
