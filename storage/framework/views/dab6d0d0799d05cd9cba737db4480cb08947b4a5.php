<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <!-- <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon"> -->
  <meta name="description" content="">
  <link rel="icon" type="image/x-icon" sizes="16x16" href="<?php echo e(asset('/favicon.ico')); ?>">
  <title>RaBook - Read a Book <?php echo $__env->yieldContent('title'); ?></title>
  <link rel="stylesheet" href="<?php echo e(asset('assets/web/assets/mobirise-icons/mobirise-icons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/tether/tether.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap-grid.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap-reboot.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/theme/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/mobirise/css/mbr-additional.css')); ?>" type="text/css">
  
  
  
</head>
<body>
  <?php if(Route::has('login')): ?>
  <section class="carousel slide cid-raZ8kePtfL" data-interval="false" id="slider1-1">

    

    <div class="full-screen">
      <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="8000">
        <ol class="carousel-indicators">
          <li data-app-prevent-settings="" data-target="#slider1-1" class=" active" data-slide-to="0"></li>
          <li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="1"></li>
          <li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/1.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <div class="mbr-overlay"></div>
                <img src="assets/images/1.jpg">
                <div class="carousel-caption justify-content-center">
                  <div class="col-10 align-center">
                    <h2 class="mbr-fonts-style display-1">Read a Book</h2>
                    <p class="lead mbr-text mbr-fonts-style display-5">Perpustakaan Online. Baca buku dimana saja dan kapan saja.</p>
                    <div class="mbr-section-btn" buttons="0">
                      <?php if(auth()->guard()->check()): ?>
                      <a class="btn  display-4 btn-primary" href="<?php echo e(url('/member')); ?>">HOME</a>
                      <?php else: ?>
                      <a class="btn  display-4 btn-primary" href="<?php echo e(route('login')); ?>">MASUK</a>
                      <?php if(Route::has('register')): ?>
                      <a class="btn  display-4 btn-white-outline" href="<?php echo e(route('register')); ?>">DAFTAR</a>
                      <?php endif; ?>
                    <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/mbr-1631x1080.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <div class="mbr-overlay"></div>
                <img src="assets/images/mbr-1631x1080.jpg">
                <div class="carousel-caption justify-content-center">
                  <div class="col-10 align-left">
                    <h2 class="mbr-fonts-style display-1">MUDAH DIGUNAKAN</h2>
                    <p class="lead mbr-text mbr-fonts-style display-5">Geser saja layar gadget mu maka akan terganti halaman buku tersebut.</p>
                    <div class="mbr-section-btn" buttons="0">
                      <?php if(auth()->guard()->check()): ?>
                      <a class="btn  display-4 btn-danger" href="<?php echo e(url('/admin')); ?>">HOME</a>
                      <?php else: ?>
                      <a class="btn  display-4 btn-danger" href="<?php echo e(route('login')); ?>">MASUK</a>
                      <?php if(Route::has('register')): ?>
                      <a class="btn  btn-white-outline display-4" href="<?php echo e(route('register')); ?>">DAFTAR</a>
                      <?php endif; ?>
                    <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/stacks-2000x1335.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <div class="mbr-overlay"></div>
                <img src="assets/images/stacks-2000x1335.jpg">
                <div class="carousel-caption justify-content-center">
                  <div class="col-10 align-right">
                    <h2 class="mbr-fonts-style display-1">E-BOOK</h2>
                    <p class="lead mbr-text mbr-fonts-style display-5">E-Book berbasis Gallery yang memungkinkan anda mudah<br>melihat isi halaman per halaman dan lebih mudah mengaksesnya.</p>
                    <div class="mbr-section-btn" buttons="0">
                      <?php if(auth()->guard()->check()): ?>
                      <a class="btn btn-info display-4" href="<?php echo e(url('/admin')); ?>">HOME</a>
                      <?php else: ?>
                      <a class="btn btn-info display-4" href="<?php echo e(route('login')); ?>">MASUK</a>
                      <?php if(Route::has('register')): ?>
                      <a class="btn  btn-white-outline display-4" href="<?php echo e(route('register')); ?>">DAFTAR</a>
                      <?php endif; ?>
                    <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-1">
          <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-1">
          <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

</section>

<section class="engine"><a href="https://mobirise.ws/o">free mobile website builder</a></section><section once="" class="cid-raZcLTTP5P" id="footer6-2">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2018 Creative Company - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="<?php echo e(asset('assets/web/assets/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/popper/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/tether/tether.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/ytplayer/jquery.mb.ytplayer.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vimeoplayer/jquery.mb.vimeo_player.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/smoothscroll/smooth-scroll.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/theme/js/script.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/slidervideo/script.js')); ?>"></script>
  
  <?php endif; ?>
</body>
</html>