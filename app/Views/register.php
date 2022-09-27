<?php header('Access-Control-Allow-Origin: *'); ?>
<style>
    .parallax-content {
        width: 100%;
        min-height: 100vh;
        background-size: cover;
    }
</style>
<!doctype html>
<html lang="en">

<head>
    <?php echo view('template/head-css') ?>
    <title>Register</title>
</head>

<body class="hold-transition login-page parallax-content" style="background-image: url(<?php echo baseURL ?>/img/perumahan/11.png)">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="home" class="h1"><b>UPEN</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Daftar Pengguna</p>
                <form action="<?= base_url('register') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="ID Pengguna">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="fullname" class="form-control" placeholder="Nama Penuh">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Emel">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Katalaluan">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">Daftar</button>
                        </div>
                    </div>
                </form>

                <div class="text-center">
                    Sudah Mendaftar?<a href="login"> Log Masuk.</a>
                </div>
            </div>
        </div>
    </div>

    <?php echo view('template/foot-js') ?>
</body>

</html>