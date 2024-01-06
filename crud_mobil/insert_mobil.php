<?php
session_start();
include "../config/koneksi.php";
$no_plat_faisal = $_POST['no_plat_faisal'];
$nama_mobil_faisal = $_POST['nama_mobil_faisal'];
$brand_mobil_faisal = $_POST['brand_mobil_faisal'];
$tipe_transmisi_faisal = $_POST['alamat_faisal'];
$insert = mysqli_query($koneksi, "INSERT INTO tbl_mobil_faisal_abdul_majid
(no_plat_faisal,
nama_mobil_faisal,
brand_mobil_faisal,
tipe_transmisi_faisal)
VALUES
('$_POST[no_plat_faisal]',
'$_POST[nama_mobil_faisal]',
'$_POST[brand_mobil_faisal]',
'$_POST[tipe_transmisi_faisal]')
");
if ($insert) {
    header("location:tampil_mobil.php");
} else {
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_mobil.php'>Coba Lagi</a>";
    echo "Error updating record: " . mysqli_error($koneksi);
}
