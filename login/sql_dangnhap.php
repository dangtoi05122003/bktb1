<?php
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST['userId'])) {
    require 'connect.php';
    $userId = $_POST['userId'];
    $password = $_POST['password'];
    $sql = "SELECT userId, password FROM dangnhap WHERE userId='$userId'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "Tên đăng nhập không tồn tại. <a href='dangnhap.php'>Vui lòng kiểm tra lại</a>";
        exit;
    }
    
    $row = $result->fetch_assoc();
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. <a href='dangnhap.php'>Vui lòng kiểm tra lại</a>";
        exit;
    }
    
    session_start();
    $_SESSION['userId'] = $userId;
    echo "Bạn đã đăng nhập thành công. <a href='log/log_tour.php'>Nhấp vào đây để truy cập</a>";
    exit;
}
?>