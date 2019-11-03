<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('tool/css/style.css');?>">
    <title>LSM</title>
</head>
<body>
    <div class="container-fluid header">
        <div class="container ">
            <h2>Library Management System</h2>
        </div>
    </div>
    
    <div class="container banner">

    </div>

    <div class="container login ">
             <h2>Admin Login:</h2>
        <table class="form">
            <tr>
                <td>Enter Username</td>
                <td><input type="text" name="un" placeholder="Enter Username" class="form-control"></td>
            </tr>

            <tr>
                <td>Enter Password</td>
                <td><input type="password" name="un" placeholder="Enter Password" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="button" name="submit" class="btn btn-primary" value="Login"></td>
            </tr>
        </table>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>