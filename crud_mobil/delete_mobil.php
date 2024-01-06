<?php
session_start();
include "../config/koneksi.php";
$no_plat_faisal = $_GET['no_plat_faisal'];
$delete = mysqli_query($koneksi, "DELETE FROM tbl_mobil_faisal_abdul_majid WHERE
no_plat_faisal='$_GET[no_plat_faisal]'");
if ($delete) {
    header("location:tampil_mobil.php");
} else {
    echo "<p>Gagal Menghapus !</p>";
    echo "<a href='tampil_mobil.php'>Coba Lagi</a>";
}
