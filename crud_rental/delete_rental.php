<?php
session_start();
include "../config/koneksi.php";
$nim = $_GET['no_trx_faisal'];
$delete = mysqli_query($koneksi, "DELETE FROM tbl_rental_faisal_abdul_majid WHERE
no_trx_faisal='$_GET[no_trx_faisal]'");
if ($delete) {
    header("location:tampil_rental.php");
} else {
    echo "<p>Gagal Menghapus !</p>";
    echo "<a href='tampil_rental.php'>Coba Lagi</a>";
    echo "Error updating record: " . mysqli_error($koneksi);
}
