@extends('app')

@section('content')
  
<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/38.jpg);">
  <div class="container h-100">
      <div class="row h-100 align-items-center">
          <div class="col-12">
              <div class="breadcrumb-content text-center">
                  <h2 class="page-title">Gallery</h2>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Gallery Area Start -->
<div class="alime-portfolio-area section-padding-80 clearfix">
  <div class="container-fluid">
      <div class="row">
          <div class="col-12">
              <!-- Projects Menu -->
              <div class="alime-projects-menu wow fadeInUp" data-wow-delay="100ms">
                  <div class="portfolio-menu text-center">
                      <button class="btn active" data-filter="*">All</button>
                      <button class="btn" data-filter=".1">Hari ini</button>
                      <button class="btn" data-filter=".3">Minggu ini</button>
                      <button class="btn" data-filter=".4">Bulan ini</button>
                  </div>
              </div>
          </div>
      </div>

      <div class="row alime-portfolio">

        @foreach ($galeris as $galeri)
            <!-- Single Gallery Item -->
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item {{ $galeri->data_kategori->id }} mb-30 wow fadeInUp" data-wow-delay="100ms">
              <div class="single-portfolio-content">
                  <img src="http://localhost/photography-website/adm/public/img/{{ $galeri->img }}" alt="">
                  <div class="hover-content">
                      <a href="http://localhost/photography-website/adm/public/img/{{ $galeri->img }}" class="portfolio-img">+</a>
                  </div>
              </div>
          </div>
        @endforeach
      </div>

      <div class="row">
          <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
              <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
          </div>
      </div>
  </div>
</div>
<!-- Gallery Area End -->

@endsection