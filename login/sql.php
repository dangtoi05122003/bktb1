<?php
session_start();

if (isset($_SESSION['userId'])) {
    unset($_SESSION['userId']);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    require 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT userId, password FROM dangnhap WHERE userId=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        echo "Tên đăng nhập không tồn tại. <a href='dangnhap.php'>Vui lòng kiểm tra lại</a>";
        exit;
    }

    $row = $result->fetch_assoc();
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. <a href='dangnhap.php'>Vui lòng kiểm tra lại</a>";
        exit;
    }

    $_SESSION['userId'] = $username;
    echo "Bạn đã đăng nhập thành công";
}
?>