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
        <h3 class="card-title">Tambah Data Galeri</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
          <div class="form-group">
            <label for="namaGaleri">Nama Galeri</label>
            <input type="text" class="form-control" id="namaGaleri" name="nama" placeholder="Masukkan nama">
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan keterangan">
          </div>
          <div class="form-group">
            <label for="img">Foto</label>
            <input type="file" class="form-control" id="img" name="img" placeholder="Masukkan foto">
          </div>
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" name="kategori_id" id="kategori">
                <option value="">--Pilih Kategori--</option>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>                                            
                @endforeach
            </select>
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
