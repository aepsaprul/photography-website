@extends('app')

@section('content')
    
<!-- Welcome Area Start -->
<section class="welcome-area">
    <div class="welcome-slides owl-carousel">
        <!-- Single Slide -->
        {{-- <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Text -->
                    <div class="col-12 col-lg-8 col-xl-6">
                        <div class="welcome-text">
                            <h2 data-animation="bounceInDown" data-delay="900ms">Hello <br>I'm Jackson</h2>
                            <p data-animation="bounceInDown" data-delay="500ms">I photograph very instinctively. I see how it is taken like that. I do not follow certain styles, philosophies or teachers.</p>
                            <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">Get a Quote</a>
                                <a class="hero-mail-contact" href="mailto:hello.alime@gmail.com">hello.alime@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Single Slide -->
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-slide-top.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Text -->
                    <div class="col-12 col-lg-8 col-xl-6">
                        <div class="welcome-text">
                            <h2 data-animation="bounceInUp" data-delay="100ms">Hello <br>I'm Alime</h2>
                            <p data-animation="bounceInUp" data-delay="500ms">I photograph very instinctively. I see how it is taken like that. I do not follow certain styles, philosophies or teachers.</p>
                            <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">Get a Quote</a>
                                <a class="hero-mail-contact" href="mailto:hello.alime@gmail.com">hello.alime@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->

<!-- Gallery Area Start -->
<div class="alime-portfolio-area section-padding-80 clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Projects Menu -->
                <div class="alime-projects-menu">
                    <div class="portfolio-menu text-center">
                        <button class="btn active" data-filter="*">All</button>
                        <button class="btn" data-filter=".human">Hari Ini</button>
                        <button class="btn" data-filter=".nature">Minggu Ini</button>
                        <button class="btn" data-filter=".country">Bulan Ini</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row alime-portfolio">

            <!-- Single Gallery Item -->
            @foreach ($galeris as $galeri)
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video human mb-30 wow fadeInUp" data-wow-delay="300ms">
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
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="700ms">
                <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Area End -->


@endsection


