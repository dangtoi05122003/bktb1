<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost"; // Địa chỉ máy chủ MySQL
$username = "root"; // Tên người dùng MySQL
$password = ""; // Mật khẩu MySQL
$dbname = "user"; // Tên cơ sở dữ liệu

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ biểu mẫu
$username = $_POST['username'];
$password = $_POST['password'];
$password_re = $_POST['password_re'];
// Kiểm tra xem tên người dùng đã tồn tại trong cơ sở dữ liệu chưa
$check_query = "SELECT * FROM regs WHERE username = '$username'";
$result = $conn->query($check_query);
if ($result->num_rows > 0) {
    echo "Tên người dùng đã tồn tại.";
} else {
    // Thực hiện lệnh INSERT để thêm học phần vào bảng "regs"
    $insert_query = "INSERT INTO regs (username, password, password_re) VALUES ('$username', '$password', '$password_re')";

    if ($conn->query($insert_query) === TRUE) {
        echo "Đăng ký đã được lưu thành công. <a href='dangnhap.php'>đăng nhập</a>";
    } else {
        echo "Lỗi: " . $insert_query . "<br>" . $conn->error;
    }
}

$conn->close();
?>