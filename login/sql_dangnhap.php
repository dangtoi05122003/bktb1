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
// Redirect to the desired page based on the user type
if ($userId == "admin") {
    header("Location: http://localhost/BTKT/admin/admin.php");
} else {
    header("Location: http://localhost/BTKT/login/log/log_tour.php");
}
exit;
}
?>