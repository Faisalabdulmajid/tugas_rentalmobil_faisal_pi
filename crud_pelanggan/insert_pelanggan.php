<?php
session_start();
include "../config/koneksi.php";
$nik_ktp_faisal = $_POST['nik_ktp_faisal'];
$nama_faisal = $_POST['nama_faisal'];
$no_hp_faisal = $_POST['no_hp_faisal'];
$alamat_faisal = $_POST['alamat_faisal'];
$insert = mysqli_query($koneksi, "INSERT INTO tbl_pelanggan_faisal_abdul_majid
(nik_ktp_faisal,
nama_faisal,
no_hp_faisal,
alamat_faisal)
VALUES
('$_POST[nik_ktp_faisal]',
'$_POST[nama_faisal]',
'$_POST[no_hp_faisal]',
'$_POST[alamat_faisal]')
");
if ($insert) {
    header("location:tampil_pelanggan.php");
} else {
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_pelanggan.php'>Coba Lagi</a>";
    echo "Error updating record: " . mysqli_error($koneksi);
}
