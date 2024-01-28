<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Laundry Bayar Mahal</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>

<body style="background: #f0f0f0">
    <!-- cek apakah sudah login -->
    <?php
        session_start();

        if($_SESSION['status'] !="login") {
        header("location:../index.php?pesan=belum_login");
        }
    ?>

    <nav class="navbar navbar-inverse" style="border-radius:0px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#jaka"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">LAUNDRY Bayar Mahal</a>
            </div>

            <div class="collapse navbar-collapse" id="jaka">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php" class="">
                            <i class="glyphicon glyphicon-home"></i> &nbsp; Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="pelanggan.php" class="">
                            <i class="glyphicon glyphicon-user"></i> &nbsp; Pelanggan
                        </a>
                    </li>
                    <li>
                        <a href="transaksi.php" class="">
                            <i class="glyphicon glyphicon-random"></i> &nbsp; Transaksi
                        </a>
                    </li>
                    <li>
                        <a href="laporan.php" class="">
                            <i class="glyphicon glyphicon-list-alt"></i> &nbsp; Laporan
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            ara-expanded="false">
                            <i class="glyphicon glyphicon-wrench"></i> &nbsp; Pengaturan <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- <li><a href="harga.php">Pengaturan Harga</a></li> -->
                            <li><a href="ganti_password.php">Ganti Password</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php" class="">
                            <i class="glyphicon glyphicon-log-out"></i> &nbsp; Log Out
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-text">Halo, <b><?= $_SESSION['username'] ?></b></li>
                </ul>
            </div>
        </div>
    </nav>