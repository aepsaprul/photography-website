@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Kontak</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kontak.store') }}" method="POST">
        @csrf

        <div class="card-body">
          <div class="form-group">
            <label for="namaKontak">Nama Kontak</label>
            <input type="text" class="form-control" id="namaKontak" name="nama" placeholder="Masukkan kontak">
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan keterangan">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
