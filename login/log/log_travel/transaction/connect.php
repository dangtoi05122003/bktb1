<?php
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost"; // Tên máy chủ MySQL
$username = "root"; // Tên người dùng MySQL
$password = ""; // Mật khẩu của người dùng MySQL
$dbname = "tour"; // Tên cơ sở dữ liệu MySQL

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Kiểm tra xem các giá trị đã được gửi từ biểu mẫu hay chưa
if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['destination'], $_POST['date'], $_POST['card-number'], $_POST['expiry'], $_POST['cvv'], $_POST['total-amount'])) {
    // Lấy dữ liệu từ biểu mẫu
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $cardNumber = $_POST['card-number'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];
    $totalAmount = $_POST['total-amount'];

    // Chuẩn bị truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO booking (name, email, phone, destination, date, card_number, expiry, cvv, total_amount)
            VALUES ('$name', '$email', '$phone', '$destination', '$date', '$cardNumber', '$expiry', '$cvv', '$totalAmount')";

    // Thực thi truy vấn và kiểm tra kết quả
    if ($conn->query($sql) === TRUE) {
        echo "Đặt vé thành công!";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Dữ liệu không hợp lệ!";
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>