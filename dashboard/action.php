<?php
include("../connection.php");
session_start();

date_default_timezone_set("Asia/Jakarta"); //GMT +07

$employe_id = $_SESSION['employe_id'];
$tgl = date('Y-m-d');
$clock_in = date('H:i:s');

if (isset($_POST['absen'])) {

    $check_absensi = "SELECT tgl FROM attendaces WHERE employe_id = $employe_id";
    $check = $db->query($check_absensi);

    if ($check->num_rows > 0) {
        header("location:index.php?message=anda sudah absen");
        var_dump("dia sudah absen");
    } else {
        $sql = "INSERT INTO attendaces (id, employe_id, tgl, clock_in, clock_out) 
        VALUES (NULL, $employe_id, '$tgl', '$clock_in', NULL)";

        $result = $db->query($sql);
        if ($result === TRUE) {
            header("location:index.php?message=absen berhasil dilakukan");
        } else {
            header("location:index.php?message=absensi gagal!");
        }
    }
    // while ($row = $check->fetch_assoc()) {
    //     if ($row['tgl'] == $tgl) {
    //         header("location:index.php?message=maaf anda sudah absen hari ini");
    //     } else {

    //     }
    // }


}
?>