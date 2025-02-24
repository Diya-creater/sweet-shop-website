<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url("public/assets/modules/bootstrap/css/bootstrap.min.css")?>">
  <link rel="stylesheet" href="<?=base_url("public/assets/css/components.css")?>">
  <link rel="stylesheet" href="<?=base_url("public/assets//css/components.css.map")?>">
  <link rel="stylesheet" href="<?=base_url("public/assets/css/components.min.css")?>">
  <link rel="stylesheet" href="<?=base_url("public/assets/css/components.min.css.map")?>">
  <link rel="stylesheet" href="<?=base_url("public/assets/css/custom.css")?>">
  <link rel="stylesheet" href="<?=base_url("public/assets/css/custom.css.map")?>">
  <link rel="stylesheet" href="<?=base_url("public/assets/css/style.css")?>">
  <link rel="stylesheet" href="<?=base_url("public/assets/css/style.css.map")?>">
  <link rel="stylesheet" href="<?=base_url("public/assets/css/style.min.css")?>">
  <link rel="stylesheet" href="<?=base_url("public/assets/css/style.min.css.map")?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?=base_url("public/assets/modules/bootstrap-social/bootstrap-social.css")?>">

  <!-- Template CSS -->
  <!-- <link rel="stylesheet" href="<?=base_url("public/assets/css/components.css")?>">
  <link rel="stylesheet" href="<?=base_url("public/assets/css/style.css")?>"> -->
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="C:\Users\Diya\Desktop" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>                                
                  </div>
                </div>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="<?= base_url('admin/admin_register_controller'); ?>">Create One</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?=base_url("public/assets/js/bootstrap.min.js")?>"></script>
  <script src="<?=base_url("public/assets/js/bundle.js")?>"></script>
  <script src="<?=base_url("public/assets/js/chart.min.js")?>"></script>
  <script src="<?=base_url("public/assets/js/custom.js")?>"></script>
  <script src="<?=base_url("public/assets/js/gmaps.js")?>"></script>
  <script src="<?=base_url("public/assets/js/gulpfile.js")?>"></script>
  <script src="<?=base_url("public/assets/js/jquery.colorbox.js")?>"></script>
  <script src="<?=base_url("public/assets/js/jquery.min.js")?>"></script>
  <script src="<?=base_url("public/assets/js/jquery.sparkline.min.js")?>"></script>
  <script src="<?=base_url("public/assets/js/map.js")?>"></script>
  <script src="<?=base_url("public/assets/js/moment.min.js")?>"></script>
  <script src="<?=base_url("public/assets/js/popper.js")?>"></script>
  <script src="<?=base_url("public/assets/js/script.js")?>"></script>
  <script src="<?=base_url("public/assets/js/scripts.js")?>"></script>
  <script src="<?=base_url("public/assets/js/shuffle.min.js")?>"></script>
  <script src="<?=base_url("public/assets/js/slick-animation.min.js")?>"></script>
  <script src="<?=base_url("public/assets/js/slick.min.js")?>"></script>
  <script src="<?=base_url("public/assets/js/sticky-kit.js")?>"></script>
  <script src="<?=base_url("public/assets/js/stisla.js")?>"></script>
  <script src="<?=base_url("public/assets/js/tooltip.js")?>"></script>
  <script src="<?=base_url("public/assets/js/jquery.nicescroll.iframehelper.js")?>"></script>
  <script src="<?=base_url("public/assets/js/jquery.nicescroll.iframehelper.min.js")?>"></script>
  <script src="<?=base_url("public/assets/js/jquery.nicescroll.js")?>"></script>
  <script src="<?=base_url("public/assets/js/jquery.nicescroll.min.js")?>"></script>
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <!-- <script src="public/js/scripts.js"></script>
  <script src="public/js/custom.js"></script> -->
</body>
</html>