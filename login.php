<?php 
session_start();
require 'functions.php';

if(isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    $result = mysqli_query($conn, "SELECT username FROM user_crud WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row) ) {
        $_SESSION['login'] = true;
    }

}

if(isset($_SESSION["login"]) ){
    header("Location: index.php");
    exit;
}



if(isset($_POST["login"]) ) {

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $result = mysqli_query($conn, "SELECT * FROM user_crud WHERE username = '$username'");

    if(mysqli_num_rows($result) == 1) {
        $rows = mysqli_fetch_assoc($result);
        if(password_verify($password, $rows["password"])) {
            $_SESSION["login"] = true;

            // set cookie
            if(isset($_POST["remember"]) ) {
                setcookie("id", $rows["id"], time() + 60);
                setcookie("key", $rows["username"], time() + 60);
            }

            header("Location: index.php");
            exit;
        }

        
    }

    $error = false;
}


?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    


<form action="" method="POST">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="container bg-white shadow rounded mt-5">
                    <h1 style="text-align: center ;" class="mb-5 mt-3">Login</h1>
                    <form>
                        <div class="mb-3">
                            <?php if(isset($error)): ?>
                            <p style="color: red; font-style:italic">Username / Password salah</p>
                            <?php endif; ?>
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <p style="text-align: center;">Belum punya akun? <a href="register.php">Register</a></p>
                        <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                        <br><br><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>