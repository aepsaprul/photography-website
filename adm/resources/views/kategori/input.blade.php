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
        <h3 class="card-title">Tambah Data Kategori</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="namaKategori">Nama Kategori</label>
            <input type="text" class="form-control" id="namaKategori" name="nama" placeholder="Masukkan nama">
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
