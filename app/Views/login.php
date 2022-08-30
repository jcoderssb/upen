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
    <?php echo view('template/head-css')?>
    <title>Login</title>
  </head>
  <body class="hold-transition login-page parallax-content" style="background-image: url(<?php echo baseURL?>/img/login.jpg)">
<div class="">
<div class="login-box shadow">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/home" class="h1" style="hover: #32d200;"><b>Admin</b>JCODERS</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
		<?php if(session()->getFlashdata('msg')):?>
			<div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
		<?php endif;?>
      <form action="/login/auth" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" value="<?= set_value('email') ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" value="<?= set_value('password') ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!--div class="col-6">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div-->
          <!-- /.col -->
		  <div class="col-8">
		  <a href="/home" class="btn btn" style="height:45px; background-color:#58D3F7; align-items: center;"> <i class="fas fa-home solid" style="background-color:#58D3F7"></i></a>
          </div>
		  <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
		  </div>
		</div>
          <!-- /.col -->
        </div>
      </form>

     

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
</div>
    
    <?php echo view('template/foot-js')?>
  </body>
</html>