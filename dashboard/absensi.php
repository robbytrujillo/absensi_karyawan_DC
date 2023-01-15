<?php
include("../connection.php");
//session_start();

date_default_timezone_set("Asia/Jakarta"); //GMT +07

$tgl = date('Y-m-d');
$clock_in = date('H:i:s');

$employe_id = $_SESSION['employe_id'];

if (isset($_POST['absen'])) {
    $sql = "INSERT INTO attendaces (id, employe_id, tgl, clock_in, clock_out) 
    VALUES (NULL, $employe_id, '$tgl', '$clock_in', NULL)";


    $result = $db->query($sql);

    if ($result === TRUE) {
        echo "BERHASIL ABSEN";
    } else {
        echo "GAGAL ABSEN";
    }
}

?>