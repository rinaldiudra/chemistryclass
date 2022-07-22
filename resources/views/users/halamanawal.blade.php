@include ('include.header')

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

@include ('include.footer')