<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!-- 
THEME: Constra - Construction Html5 Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/constra-construction-template/
DEMO: https://demo.themefisher.com/constra/
GITHUB: https://github.com/themefisher/Constra-Bootstrap-Construction-Template

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

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

<?php $this->load->view('frontend/frontend_navbar');?>
<div class="banner-carousel banner-carousel-1 mb-0">

<?php foreach ($sliders as  $slider) : ?>
  <div class="banner-carousel-item" style="background-image:url(<?=base_url("public/uploads/sliders/".$slider->file)?>)">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft">17 Years of excellence in</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">Construction Industry</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="services.html" class="slider btn btn-primary">Our Services</a>
                    <a href="contact.html" class="slider btn btn-primary border">Contact Now</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

<?php endforeach; ?>

</div>
<div class="wrapper">


        <i id="left" class="fa-solid  fas fa-angle-left"></i>
        <ul class="carousel">

        <?php foreach ($categories as $key => $category) { ?>
          <a  href="<?=base_url("frontend_product1/".$category->id)?>">
          <li class="card">
                <div class="img"><img src="<?=base_url('public/uploads/categories/'.$category->file)?>"   alt="" draggable="false"> </div>
                <h2 style="color: green; font-weight:bold;">
                      <?=$category->name?>
                  </h2>
                </li>      
              </a>
             <?php } ?>
           
           
        </ul>
        <i id="right" class="fa-solid fas fa-angle-right"></i>
    </div>


                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata
                    </div>
                </div>
              </div>
          </div>
          <!--/ Accordion end -->

        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                <h3 class="ts-facts-title">Total Projects</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                <h3 class="ts-facts-title">Staff Members</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                <h3 class="ts-facts-title">Hours of Work</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                <h3 class="ts-facts-title">Countries Experience</h3>
              </div>
          </div><!-- Col end -->

        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">We Are Specialists In</h2>
          <h3 class="section-sub-title">What We Do</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Home Construction</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
          </div><!-- Service 1 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Building Remodels</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon3.png"  alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Interior Design</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
          </div><!-- Service 3 end -->

        </div><!-- Col end -->

        <div class="col-lg-4 text-center">
          <img loading="lazy" class="img-fluid" src="images/services/service-center.jpg" alt="service-avater-image">
        </div><!-- Col end -->

        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Exterior Design</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
          </div><!-- Service 4 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon5.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Renovation</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
          </div><!-- Service 5 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon6.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Safety Management</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
          </div><!-- Service 6 end -->
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->

<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Work of Excellence</h2>
        <h3 class="section-sub-title">Recent Projects</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
          </label>
          <label for="commercial">
            <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Commercial
          </label>
          <label for="education">
            <input type="radio" name="shuffle-filter" id="education" value="education">Education
          </label>
          <label for="government">
            <input type="radio" name="shuffle-filter" id="government" value="government">Government
          </label>
          <label for="infrastructure">
            <input type="radio" name="shuffle-filter" id="infrastructure" value="infrastructure">Infrastructure
          </label>
          <label for="residential">
            <input type="radio" name="shuffle-filter" id="residential" value="residential">Residential
          </label>
          <label for="healthcare">
            <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Healthcare
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project1.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project1.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Capital Teltway Building</a>
                  </h3>
                  <p class="project-cat">Commercial, Interiors</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project2.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project2.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Ghum Touch Hospital</a>
                  </h3>
                  <p class="project-cat">Healthcare</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project3.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">TNT East Facility</a>
                  </h3>
                  <p class="project-cat">Government</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project4.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project4.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Narriot Headquarters</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 4 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project5.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project5.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Kalas Metrorail</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 5 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project6.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project6.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Ancraft Avenue House</a>
                  </h3>
                  <p class="project-cat">Residential</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 6 end -->
        </div><!-- shuffle end -->
      </div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.html">View All Projects</a>
        </div>
      </div>

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Testimonials</h3>

          <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                      view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                      subline of her own road.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Gabriel Denis</h3>
                          <span class="quote-subtext">Chairman, OKT</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi aliquip consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial2.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Weldon Cash</h3>
                          <span class="quote-subtext">CFO, First Choice</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi ut commodo consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial3.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Minter Puchan</h3>
                          <span class="quote-subtext">Director, AKT</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->

          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Happy Clients</h3>

          <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client1.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 1 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client2.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 2 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client3.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 3 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client4.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 4 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client5.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 5 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client6.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 6 end -->

          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->

<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton">
              <h3>Can We Help?</h3>
              <h4>(+9) 847-291-4353</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                <p class="text-white">Latest updates and news</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="#" method="post">
                    <div class="form-group">
                      <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                      <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
                    </div>
                </form>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>
<!--/ subscribe end -->

<section id="news" class="news">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Work of Excellence</h2>
          <h3 class="section-sub-title">Recent Projects</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="images/news/news1.jpg" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="news-single.html" class="d-inline-block">We Just Completes $17.6 million Medical Clinic in Mid-Missouri</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> July 20, 2017
                    </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 1st post col end -->

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="images/news/news2.jpg" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="news-single.html" class="d-inline-block">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> June 17, 2017
                    </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 2nd post col end -->

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="images/news/news3.jpg" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="news-single.html" class="d-inline-block">Silicon Bench and Cornike Begin Construction Solar Facilities</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> Aug 13, 2017
                    </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 3rd post col end -->
    </div>
    <!--/ Content row end -->

    <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>
    </div>

  </div>
  <!--/ Container end -->
</section>

<script>


document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector(".carousel");
    const arrowBtns = document.querySelectorAll(".wrapper i");
    const wrapper = document.querySelector(".wrapper");

    const firstCard = carousel.querySelector(".card");
    const firstCardWidth = firstCard.offsetWidth;

    let isDragging = false,
        startX,
        startScrollLeft,
        timeoutId;

    const dragStart = (e) => { 
        isDragging = true;
        carousel.classList.add("dragging");
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
    };

    const dragging = (e) => {
        if (!isDragging) return;
    
        // Calculate the new scroll position
        const newScrollLeft = startScrollLeft - (e.pageX - startX);
    
        // Check if the new scroll position exceeds 
        // the carousel boundaries
        if (newScrollLeft <= 0 || newScrollLeft >= 
            carousel.scrollWidth - carousel.offsetWidth) {
            
            // If so, prevent further dragging
            isDragging = false;
            return;
        }
    
        // Otherwise, update the scroll position of the carousel
        carousel.scrollLeft = newScrollLeft;
    };

    const dragStop = () => {
        isDragging = false; 
        carousel.classList.remove("dragging");
    };

    const autoPlay = () => {
    
        // Return if window is smaller than 800
        if (window.innerWidth < 800) return; 
        
        // Calculate the total width of all cards
        const totalCardWidth = carousel.scrollWidth;
        
        // Calculate the maximum scroll position
        const maxScrollLeft = totalCardWidth - carousel.offsetWidth;
        
        // If the carousel is at the end, stop autoplay
        if (carousel.scrollLeft >= maxScrollLeft) return;
        
        // Autoplay the carousel after every 2500ms
        timeoutId = setTimeout(() => 
            carousel.scrollLeft += firstCardWidth, 2500);
    };

    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    wrapper.addEventListener("mouseenter", () => 
        clearTimeout(timeoutId));
    wrapper.addEventListener("mouseleave", autoPlay);

    // Add event listeners for the arrow buttons to 
    // scroll the carousel left and right
    arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            carousel.scrollLeft += btn.id === "left" ? 
                -firstCardWidth : firstCardWidth;
        });
    });
});

</script>
<!--/ News end -->

  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo.png" alt="Constra">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
              labore et dolore magna aliqua.</p>
            <div class="footer-social">
              <ul>
                <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours">
              We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
              Hotline and Contact form.
              <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
              <br> Saturday: <span class="text-right">12:00 - 15:00</span>
              <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="service-single.html">Pre-Construction</a></li>
              <li><a href="service-single.html">General Contracting</a></li>
              <li><a href="service-single.html">Construction Management</a></li>
              <li><a href="service-single.html">Design and Build</a></li>
              <li><a href="service-single.html">Self-Perform Construction</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed &amp; Developed by <a href="https://themefisher.com">Themefisher</a></span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled">
                <li><a href="about.html">About</a></li>
                <li><a href="team.html">Our people</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="news-left-sidebar.html">Blog</a></li>
                <li><a href="pricing.html">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="<?=base_url("public/frontend/plugins/jQuery/jquery.min.js")?>"></script>
  <!-- Bootstrap jQuery -->
  <script src="<?=base_url("public/frontend/plugins/bootstrap/bootstrap.min.js")?>"></script>
  <!-- Slick Carousel -->
  <script src="<?=base_url("public/frontend/plugins/slick/slick.min.js")?>"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="<?=base_url("public/frontend/plugins/colorbox/jquery.colorbox.js")?>"></script>
  <!-- shuffle -->
  <script src="<?=base_url("public/frontend/plugins/shuffle/shuffle.min.js")?>"></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
  <!-- Google Map Plugin-->
  <script src="<?=base_url("public/frontend/plugins/google-map/map.js")?>"></script>

  <!-- Template custom -->
  <script src="<?=base_url("public/frontend/js/script.js")?>"></script>

  </div><!-- Body inner end -->
  </body>

  </html>