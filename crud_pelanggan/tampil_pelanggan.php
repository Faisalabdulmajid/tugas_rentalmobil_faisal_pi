<?php
session_start();
if (empty($_SESSION['username_faisal']) and empty($_SESSION['password_faisal'])) {
    echo "<script>alert('Anda tidak memiliki akses'); window.location =
'../masuk.php'</script>";
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Pelanggan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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
                <div class="card-header">Data Pelanggan</div>
                <div class="card-body text-success">
                    <div class="row">
                        <div class="col-md-6 mb-2 ">
                            <a href='tambah_pelanggan.php' class='btn btn-primary'>Tambah Data</a>
                        </div>
                        <div class="col-md-6 ">
                            <form action="cari_pelanggan.php" method="GET">
                                <div class="btn-group float-end" role="group">
                                    <input type="text" name="keyword" class="form-control" placeholder="Masukan keyword" required>

                                    <button type="submit" class="btn btn-primary">Pencarian</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>No Hp</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                </tbody>
                                <?php
                                include "../config/koneksi.php";
                                $i = 0;
                                $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_faisal_abdul_majid");
                                while ($data = mysqli_fetch_array($tampil)) {
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $data['nik_ktp_faisal'] ?></td>
                                        <td><?= $data['nama_faisal'] ?></td>
                                        <td><?= $data['no_hp_faisal'] ?></td>
                                        <td><?= $data['alamat_faisal'] ?></td>
                                        <td>
                                            <a href="edit_pelanggan.php?nik_ktp_faisal=<?= $data['nik_ktp_faisal'] ?>" class='btn btn-primary'>Edit</a>

                                            <a href="delete_pelanggan.php?nik_ktp_faisal=<?= $data['nik_ktp_faisal'] ?>" class='btn btn-danger' onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
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