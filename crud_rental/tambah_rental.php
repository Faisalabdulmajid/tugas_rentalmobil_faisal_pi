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
        <title>Tambah Data Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <script>
            function calculateTotal() {
                var harga = document.getElementById('harga_faisal').value;
                var lama = document.getElementById('lama_faisal').value;
                var total = harga * lama;
                document.getElementById('total_bayar_faisal').value = total;
            }
        </script>
        <style>
            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
                appearance: none;
            }

            input[type="number"] {
                -moz-appearance: textfield;
                appearance: textfield;
            }
        </style>
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
                <div class="col-md-12 mb-4">
                    <?php include "menu.php"; ?>
                </div>
            </div>
            <div class="card border-success mb-3">
                <div class="card-header">Tambah Data Rental</div>
                <div class="card-body text-success">
                    <div class="row ">
                        <div class="col-md-6 ">
                            <form method="POST" action="insert_rental.php">
                                <div class="mb-3 mt-3-1">
                                    <label for="no_trx_faisal" class="form-label">No TRX :</label>
                                    <?php
                                    $notrx = "TRX-" . date("Ymdhis");
                                    ?>
                                    <input type="text" name="no_trx_faisal" class="form-control" id="no_trx_faisal" value="<?php echo $notrx; ?>" readonly>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="nama_faisal" class="form-label">Pelanggan :</label>
                                    <select name="nik_ktp_faisal" class="form-control">
                                        <option value=""> -- Pilih --</option>
                                        <?php
                                        include "../config/koneksi.php";
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_faisal_abdul_majid");
                                        while ($data = mysqli_fetch_array($tampil)) {
                                            echo "<option value='$data[nik_ktp_faisal]'>$data[nik_ktp_faisal] - $data[nama_faisal] </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="nama_mobil_faisal" class="form-label">Mobil :</label>
                                    <select name="no_plat_faisal" class="form-control">
                                        <option value=""> -- Pilih Mobil --</option>
                                        <?php
                                        include "../config/koneksi.php";
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mobil_faisal_abdul_majid");
                                        while ($data = mysqli_fetch_array($tampil)) {
                                            echo "<option value='$data[no_plat_faisal]'>$data[no_plat_faisal] - $data[nama_mobil_faisal] </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="mb-3">
                                <label for="tgl_rental_faisal" class="form-label">Tanggal Ambil :</label>
                                <input type="date" name="tgl_rental_faisal" class="form-control" id="tgl_rental_faisal" placeholder="Tanggal Ambil" required>
                            </div>
                            <div class="mb-3">
                                <label for="jam_rental_faisal" class="form-label">Jam Ambil :</label>
                                <input type="time" name="jam_rental_faisal" class="form-control" id="jam_rental_faisal" placeholder="Jam Ambil" required>
                            </div>
                            <div class="mb-3">
                                <label for="lama_faisal" class="form-label">Lama Sewa :</label>
                                <input type="number" name="lama_faisal" class="form-control" id="lama_faisal" placeholder="Lama Sewa" required>
                            </div>
                            <div class="mb-3">
                                <label for="harga_faisal" class="form-label">Harga Rental :</label>
                                <input type="number" name="harga_faisal" class="form-control" id="harga_faisal" oninput="calculateTotal()" required>
                            </div>
                            <div class="mb-3">
                                <label for="total_bayar_faisal" class="form-label">Total Pembayaran :</label>
                                <input type="number" name="total_bayar_faisal" class="form-control" id="total_bayar_faisal" readonly>
                            </div>
                            <div class="mb-3">
                                <a href="tampil_rental.php" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Simpan</button>
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