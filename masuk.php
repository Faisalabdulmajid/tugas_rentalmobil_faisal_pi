<?php
session_start();
if (!empty($_SESSION['username_faisal']) and !empty($_SESSION['password_faisal'])) {
    header("location:menu.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>masuk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/style/masuk.css">
        <script>
            function showAlert() {
                alert("Ini adalah peringatan!");
            }
        </script>
    </head>

    <body>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/f59bcd8580.js"></script>
        <div class="container">
            <div class="row m-5 no-gutters shadow-lg">
                <div class="col-md-6 d-none d-md-block">
                    <img src="https://images.unsplash.com/photo-1519752441410-d3ca70ecb937?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Car Rental" style="min-height:100%;" />
                </div>
                <div class="col-md-6 bg-white p-5">
                    <h3 class="pb-3" style=" text-align:center; color:black ">Login Rental Mobil</h3>
                    <div class="form-style">
                        <form method="POST" action="cek_login.php">
                            <div class="mb-3 mt-3">
                                <label for="username_faisal" class="form-label">Username :</label>
                                <input type="text" name="username_faisal" class="form-control" id="username_faisal" placeholder="Masukan Username" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="password_faisal" class="form-label">Password :</label>
                                <input type="password" name="password_faisal" class="form-control" id="password_faisal" placeholder="Masukan Kata Sandi" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>

<?php
}
?>