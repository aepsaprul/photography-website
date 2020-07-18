@extends('app')

@section('content')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/38.jpg);">
  <div class="container h-100">
      <div class="row h-100 align-items-center">
          <div class="col-12">
              <div class="breadcrumb-content text-center">
                  <h2 class="page-title">Contact</h2>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Contact</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Contact Area Start -->
<div class="contact-area section-padding-80-50">
  <div class="container">
      <div class="row">
          <div class="col-12 col-lg-6">
              <h2 class="contact-title mb-30">Let’s Work <br>Together</h2>
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card card-warning">
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">                  
                  <div class="row">
                    @foreach ($kontaks as $kontak)  
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label>{{ $kontak->nama }}</label>
                          <p>{{ $kontak->keterangan }}</p>
                        </div>
                      </div>
                    @endforeach
                  </div>  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
      </div>
  </div>
</div>
<!-- Contact Area End -->
    
@endsection