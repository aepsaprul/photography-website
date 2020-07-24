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
        <h3 class="card-title">Tambah Data Slider</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
          <div class="form-group">
            <label for="img">Foto</label>
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
