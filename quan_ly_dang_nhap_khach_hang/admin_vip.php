<!DOCTYPE html>
<html>
<head>
    <title>Form đăng ký</title>
</head>
<body>
    <h2>Thêm người dùng</h2>
    <form method="POST" action="connect.php">
        <label for="userId">User ID:</label>
        <input type="text" name="userId" id="userId" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Thêm">
    </form>

    <h2>Xóa người dùng</h2>
    <form method="POST" action="connect.php">
        <label for="userId">User ID:</label>
        <input type="text" name="userId" id="userId" required><br><br>

        <input type="submit" value="Xóa">
    </form>
</body>
</html>