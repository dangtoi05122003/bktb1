
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng nhập</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/style.css" />
    <!-- font roboto -->
    
  <style>
    body {
      background-color: #ffffff; /* Thay đổi màu nền thành trắng */
    }
    .card {
      margin-top: 10vh; /* Điều chỉnh vị trí thẻ card theo thiết bị */
      border-radius: 1rem;
    }
    @media (max-width: 576px) { /* Điều chỉnh cấu hình cho thiết bị di động */
      .card {
        margin-top: 30vh;
      }
    }
  </style>
</head>
<?php
  session_start();
  if (isset($_SESSION['userId'])) {
    unset($_SESSION['userId']);
  }
?>
<body>
<section class="vh-100" style="background-color: white;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
          <div class="card">
            <div class="row g-0">
              <div class="col d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form action="sql_dangnhap.php" method="POST" onsubmit="return loginRedirect()">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Đăng Nhập</span>
                    </div>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"></h5>
                    <div class="form-outline mb-4"> <!---->
                      <label class="form-label" for="userId">Tên Đăng Nhập</label>
                      <input name="userId" class="form-control form-control-lg" required>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Mật Khẩu</label>
                      <input name="password" type="text" class="form-control form-control-lg" required>
                    </div>
                    <div class="pt-1 mb-4">
                      <button type="submit" class="btn btn-dark btn-lg btn-block">ĐĂNG NHẬP</button>
                    </div>
                    <div class="text-center">
                      <span>Bạn chưa có tài khoản? </span>
                      <a href="http://localhost/BTKT/login/dangky.php">Đăng Ký</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<script>
       function loginRedirect() {
  const username = document.querySelector('input[name="username"]').value;
  localStorage.setItem('username', username);
  localStorage.setItem('isLoggedIn', true);

// Open a new window/tab with the desired URL
const newWindow = window.open("log/log_tour.php", "_blank");
  if (newWindow) {
    // If the new window/tab was successfully opened, focus on it
    newWindow.focus();
  } else {
    // If the new window/tab was blocked by the browser, show an alert
    alert("Vui lòng cho phép mở cửa sổ mới để tiếp tục.");
  }

  return false; // Prevent the form from submitting
}
		</script>
</body>
</html>