<!DOCTYPE html>
<html>
<head>
    <title>Thanh toán du lịch</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <style>
        .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

.row {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#total-amount {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
}

#discount-code {
    width: 70%;
    margin-right: 10px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

#apply-discount,
#checkout {
    width: 100%;
    margin-bottom: 10px;
}
    </style>
    <div class="container">
        <h1>Đặt vé du lịch</h1>
        
        <div class="booking-details">
            <h2>Thông tin đặt chỗ</h2>
            <div class="row">
                <label for="name">Họ tên:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="row">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="row">
                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            
            <div class="row">
                <label for="destination">Địa điểm:</label>
                <select id="destination" name="destination" required onchange="updateTotalAmount()">
                    <option value="">Chọn địa điểm</option>
                    <option value="Hà Nội" data-price="12.490.000">Hà Nội</option>
                    <option value="Hạ long bay" data-price="9.999.999">Hạ long bay</option>
                    <option value="phú quốc" data-price="6.999.999">phú quốc</option>
                    <option value="sapa" data-price=" 5.990.000">sapa</option>
                    <option value="Đà Nẵng" data-price=" 5.990.000">Đà Nẵng</option>
                    <option value="Đà Lạt" data-price="6.790.000">Đà Lạt</option>
                    <option value="Hà Giang" data-price="6.590.000">Hà Giang</option>
                    <option value="TP Hồ Chí Minh" data-price="9.590.000">TP Hồ Chí Minh</option>
                    <option value="Mỹ Tho - Cần Thơ" data-price=" 5.990.000">Mỹ Tho - Cần Thơ</option>
                    <option value="Huế" data-price="4.999.999">Huế</option>
                </select>
            </div>
            
            <div class="row">
                <label for="date">Ngày đi:</label>
                <input type="date" id="date" name="date" required>
            </div>
        </div>
        
        <div class="payment-details">
            <h2>Thông tin thanh toán</h2>
            <div class="row">
                <label for="card-number">Số thẻ:</label>
                <input type="text" id="card-number" name="card-number" required>
            </div>
            
            <div class="row">
                <label for="expiry">Ngày hết hạn:</label>
                <input type="text" id="expiry" name="expiry" required>
            </div>
            
            <div class="row">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
        </div>
        
        <div class="total-amount">
            <h2>Tổng số tiền:</h2>
            <div id="total-amount">0 VND</div>
        </div>

        <button id="apply-discount">Áp dụng mã giảm giá</button>
        <input type="text" id="discount-code" placeholder="Nhập mã giảm giá">
        <button id="checkout">Thanh toán</button>
    </div>

    <script src="script.js"></script>
    <script>
        function updateTotalAmount() {
            var destinationSelect = document.getElementById("destination");
            var selectedOption = destinationSelect.options[destinationSelect.selectedIndex];
            var price = selectedOption.getAttribute("data-price");

            // Cập nhật số tiền
            document.getElementById("total-amount").innerHTML = price.toLocaleString() + " VND";
        }

        document.getElementById("apply-discount").addEventListener("click", function() {
            var discountCode = document.getElementById("discount-code").value;
            
            // Gửi yêu cầu kiểm tra mã giảm giá tới máy chủ và xử lý phản hồi
            // Ví dụ: Kiểm tra mã giảm giá và cập nhật giá cuối cùng dựa trên phản hồi từ máy chủ
            if (discountCode === "2121050429") {
                // Áp dụng giảm giá 10% cho tổng số tiền
                var currentTotal = parseFloat(document.getElementById("total-amount").innerHTML.replace(" VND", "").replace(".", "").replace(",", ""));
                var discountedTotal = currentTotal * 0.9;
                document.getElementById("total-amount").innerHTML = discountedTotal.toLocaleString() + " VND";
                
                // Hiển thị thông báo thành công
                alert("Mã giảm giá đã được áp dụa thành công!");
            } else {
                // Hiển thị thông báo lỗi
                alert("Mã giảm giá không hợp lệ!");
            }
        });

        document.getElementById("checkout").addEventListener("click", function() {
            // Thực hiện thanh toán
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var destination = document.getElementById("destination").value;
            var date = document.getElementById("date").value;
            var cardNumber = document.getElementById("card-number").value;
            var expiry = document.getElementById("expiry").value;
            var cvv = document.getElementById("cvv").value;
            var totalAmount = document.getElementById("total-amount").innerHTML;

            // Gửi thông tin thanh toán tới máy chủ và xử lý phản hồi
            // Ví dụ: Gửi yêu cầu đặt vé và hiển thị kết quả đặt chỗ cho người dùng
            alert("Đặt vé thành công!\n\nThông tin đặt chỗ:\nHọ tên: " + name + "\nEmail: " + email + "\nSố điện thoại: " + phone + "\nĐịa điểm: " + destination + "\nNgày đi: " + date + "\nTổng số tiền: " + totalAmount);

            // Reset form
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("destination").selectedIndex = 0;
            document.getElementById("date").value = "";
            document.getElementById("card-number").value = "";
            document.getElementById("expiry").value = "";
            document.getElementById("cvv").value = "";
            document.getElementById("total-amount").innerHTML = "0 VND";
            document.getElementById("discount-code").value = "";
        });
    </script>
</body>
</html>