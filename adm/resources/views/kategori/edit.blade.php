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
    @if(session('status'))
        <div class="alert alert-success">
        {{session('status')}}
        </div>
      @endif
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Ubah Data Kategori</h3>
      </div>
      <!-- /.card-header -->
       
      <!-- form start -->
      <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('kategori.update', [$kategori->id])}}" method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">

        <div class="card-body">
          <div class="form-group">
            <label for="namaKategori">Nama Kategori</label>
            <input type="text" class="form-control" id="namaKategori" name="nama" value="{{$kategori->nama}}" placeholder="Masukkan nama">
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
