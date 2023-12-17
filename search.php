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


    $sql = "SELECT name, price, destination FROM search WHERE name LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        echo "Không tìm thấy kết quả.";
        exit;
    }

    // Lấy kết quả từ câu truy vấn
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];

        session_start();
        $_SESSION['name'] = $name;

        // Chuyển hướng đến trang tương ứng
        switch ($name) {
            case "America":
                header("Location: dosmetic/america.php");
                exit;
            case "France":
                header("Location: dosmetic/france.php");
                exit;
            case "Italy":
                header("Location: dosmetic/italy.php");
                exit;
            case "Japan":
                header("Location: dosmetic/japan.php");
                exit;
            case "England":
                header("Location: dosmetic/england.php");
                exit;
            case "Thái Lan":
                header("Location: dosmetic/thailan.php");
                exit;
            case "SaudiArabia":
                header("Location: dosmetic/saudiarabia.php");
                exit;
            case "Canada":
                header("Location: dosmetic/canada.php");
                exit;
            case "Israel":
                header("Location: dosmetic/israel.php");
                exit;
            case "Spain":
                header("Location: dosmetic/spain.php");
                exit;
            case "Hà Nội":
                header("Location: domestic/HaNoi.php");
                exit;
            case "Đà Lạt":
                header("Location: domestic/DaLat.php");
                exit;
            case "Đà Nẵng":
                header("Location: domestic/DaNang.php");
                exit;
            case "Hà Giang":
                header("Location: domestic/HaGiang.php");
                exit;
            case "Hạ Long Bay":
                header("Location: domestic/HaLongBay.php");
                exit;
            case "Huế":
                header("Location: domestic/Hue.php");
                exit;
            case "Mỹ Tho":
                header("Location: domestic/MyTho_CanTho.php");
                exit;
            case "Phú Quốc":
                header("Location: domestic/PhuQuoc.php");
                exit;
            case "Sapa":
                header("Location: domestic/Sapa.php");
                exit;
            case "TP Hồ Chí Minh":
                header("Location: domestic/TPHoChiMinh.php");
                exit;
            default:
                echo "Không tìm thấy trang tương ứng.";
                exit;
        }
    }
}
?>