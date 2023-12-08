<?php
// meng-include file
// require_once = mengimpor hanya sekali
require_once('function/helper.php');
require_once('function/koneksi.php');

// cek apakah ada proses yang dilakukan user
$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI - H071221065</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/styless.css' ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="topbar">
        <h3 class="text-topbar">H071221065</h3>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ded0c2" fill-opacity="1"
            d="M0,192L60,192C120,192,240,192,360,208C480,224,600,256,720,261.3C840,267,960,245,1080,218.7C1200,192,1320,160,1380,144L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
    </svg>

    <div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">Form Register</div>
                <div class="card-body">
                    <!-- kondisi jika data kosong -->
                    <?php if ($process == 'failedempty'): ?>
                        <div class="alert alert-danger"
                            style="background-color: red; padding: 1em; color: white;border-radius: 20px;">
                            Register gagal, terdapat form yang kosong!
                        </div>
                    <?php endif; ?>

                    <!-- kondisi jika username sudah terdaftar -->
                    <?php if ($process == 'failedusername'): ?>
                        <div class="alert alert-danger"
                            style="background-color: red; padding: 1em; color: white;border-radius: 20px;">
                            Register gagal, username sudah terdaftar di database!
                        </div>
                    <?php endif; ?>

                    <!-- kondisi jika re-pass tidak sesuai dengan pass yang diinput -->
                    <?php if ($process == 'failedpassword'): ?>
                        <div class="alert alert-danger"
                            style="background-color: red; padding: 1em; color: white;border-radius: 20px;">
                            Register gagal, password tidak sesuai!
                        </div>
                    <?php endif; ?>

                    <!-- tampilan dari card dan mengirim data yang diinput ke file process_register -->
                    <form class="form-login" method="POST" action="<?= BASE_URL . 'process/process_register.php' ?>">
                        <!-- Isi form seperti yang telah Anda tentukan -->
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-input">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-input">
                        <label class="form-label">Re-Password</label>
                        <input type="password" name="repassword" class="form-input">
                        <div class="button-container">
                            <button type="submit" name="action" value="register_admin" class="btn btn-login">Register
                                Admin</button>
                            <button type="submit" name="action" value="register_mahasiswa"
                                class="btn btn-login">Register Mahasiswa</button>
                        </div>
                    </form>

                    <p style="text-align: center;">Sudah punya akun?<span><a href="<?= BASE_URL . "index.php" ?>"
                                class=""> Masuk disini</a></span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>