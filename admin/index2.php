<!DOCTYPE html>
<html>

<head>
    <title>Sistem informasi Laundry bayar mahal</title>
</head>

<body>
    <h2>Halaman Admin</h2>
    <br />
    <!-- cek apakah sudah login -->
    <?php
        session_start();

        if($_SESSION['status'] !="login") {
        header("location:../index.php?pesan=belum_login");
        }
    ?>

    <h4>Selamat datang <?php echo $_SESSION['username']; ?> anda telah login. </h4>
    <p>selamat datang di halaman admin. Halaman admin masih kosong. yuk buat halaman admin nya dulu biar kece. </p>
    <p>selamat datang di halaman admin. Halaman admin masih kosong. yuk buat halaman admin nya dulu biar kece. </p>
    <br />
    <br />

    <a href="logout.php">LOGOUT</a>

</body>

</html>