<?php
include "../config/koneksi.php";
$no_trx_faisal_tmp = $_POST['no_trx_faisal_tmp'];
$no_trx_faisal = $_POST['no_trx_faisal'];
$nik_ktp_faisal = $_POST['nik_ktp_faisal'];
$no_plat_faisal = $_POST['no_plat_faisal'];
$tgl_rental_faisal = $_POST['tgl_rental_faisal'];
$jam_rental_faisal = $_POST['jam_rental_faisal'];
$lama_faisal = $_POST['lama_faisal'];
$harga_faisal = $_POST['harga_faisal'];
$total_bayar_faisal = $_POST['total_bayar_faisal'];
$update = mysqli_query($koneksi, "UPDATE tbl_rental_faisal_abdul_majid SET
no_trx_faisal='$no_trx_faisal',
nik_ktp_faisal='$nik_ktp_faisal',
no_plat_faisal='$no_plat_faisal',
tgl_rental_faisal='$tgl_rental_faisal',
jam_rental_faisal='$jam_rental_faisal',
lama_faisal='$lama_faisal',
harga_faisal='$harga_faisal',
total_bayar_faisal='$total_bayar_faisal'
WHERE no_trx_faisal='$no_trx_faisal_tmp'
");
if ($update) {
    header("location:tampil_rental.php");
} else {
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_rental.php'>Coba Lagi</a>";
    echo "Error updating record: " . mysqli_error($koneksi);
}
