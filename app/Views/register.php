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
                <p class="login-box-msg">Register a new account</p>
                <form action="../../index.html" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </div>
                    </div>
                </form>

                <div class="text-center">
                    Already have an account?<a href="login"> Sign in here.</a>
                </div>
            </div>
        </div>
    </div>

    <?php echo view('template/foot-js') ?>
</body>

</html>