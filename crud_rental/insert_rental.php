<?php
include "../config/koneksi.php";
$no_trx_faisal = $_POST['no_trx_faisal'];
$nik_ktp_faisal = $_POST['nik_ktp_faisal'];
$no_plat_faisal = $_POST['no_plat_faisal'];
$tgl_rental_faisal = $_POST['tgl_rental_faisal'];
$jam_rental_faisal = $_POST['jam_rental_faisal'];
$lama_faisal = $_POST['lama_faisal'];
$harga_faisal = $_POST['harga_faisal'];
$total_bayar_faisal = $_POST['total_bayar_faisal'];
$insert = mysqli_query($koneksi, "INSERT INTO tbl_rental_faisal_abdul_majid
(no_trx_faisal,
nik_ktp_faisal,
no_plat_faisal,
tgl_rental_faisal,
jam_rental_faisal,
lama_faisal,
harga_faisal,
total_bayar_faisal) 
VALUES
('$_POST[no_trx_faisal]',
'$_POST[nik_ktp_faisal]',
'$_POST[no_plat_faisal]',
'$_POST[tgl_rental_faisal]',
'$_POST[jam_rental_faisal]',
'$_POST[lama_faisal]',
'$_POST[harga_faisal]',
'$_POST[total_bayar_faisal]')") or die(mysqli_error($koneksi));
if ($insert) {
    header("location:tampil_rental.php");
} else {
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_rental.php'>Coba Lagi</a>";
}
