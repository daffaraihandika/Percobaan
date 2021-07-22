<?php 

require 'functions.php';

if(isset($_POST["register"]) ) {

    if(register($_POST) > 0) {
        echo "<script>
                alert('Registrasi berhasil !')
                document.location.href = 'login.php'
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}



?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<form action="" method="POST">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="container bg-white shadow rounded mt-5">
                    <h1 style="text-align: center ;" class="mb-5 mt-3">Register</h1>
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password2" name="password2">
                        </div>
                        <p style="text-align: center;">Sudah punya akun? <a href="login.php">Login</a></p>
                        <button type="submit" class="btn btn-primary w-100" name="register">Register</button>
                        <br><br><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>