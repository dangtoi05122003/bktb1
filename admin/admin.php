<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("ul.nav li").click(function () {
                $("ul.nav li").removeClass("active");
                $(this).addClass("active");

                var sectionId = $(this).children("a").attr("href");
                $(".section").hide();
                $(sectionId).show();
            });
        });
    </script>
    <style>
        .section {
            display: none;
        }
        body {
            position: relative;
        }

        #add {
            padding-top: 50px;
            height: 500px;
            color: #fff;
            background-color: #1E88E5;
        }

        #edit {
            padding-top: 50px;
            height: 500px;
            color: #fff;
            background-color: #673ab7;
        }

        #delete {
            padding-top: 50px;
            height: 500px;
            color: #fff;
            background-color: #ff9800;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">zakart</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#section1">edit_product</a></li>
            <li><a href="#section2">add_product</a></li>
            <li><a href="#section3">delete_product</a></li>
        </ul>
    </div>
</nav>

<div id="section1" class="section">
<form action="connect.php" method="POST">
    <div class="form-group">
        <label for="productId">Product ID:</label>
        <input type="text" class="form-control" name="productId" id="productId" required>
    </div>
    <div class="form-group">
        <label for="productName">Product Name:</label>
        <input type="text" class="form-control" name="productName" id="productName" required>
    </div>
    <div class="form-group">
        <label for="departure">Departure Point:</label>
        <input type="text" class="form-control" name="departure" id="departure" required>
    </div>
    <div class="form-group">
        <label for="transportation">Transportation:</label>
        <input type="text" class="form-control" name="transportation" id="transportation" required>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" name="price" id="price" required>
    </div>
    <div class="form-group">
        <label for="promotion">Promotion:</label>
        <input type="text" class="form-control" name="promotion" id="promotion">
    </div>
    <div class="form-group">
        <label for="time">Time:</label>
        <input type="text" class="form-control" name="time" id="time" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Product</button>
</form>

</div>

<div id="section2" class="section">
<form action="connect.php" method="POST">
    <div class="form-group">
        <label for="productName">Product Name:</label>
        <input type="text" class="form-control" name="productName" id="productName" required>
    </div>
    <div class="form-group">
        <label for="departure">Departure Point:</label>
        <input type="text" class="form-control" name="departure" id="departure" required>
    </div>
    <div class="form-group">
        <label for="transportation">Transportation:</label>
        <input type="text" class="form-control" name="transportation" id="transportation" required>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" name="price" id="price" required>
    </div>
    <div class="form-group">
        <label for="promotion">Promotion:</label>
        <input type="text" class="form-control" name="promotion" id="promotion">
    </div>
    <div class="form-group">
        <label for="time">Time:</label>
        <input type="text" class="form-control" name="time" id="time" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>
</div>

<div id="section3" class="section">
<form action="connect.php" method="POST">
    <div class="form-group">
        <label for="productId">Product ID:</label>
        <input type="text" class="form-control" name="productId" id="productId" required>
    </div>
    <button type="submit" class="btn btn-danger">Delete Product</button>
</form>
</div>


</body>
</html>