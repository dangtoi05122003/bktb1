
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng ký</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/style.css" />
  <!-- font roboto -->
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    rel="stylesheet"
  />
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

<body>
  <section class="vh-100" style="background-color: white;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
          <div class="card">
            <div class="row g-0">
              <div class="col d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                <form action="sql_dangky.php" method="POST">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Đăng Ký</span>
                    </div>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"></h5>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="username">Tên Đăng Nhập</label>
                      <input name="username" class="form-control form-control-lg" required>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Mật Khẩu</label>
                      <input name="password" type="text" class="form-control form-control-lg" required>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="password_re">Nhập Lại Mật Khẩu</label>
                      <input name="password_re" type="text" class="form-control form-control-lg" required>
                    </div>
                    <div class="pt-1 mb-4">
                      <button type="submit" class="btn btn-dark btn-lg btn-block">ĐĂNG KÝ</button>
                    </div>
                  </form>
                  <div class="mb-3">
                    <span>Bạn đã có tài khoản? </span>
                    <a href="http://localhost/BTKT/login/dangnhap.php">Đăng nhập</a>
                  </div>
                  <div class="text-center">
                    <p class="mb-0">Hoặc đăng ký bằng:</p>
                    <div class="btn-group mt-2">
                      <a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Faccounts.google.com%2F&followup=https%3A%2F%2Faccounts.google.com%2F&ifkv=AYZoVhfPpAJeBtPqEhgLhcoHda_5JsWdpNYp8Jn9wbUrXs5QbXciA03UaJ9UxPcm5dTwYEZ7MIlttw&passive=1209600&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-1593582754%3A1695267827614013&theme=glif" class="btn btn-outline-primary">Google</a>
                      <a href="https://m.facebook.com/login/?locale=vi_VN&refsrc=deprecated" class="btn btn-outline-primary">Facebook</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</body>
</html>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      // Attach event listener to the form's submit event
      document.querySelector("#registerForm").addEventListener("submit", showSuccessMessage);

      // Check if the user has successfully registered
      const registered = sessionStorage.getItem("registered");
      if (registered) {
        // Clear the flag
        sessionStorage.removeItem("registered");

        // Redirect to login.html
        window.location.href = "http://localhost/BTKT/login/dangnhap.php";
      }
    });

    function showSuccessMessage(event) {
      event.preventDefault(); // Prevent form submission

      const name = document.querySelector('[name="username"]').value;
      alert("Tài khoản đã được đăng ký thành công!");

      // Set the flag indicating successful registration
      sessionStorage.setItem("registered", "true");

      // Redirect to login.html
      window.location.href = "http://localhost/BTKT/login/dangnhap.php";
    }
  </script>