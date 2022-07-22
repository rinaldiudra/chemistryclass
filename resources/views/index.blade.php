<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="SemiColonWeb" />

  <!-- Stylesheets
  ============================================= -->
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('users/css/bootstrap.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('users/css/style.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('users/css/swiper.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('users/css/dark.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('users/css/font-icons.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('users/css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('users/css/magnific-popup.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{ asset('users/css/responsive.css') }}" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

  <!-- Document Title
  ============================================= -->
  <title>ChemistryClass | </title>

</head>

<body class="stretched">

  <!-- Document Wrapper
  ============================================= -->
  <div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

      <div id="header-wrap">

        <div class="container clearfix">

          <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

          <!-- Logo
          ============================================= -->
          <div id="logo">
            <a href="#" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="{{ asset('users/images/logocc.png') }}" alt="Canvas Logo"></a>
            <a href="#" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{ asset('users/images/logocc.png') }}" alt="Canvas Logo"></a>
          </div><!-- #logo end

          <!-- Primary Navigation
          ============================================= -->
          <nav id="primary-menu" class="dark">

            <ul>
              <li class="mega-menu"><a href="{{ route('register') }}"><div>Register</div></a></li>
              <li class="mega-menu"><a href="{{ route('login') }}"><div>Login</div></a></li>
              <!-- <li class="mega-menu"><a href="{{ route('materi') }}"><div>Materi</div></a></li>
              <li class="mega-menu"><a href="{{ route('login') }}"><div>Ujian</div></a></li> -->
            </ul>


          </nav><!-- #primary-menu end -->

        </div>

      </div>

    </header><!-- #header end -->

    <section id="slider" class="force-full-screen full-screen">

      <div class="force-full-screen full-screen dark section nopadding nomargin noborder ohidden">

        <div class="container clearfix">
          <div class="slider-caption slider-caption-center">
            <h2 data-animate="fadeInUp">ChemistryClass</h2>
            <p data-animate="fadeInUp" data-delay="200">Chemistry is the melodies you can play on vibrating strings.</p>
            <a data-animate="fadeInUp" data-delay="400" href="{{ route('register') }}" class="button button-border button-light button-rounded button-large noleftmargin nobottommargin" style="margin-top: 30px;">Register</a>
            <a data-animate="fadeInUp" data-delay="600" href="{{ route('login') }}" class="button button-3d button-teal button-large nobottommargin" style="margin: 30px 0 0 10px;">Login</a>
          </div>
        </div>
        <div class="video-wrap">
          <video poster="{{ asset('users/images/videos/explore.jpg') }}" preload="auto" loop autoplay muted>
            <source src="{{ asset('users/images/videos/chemistry.mp4') }}" type='video/mp4' />
            <source src="{{ asset('users/images/videos/explore.webm') }}" type='video/webm' />
          </video>
          <div class="video-overlay" style="background-color: rgba(0,0,0,0.45);"></div>
        </div>

      </div>

    </section>

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">
      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">

        <div class="container clearfix">

          <div class="col_half">
            Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
          </div>

          <div class="col_half col_last tright">
            <div class="fright clearfix">
              <a href="#" class="social-icon si-small si-borderless si-facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
              </a>

              <a href="#" class="social-icon si-small si-borderless si-twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>

              <a href="#" class="social-icon si-small si-borderless si-gplus">
                <i class="icon-gplus"></i>
                <i class="icon-gplus"></i>
              </a>

              <a href="#" class="social-icon si-small si-borderless si-pinterest">
                <i class="icon-pinterest"></i>
                <i class="icon-pinterest"></i>
              </a>

              <a href="#" class="social-icon si-small si-borderless si-vimeo">
                <i class="icon-vimeo"></i>
                <i class="icon-vimeo"></i>
              </a>

              <a href="#" class="social-icon si-small si-borderless si-github">
                <i class="icon-github"></i>
                <i class="icon-github"></i>
              </a>

              <a href="#" class="social-icon si-small si-borderless si-yahoo">
                <i class="icon-yahoo"></i>
                <i class="icon-yahoo"></i>
              </a>

              <a href="#" class="social-icon si-small si-borderless si-linkedin">
                <i class="icon-linkedin"></i>
                <i class="icon-linkedin"></i>
              </a>
            </div>

            <div class="clear"></div>

            <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
          </div>

        </div>

      </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

  </div><!-- #wrapper end -->

  <!-- Go To Top
  ============================================= -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- External JavaScripts
  ============================================= -->
  <script type="text/javascript" src="{{ asset('users/js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('users/js/plugins.js') }}"></script>

  <!-- Footer Scripts
  ============================================= -->
  <script type="text/javascript" src="{{ asset('users/js/functions.js') }}"></script>

</body>
</html>