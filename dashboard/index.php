<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location:../index.php?message=silahkan login terlebih dahulu");
}

// echo $_SESSION['status'];
if (isset($_POST['logout'])) {
    session_destroy();
    header("location:../index.php?message=keluar dari sistem!");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>

<body>
    <div>
        <section>
            <h3>Halo <?php echo $_SESSION['fullname']; ?></h3>
            <p>status pegawai: <?php echo $_SESSION['role']; ?></p>
            <br>
            <div>
                <table border="1">
                    <tr>
                        <th>Tanggal</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Performa</th>
                    </tr>
                    <!-- INI UNTUK CALL DATA ABSENSI -->
                    <?php include("absensi.php"); ?>
                    <!-- SELESAI DISINI -->
                </table>
            </div>
            <br />
            <form action="" method="POST">
                <button type="submit" nama="absen">ABSEN SEKARANG</button>
            </form>
            <br />
            <form action="" method="POST">
                <button name="logout" type="submit">logout</button>
            </form>
        </section>
    </div>
</body>

</html>