<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Stisla</title>

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
<link rel="stylesheet" href="<?=base_url("public/assets/css/components.css")?>">
<link rel="stylesheet" href="<?=base_url("public/assets/css/style.css")?>">
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
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="C:\Users\Diya\Desktop" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>
<?php if($this->session->flashdata('register_success')): ?>
<script>
  Swal.fire({
    title: 'Success!',
    text: '<?= $this->session->flashdata('register_success'); ?>',
    icon: 'success'
  });
</script>
<?php endif; ?>

<?php if($this->session->flashdata('register_fail')): ?>
<script>
  Swal.fire({
    title: 'Error!',
    text: '<?= $this->session->flashdata('register_fail'); ?>',
    icon: 'error'
  });
  </script>
  <?php endif; ?>
  <?php if ($this->session->flashdata('validation_errors')):   echo $this->session->flashdata('validation_errors'); ?>
  
<?php endif; ?>


  
</script>
              <div class="card-body">
                <form method="POST"  action="<?=base_url('admin_register_add')?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Full Name</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus>
                    </div>
                    
                  <div class="form-group col-6">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>
            
                  </div>
 

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>

                 

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
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
  <script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>