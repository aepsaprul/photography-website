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
        <h3 class="card-title">Ubah Data Fotografer</h3>
      </div>
      <!-- /.card-header -->
       
      <!-- form start -->
      <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('fotografer.update', [$fotografer->id])}}" method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">

        <div class="card-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$fotografer->nama}}" placeholder="Masukkan nama">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$fotografer->email}}" placeholder="Masukkan email">
          </div>
          <div class="form-group">
            <label for="telepon">No Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="{{$fotografer->telepon}}" placeholder="Masukkan telepon">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{$fotografer->alamat}}" placeholder="Masukkan alamat">
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
