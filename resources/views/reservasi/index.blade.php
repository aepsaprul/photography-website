@extends('app')

@section('content')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/38.jpg);">
  <div class="container h-100">
      <div class="row h-100 align-items-center">
          <div class="col-12">
              <div class="breadcrumb-content text-center">
                  <h2 class="page-title">Price List & Reservasi</h2>
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
      <div class="col-md-6">
        <img src="{{ asset("img/pricelist-prewedding-photo.jpg") }}" alt="">
      </div>
      <div class="col-md-6">
        <img src="{{ asset("img/pricelist-prewedding-photo.jpg") }}" alt="">
      </div>
      <div class="col-md-6">
        <img src="{{ asset("img/pricelist-prewedding-photo.jpg") }}" alt="">
      </div>
      <div class="col-md-6">
        <img src="{{ asset("img/pricelist-prewedding-photo.jpg") }}" alt="">
      </div>
    </div>
    <p></p>
    <div class="row">
      <div class="col-md-12">
        @if(session('status'))
          <div class="alert alert-success">
              {{session('status')}}
          </div>
        @endif
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Silahkan isi formulir dibawah ini untuk reservasi</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('reservasi.store') }}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="nama" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap">
              </div>
              <div class="form-group">
                <label for="telepon">Nomor Telepon</label>
                <input type="telepon" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nomor telepon">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Masukkan nomor telepon">
              </div>
              <div class="form-group">
                <label for="paket">Paket</label>
                <input type="paket" class="form-control" id="paket" name="paket" placeholder="Contoh: Paket 1 Wedding Photo & Paket 2 Wedding Video">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</div>
<!-- Contact Area End -->
    
@endsection