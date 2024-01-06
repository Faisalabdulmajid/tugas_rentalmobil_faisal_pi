<?php
session_start();
if (empty($_SESSION['username_faisal']) and empty($_SESSION['password_faisal'])) {
    echo "<script>alert('Anda tidak memiliki akses'); window.location =
'../masuk.php'</script>";
} else {
?>
    <?php
    include "../config/koneksi.php";
    $i = 0;
    $keyword = mysqli_real_escape_string($koneksi, $_GET['keyword']);
    $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_faisal_abdul_majid WHERE nama_faisal like '%$keyword%'");
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data Pelanggan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container-fluid bg-primary">
            <div class="container">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-light text-decoration-none">
                        <span class="fs-4">RentalMobil</span>
                    </a>
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="../menu.php" class="nav-link active" aria-current="page">Home</a></li>
                        <li li class="nav-item">
                            <div class="dropdown-center">
                                <button class="btn btn-primary dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Mobil
                                </button>
                                <ul class="dropdown-menu ">
                                    <li><a class="dropdown-item" href="../crud_mobil/tampil_mobil.php">Tampil Mobil</a></li>
                                    <li><a class="dropdown-item" href="../crud_mobil/tambah_mobil.php">Tambah Mobil</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown-center">
                                <button class="btn btn-primary dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pelanggan
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../crud_pelanggan/tampil_pelanggan.php">Tampil Pelanggan</a></li>
                                    <li><a class="dropdown-item" href="../crud_pelanggan/tambah_pelanggan.php">Tambah Pelanggan</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown-center">
                                <button class="btn  btn-primary dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Rental
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../crud_rental/tampil_rental.php">Tampil Rental</a></li>
                                    <li><a class="dropdown-item" href="../crud_rental/tambah_rental.php">Tambah Rental</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item "><a href="#" class="nav-link text-light">Admin</a></li>
                        <li class="collapse navbar-collapse" style="border: 1px solid black; " id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <a href="../logout.php" class='btn btn-danger'>keluar</a>
                            </ul>
                        </li>
                    </ul>
                </header>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
            </div>
            <div class="card border-success mb-3">
                <div class="card-header">Edit Data Pelanggan</div>
                <div class="card-body text-success">
                    <div class="row">
                        <div class="col-md-5 ">
                            <form method="POST" action="update_pelanggan.php">
                                <?php
                                include "../config/koneksi.php";
                                $nik_ktp_faisal = $_GET['nik_ktp_faisal'];
                                $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_faisal_abdul_majid WHERE nik_ktp_faisal='$nik_ktp_faisal'");
                                $data = mysqli_fetch_array($tampil);
                                ?>
                                <div class="mb-3 mt-3">
                                    <label for="nik_ktp_faisal" class="form-label">NIK :</label>
                                    <input type="hidden" name="nik_ktp_faisal_tmp" value="<?= $data['nik_ktp_faisal'] ?>" class="form-control" id="nim_ktp_faisal_tmp" required>
                                    <input type="text" name="nik_ktp_faisal" value="<?= $data['nik_ktp_faisal'] ?>" class="form-control" id="nik_ktp_faisal" placeholder="Masukan NIK" required>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="nama_faisal" class="form-label">Nama Lengkap :</label>
                                    <input type="text" name="nama_faisal" value="<?= $data['nama_faisal'] ?>" class="form-control" id="nama_faisal" placeholder="Masukan Nama Pelanggan" required>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="no_hp_faisal" class="form-label">No Hp :</label>
                                    <input type="text" name="no_hp_faisal" value="<?= $data['no_hp_faisal'] ?>" class="form-control" id="no_hp_faisal" placeholder="Masukan No Hp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat_faisal" class="form-label">Alamat:</label>
                                    <input type="text" name="alamat_faisal" value="<?= $data['alamat_faisal'] ?>" class="form-control" id="alamat_faisal" placeholder="Masukan Alamat" required>
                                </div>
                                <div class="mb-3">
                                    <a href="tampil_pelanggan.php" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Perbaharui</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-primary">
            <div class="container">
                <footer class="py-3">
                    <p class="text-center text-light">&copy; 2024 | Rental mobil Faisal</p>
                </footer>
            </div>
        </div>
    </body>

    </html>
<?php
}
?>