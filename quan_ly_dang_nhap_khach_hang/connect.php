<?php
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Xử lý biểu mẫu thêm người dùng
if (isset($_POST['userId']) && isset($_POST['password'])) {
    $userId = $conn->real_escape_string($_POST['userId']);
    $password = $conn->real_escape_string($_POST['password']);

    // Câu lệnh SQL để thêm người dùng
    $tsql = "INSERT INTO dangnhap (userId, password) VALUES ('$userId', '$password')";

    if ($conn->query($tsql) === TRUE) {
        echo "Thêm người dùng thành công";
    } else {
        echo "Lỗi khi thêm người dùng: " . $conn->error;
    }
}

// Xử lý biểu mẫu xóa người dùng
if (isset($_POST['deleteUserId'])) {
    $deleteUserId = $conn->real_escape_string($_POST['deleteUserId']);

    // Câu lệnh SQL để xóa người dùng
    $dsql = "DELETE FROM dangnhap WHERE userId = '$deleteUserId'";

    if ($conn->query($dsql) === TRUE) {
        echo "Xóa người dùng thành công";
    } else {
        echo "Lỗi khi xóa người dùng: " . $conn->error;
    }
}

// Đóng kết nối
$conn->close();
?>