<?php
session_start();
include "../config/koneksi.php";
$nik_ktp_faisal_tmp = $_POST['nik_ktp_faisal_tmp'];
$nik_ktp_faisal = $_POST['nik_ktp_faisal'];
$nama_faisal = $_POST['nama_faisal'];
$no_hp_faisal = $_POST['no_hp_faisal'];
$alamat_faisal = $_POST['alamat_faisal'];
$update = mysqli_query($koneksi, "UPDATE tbl_pelanggan_faisal_abdul_majid SET
nik_ktp_faisal='$nik_ktp_faisal',
nama_faisal='$nama_faisal',
no_hp_faisal='$no_hp_faisal',
alamat_faisal='$alamat_faisal'
WHERE nik_ktp_faisal='$nik_ktp_faisal_tmp'
");
if ($update) {
    header("location:tampil_pelanggan.php");
} else {
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_pelanggan.php'>Coba Lagi</a>";
    echo "Error updating record: " . mysqli_error($koneksi);
}
