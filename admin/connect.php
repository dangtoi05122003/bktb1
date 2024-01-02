<?php
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tour";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Xử lý biểu mẫu chỉnh sửa sản phẩm
if (isset($_POST['productId']) && isset($_POST['productName']) && isset($_POST['departure']) && isset($_POST['transportation']) && isset($_POST['price']) && isset($_POST['promotion']) && isset($_POST['time'])) {
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $departure = $_POST['departure'];
    $transportation = $_POST['transportation'];
    $price = $_POST['price'];
    $promotion = $_POST['promotion'];
    $time = $_POST['time'];

    // Câu lệnh SQL để cập nhật sản phẩm
    $sql = "UPDATE Products SET product_name='$productName', departure_point='$departure', transportation='$transportation', price='$price', promotion='$promotion', time='$time' WHERE product_id='$productId'";

    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật sản phẩm thành công";
    } else {
        echo "Lỗi khi cập nhật sản phẩm: " . $conn->error;
    }
}

// Xử lý biểu mẫu thêm sản phẩm
if (isset($_POST['productName']) && isset($_POST['departure']) && isset($_POST['transportation']) && isset($_POST['price']) && isset($_POST['promotion']) && isset($_POST['time'])) {
    $productName = $_POST['productName'];
    $departure = $_POST['departure'];
    $transportation = $_POST['transportation'];
    $price = $_POST['price'];
    $promotion = $_POST['promotion'];
    $time = $_POST['time'];

    // Câu lệnh SQL để thêm sản phẩm
    $sql = "INSERT INTO Products (product_name, departure_point, transportation, price, promotion, time) VALUES ('$productName', '$departure', '$transportation', '$price', '$promotion', '$time')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm sản phẩm thành công";
    } else {
        echo "Lỗi khi thêm sản phẩm: " . $conn->error;
    }
}

// Xử lý biểu mẫu xóa sản phẩm
if (isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    // Câu lệnh SQL để xóa sản phẩm
    $sql = "DELETE FROM Products WHERE product_id='$productId'";

    if ($conn->query($sql) === TRUE) {
        echo "Xóa sản phẩm thành công";
    } else {
        echo "Lỗi khi xóa sản phẩm: " . $conn->error;
    }
}

// Đóng kết nối
$conn->close();
?>