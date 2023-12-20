<?php
// Thay đổi các thông tin kết nối dựa trên cấu hình của bạn
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
?>