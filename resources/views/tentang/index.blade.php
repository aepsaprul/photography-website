@extends('app')

@section('content')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/38.jpg);">
  <div class="container h-100">
      <div class="row h-100 align-items-center">
          <div class="col-12">
              <div class="breadcrumb-content text-center">
                  <h2 class="page-title">About Us</h2>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">About</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Breadcrumb Area End -->

<!-- About Us Area Start -->
<div class="about-us-area section-padding-80-0 clearfix">
  <div class="container">
    @foreach ($tentangs as $tentang)
        
      <div class="row align-items-center">
          <div class="col-12 col-lg-6">
              <div class="about-us-content mb-80">
                  <h3 class="wow fadeInUp" data-wow-delay="100ms">{{ $tentang->nama }}</h3>
                  <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                  <p class="wow fadeInUp" data-wow-delay="300ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do sunt explicabo. Nemo enim ipsam et dolore magnam aliquam quaerat voluptatem.</p>
                  <p class="wow fadeInUp" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do sunt explicabo. Nemo enim ipsam et dolore magnam aliquam quaerat voluptatem.</p>
                  <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="#">Contact Us</a>
              </div>
          </div>
          <div class="col-12 col-lg-6">
              <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms">
                  <img src="http://localhost/photography-website/adm/public/img/{{ $tentang->img }}" alt="">
              </div>
          </div>
      </div>
      
    @endforeach
  </div>
</div>
<!-- About Us Area End -->

<!-- Our Team Area Start -->
<section class="our-team-area section-padding-80-50">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                  <h2>Our Team</h2>
              </div>
          </div>
      </div>

      <div class="row">
          <!-- Team Member Area -->
          <div class="col-md-6 col-xl-3">
              <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="100ms">
                  <div class="member-thumb">
                      <img src="img/bg-img/19.jpg" alt="">
                  </div>
                  <h5>Andrew Dean</h5>
                  <span>Photographer</span>
                  <div class="member-social-info">
                      <a href="#"><i class="ti-facebook"></i></a>
                      <a href="#"><i class="ti-twitter-alt"></i></a>
                      <a href="#"><i class="ti-linkedin"></i></a>
                      <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
              </div>
          </div>

          <!-- Team Member Area -->
          <div class="col-md-6 col-xl-3">
              <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="300ms">
                  <div class="member-thumb">
                      <img src="img/bg-img/20.jpg" alt="">
                  </div>
                  <h5>Tommy Kim</h5>
                  <span>Photographer</span>
                  <div class="member-social-info">
                      <a href="#"><i class="ti-facebook"></i></a>
                      <a href="#"><i class="ti-twitter-alt"></i></a>
                      <a href="#"><i class="ti-linkedin"></i></a>
                      <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
              </div>
          </div>

          <!-- Team Member Area -->
          <div class="col-md-6 col-xl-3">
              <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="500ms">
                  <div class="member-thumb">
                      <img src="img/bg-img/21.jpg" alt="">
                  </div>
                  <h5>Max McCormick</h5>
                  <span>Photographer</span>
                  <div class="member-social-info">
                      <a href="#"><i class="ti-facebook"></i></a>
                      <a href="#"><i class="ti-twitter-alt"></i></a>
                      <a href="#"><i class="ti-linkedin"></i></a>
                      <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
              </div>
          </div>

          <!-- Team Member Area -->
          <div class="col-md-6 col-xl-3">
              <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="700ms">
                  <div class="member-thumb">
                      <img src="img/bg-img/22.jpg" alt="">
                  </div>
                  <h5>Robert Ward</h5>
                  <span>Photographer</span>
                  <div class="member-social-info">
                      <a href="#"><i class="ti-facebook"></i></a>
                      <a href="#"><i class="ti-twitter-alt"></i></a>
                      <a href="#"><i class="ti-linkedin"></i></a>
                      <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Our Team Area End -->

@endsection