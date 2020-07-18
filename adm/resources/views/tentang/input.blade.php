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
        <h3 class="card-title">Tambah Data Tentang</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('tentang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="namaTentang">Nama Tentang</label>
            <input type="text" class="form-control" id="namaTentang" name="nama" placeholder="Masukkan nama">
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="img">Gambar</label>
            <input type="file" class="form-control" id="img" name="img" placeholder="Masukkan foto">
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
