<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            <li><a href="#section1">add customer</a></li>
            <li><a href="#section2">delete customer</a></li>
        </ul>
    </div>
</nav>
<div id="section1" class="section">
    <form method="POST" action="connect.php">
        <div class="form-group">
            <label for="userId">Name:</label>
            <input type="text" class="form-control" name="userId" id="userId" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" class="form-control" name="password" id="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Add customer</button>
    </form>
</div>

<div id="section2" class="section">
    <form method="POST" action="connect.php">
        <div class="form-group">
            <label for="userId">Name:</label>
            <input type="text" class="form-control" name="userId" id="userId" required>
        </div>
        <button type="submit" class="btn btn-danger">Delete customer</button>
    </form>
</div>

</body>
</html>