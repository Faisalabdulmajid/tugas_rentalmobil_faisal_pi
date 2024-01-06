<?php
session_start();
include "../config/koneksi.php";
$nim = $_GET['nik_ktp_faisal'];
$delete = mysqli_query($koneksi, "DELETE FROM tbl_pelanggan_faisal_abdul_majid WHERE
nik_ktp_faisal='$_GET[nik_ktp_faisal]'");
if ($delete) {
    header("location:tampil_pelanggan.php");
} else {
    echo "<p>Gagal Menghapus !</p>";
    echo "<a href='tampil_pelanggan.php'>Coba Lagi</a>";
    echo "Error updating record: " . mysqli_error($koneksi);
}
