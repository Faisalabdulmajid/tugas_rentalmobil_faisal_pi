<?php
session_start();
include "config/koneksi.php";
$username_faisal = $_POST['username_faisal'];
$password_faisal = md5($_POST['password_faisal']);
$cari = mysqli_query($koneksi, "SELECT * FROM tbl_user_faisal_abdul_majid WHERE username_faisal='$username_faisal' AND password_faisal='$password_faisal'");
$data = mysqli_fetch_array($cari);
if (!empty($data['username_faisal'])) {
    $_SESSION['username_faisal'] = $data['username_faisal'];
    $_SESSION['password_faisal'] = $data['password_faisal'];
    $_SESSION['nama_lengkap_faisal'] = $data['nama_lengkap_faisal'];
    $_SESSION['level_faisal'] = $data['level_faisal'];
    echo "<script>alert('Berhasil Login');
window.location='menu.php';</script>";
} else {
    echo "<script>alert('Gagal Login'); window.location='masuk.php';</script>";
}
