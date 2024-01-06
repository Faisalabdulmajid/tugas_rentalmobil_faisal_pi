<?php
session_start();
include "../config/koneksi.php";
$no_plat_faisal_tmp = $_POST['no_plat_faisal_tmp'];
$no_plat_faisal = $_POST['no_plat_faisal'];
$nama_mobil_faisal = $_POST['nama_mobil_faisal'];
$brand_mobil_faisal = $_POST['brand_mobil_faisal'];
$tipe_transmisi_faisal = $_POST['tipe_transmisi_faisal'];
$update = mysqli_query($koneksi, "UPDATE tbl_mobil_faisal_abdul_majid SET
no_plat_faisal='$no_plat_faisal',
nama_mobil_faisal='$nama_mobil_faisal',
brand_mobil_faisal='$brand_mobil_faisal',
tipe_transmisi_faisal='$tipe_transmisi_faisal'
WHERE no_plat_faisal='$no_plat_faisal_tmp'
");
if ($update) {
    header("location:tampil_mobil.php");
} else {
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_mobil.php'>Coba Lagi</a>";
    echo "Error updating record: " . mysqli_error($koneksi);
}
