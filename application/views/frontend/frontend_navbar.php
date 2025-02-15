<!DOCTYPE html>
<html lang="en">
<head>

<style>
.wrapper {
    max-width: 1100px;
    width: 100%;
    position: relative;

}

.wrapper i {
    height: 50px;
    width: 50px;
    background: rgb(118, 233, 118);
    text-align: center;
    line-height: 50px;
    border-radius: 50%;
    cursor: pointer;
    position: absolute;
    top: 50%;
    font-size: 1.25 rem;
    transform: translateY(-50%);
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);

}

.wrapper i:first-child {
    left: -22px;

}

.wrapper i:last-child {
    right: -22px;

}

.wrapper .carousel {
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: calc((100% / 3) - 12px);
    gap: 16px;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    scrollbar-width: 0;
}

.carousel::-webkit-scrollbar {
    display: none;
}

.carousel :where(.card, .img) {
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel.dragging {
    scroll-snap-type: none;
    scroll-behavior: auto;
}

.carousel.no-transition {
    scroll-behavior: auto;
}

.carousel.dragging .card {
    cursor: grab;
    user-select: none;
}

.carousel .card {
    scroll-snap-align: start;
    height: 340px;
    list-style: none;
    background: #fff;
    border-radius: 8px;
    display: flex;
    cursor: pointer;
    width: 98%;
    padding-bottom: 15px;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.card .img {
    background: green;
    width: 145px;
    height: 145px;
    border-radius: 50%;

}

.card .img img {
    width: 140px;
    height: 140px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #fff;
}

.card h2 {
    font-weight: 500;
    font-size: 1.56rem;
    margin: 30px 0 5px;
}

.card span {
    color: #6a6d78;
    font-size: 1.31rem;

}

@media screen and (max-width: 900px) {
    .wrapper .carousel {
        grid-auto-columns: calc((100% / 2) - 9px);

    }
}

@media screen and (max-width: 600px) {
    .wrapper .carousel {
        grid-auto-columns: 100%;

    }
}

</style>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Constra - Construction Html5 Template</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">


  <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/jpg" href="<?=base_url("C:\Project img\Sweets\IMG.jpg")?>">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?=base_url("public/frontend/plugins/bootstrap/bootstrap.min.css")?>">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?=base_url("public/frontend/plugins/fontawesome/css/all.min.css")?>">
  <!-- Animation -->
  <link rel="stylesheet" href="<?=base_url("public/frontend/plugins/animate-css/animate.css")?>">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="<?=base_url("public/frontend/plugins/slick/slick.css")?>">
  <link rel="stylesheet" href="<?=base_url("public/frontend/plugins/slick/slick-theme.css")?>">
  <!-- Colorbox -->
  <link rel="stylesheet" href="<?=base_url("public/frontend/plugins/colorbox/colorbox.css")?>">
  <!-- Template styles-->
  <link rel="stylesheet" href="<?=base_url("public/frontend/css/style.css")?>">

</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">K.T. Shah Road, Near Bhid Ghate , Mandvi</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/Shreeji Namkins.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/shreejinamkins.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.html">
                  <img loading="lazy" src="C:\Project img\Sweets\IMG.jpg" alt="Constra">
                </a>
            </div><!-- logo end -->
  
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle">+99982 38729</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle">.com</p>
                      </div>
                    </div>
                  </li>
                  <!-- <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">Global Certificate</p>
                          <p class="info-box-subtitle">ISO 9001:2017</p>
                      </div>
                    </div>
                  </li> -->
                  <li class="header-get-a-quote">
                  <a class="btn btn-primary" href="<?=base_url("frontend_login")?>">Login</a>
                  <a class="btn btn-primary" href="<?=base_url("frontend_register")?>">Register</a>

                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>


  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item dropdown active">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="active"><a href="index.html">Home One</a></li>
                            <li><a href="index-2.html">Home Two</a></li>
                          </ul>
                      </li>


                      <?php
                      foreach ($categories as $key => $category) {
                        
                        if(count($category['subcategories'])>0){ ?>

                     

                              <li class="nav-item dropdown active">
                                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?=$category['name']?> <i class="fa fa-angle-down"></i></a>
                                      <ul class="dropdown-menu" role="menu">
                                      <?php
                                      foreach ($category['subcategories'] as $key => $value) { ?>
                                        <li class="active"><a href="index.html"><?=$value['name']?></a></li>
                                        
                                        <?php    }
                                      ?>
                                      </ul>
                              </li>


                        <?php   } else { ?>
                            <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('frontend_product1/'.$category['id'])?>"><?=$category['name']?></a>
                          </li> 

                          <?php } }?>
                    
                          




                  

                  
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">×</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>