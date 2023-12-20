<?php
header('Content-Type: text/html; charset=UTF-8');

// Thay đổi thông tin kết nối tới cơ sở dữ liệu của bạn
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tour";

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra xem người dùng đã gửi dữ liệu tìm kiếm hay chưa
if (isset($_GET['keyword'])) {
    $search = $_GET['keyword'];

    $sql = "SELECT name, price, destination FROM log_search WHERE name LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        echo "Không tìm thấy kết quả.";
        exit;
    }

    // Lấy kết quả từ câu truy vấn
    $name = "";
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        break;
    }

    session_start();
    $_SESSION['name'] = $name;

    // Chuyển hướng đến trang tương ứng
    switch ($name) {
        case "America":
            header("Location: http://localhost/BTKT/login/log/log_travel/log_america.php");
            exit;
        case "France":
            header("Location: http://localhost/BTKT/login/log/log_travel/log_france.php");
            exit;
        case "Italy":
            header("Location: http://localhost/BTKT/login/log/log_travel/log_italy.php");
            exit;
        case "Japan":
            header("Location: http://localhost/BTKT/login/log/log_travel/log_japan.php");
            exit;
        case "England":
            header("Location: http://localhost/BTKT/login/log/log_travel/log_england.php");
            exit;
        case "Thái Lan":
            header("Location: http://localhost/BTKT/login/log/log_travel/log_thailan.php");
            exit;
        case "SaudiArabia":
            header("Location: http://localhost/BTKT/login/log/log_travel/log_saudiarabia.php");
            exit;
        case "Canada":
            header("Location: http://localhost/BTKT/login/log/log_travel/log_canada.php");
            exit;
        case "Israel":
            header("Location: http://localhost/BTKT/login/log/log_travel/log_israel.php");
            exit;
        case "Spain":
            header("Location: http://localhost/BTKT/login/log/log_travel/log_spain.php");
            exit;
        case "Hà Nội":
            header("Location: log_HaNoi.php");
            exit;
        case "Đà Lạt":
            header("Location: log_DaLat.php");
            exit;
        case "Đà Nẵng":
            header("Location: log_DaNang.php");
            exit;
        case "Hà Giang":
            header("Location: log_HaGiang.php");
            exit;
        case "Hạ Long Bay":
            header("Location: log_HaLongBay.php");
            exit;
        case "Huế":
            header("Location: log_Hue.php");
            exit;
        case "Mỹ Tho":
            header("Location: log_MyTho_CanTho.php");
            exit;
        case "Phú Quốc":
            header("Location: log_PhuQuoc.php");
            exit;
        case "Sapa":
            header("Location: log_Sapa.php");
            exit;
        case "TP Hồ Chí Minh":
            header("Location: log_TPHoChiMinh.php");
            exit;
        default:
            echo "Không tìm thấy trang tương ứng.";
            exit;
    }
}
?>