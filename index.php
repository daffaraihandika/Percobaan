<?php 
session_start();
require 'functions.php';

if(! isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Dhafin Bersahaja</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style type="text/css">
        .div1{
            background-image: url(img/jasa.jpg);
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: contain;
            background-position: center;
            margin-bottom: 100px;
        }
        .bg-wedo{
            background-color: #0099ff;
            height: 100%;
        }
    </style>
</head>
<body>
    <!-- awal navbar -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light; navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
            PT. Dhafin Bersahaja
            </a>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            </button><a href="logout.php" style="color: white;"><button type="button" class="btn btn-primary btn">Logout</a>
            </div>
        </div>
        </nav>
    </div>
    <!-- akhir navbar -->

    <!-- div 1 -->
    <div class="div1"></div>
    <!-- div 1 -->

    <!-- about us -->
    <div style="width: 100%;">
        <div class="container bg-white shadow rounded">
            <div class="h3 text-center mb-5">About Us</div>
                <div class="row justify-content-evenly">
                    <div class="col-4">
                    Jasa Gb PB Zepetto Absnet yang sudah berpengalaman Sejak awal tahun 2021 dan Kami jasa Gb Point Blank Zepetto mengerjakan semua GB dengan 16 Slot gb exp char. 2 slot gb masmed , 1 slot Gb clan 1 slot Gb kill, tanpa menggunakan Cheat, Program ilegal ataupun yang melanggar pihak PB Zepetto. jadi murni kami jalankan Gb Char pb anda tanpa menggunakan Cheat sehingga anda tidak perlu khawatir karena kami melakukan dengan cara yang sangat aman dan Dengan id tumbal Point Blank yang kami miliki            </div>
                    <div class="col-4">
                    Kami memberikan garansi uang kembali jika char yang di GB tidak sesui harapan, Jasa Gb kami bertempat di Jl. Babakan Priangan (depan SDN 211 Babakan Priangan), Kecamatan Regol, Kota Bandung, Jawa Barat bagi yang mau ketemu atau mau order langsung bisa datang ke tempat kami, pembayaran bisa melalui Bank , Bca , Bri , Bni , Mandiri , dan Pembayaran Via Pulsa, indomart , dana , ovo            </div>
                </div>
                <br><br><br>
        </div>
    </div>
    <!-- about us -->

    <!-- what we do -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,58.7C384,64,480,96,576,138.7C672,181,768,235,864,229.3C960,224,1056,160,1152,160C1248,160,1344,224,1392,256L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    text
    </svg>
    <div class="row bg-wedo">
        <div class="col">
            <p class="h1 text-center">What We Do</p>
            <div class="col-4 h4 shape-wedo border border-success rounded mt-5">
                <p>&#10003; Jasa Title</p>
                <p>&#10003; Jasa XP Char</p>
                <p>&#10003; Jasa XP Clan</p>
                <p>&#10003; Cit</p>
                <p>&#10003; Jasa Pangkat</p>
                <p>&#10003; Jasa Kill Char</p>
            </div>
        </div>
    </div>
    <!-- what we do -->

    <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="">PT Dhafin Bersahaja.com</a>
  </div>
  <!-- Copyright -->
</body>
</html>