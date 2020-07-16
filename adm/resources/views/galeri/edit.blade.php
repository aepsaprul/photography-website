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
        <h3 class="card-title">Ubah Data Galeri</h3>
      </div>
      <!-- /.card-header -->
       
      <!-- form start -->
      <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('galeri.update', [$galeri->id])}}" method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">

        <div class="card-body">
          <div class="form-group">
            <label for="namaGaleri">Nama Galeri</label>
            <input type="text" class="form-control" id="namaGaleri" name="nama" value="{{$galeri->nama}}" placeholder="Masukkan nama">
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$galeri->keterangan}}" placeholder="Masukkan keterangan">
          </div>
          <div class="form-group">
            <label for="img">Foto</label>
            <div class="form-group">
              <img src="{{ url('img/' . $galeri->img . '') }}" style="max-width: 250px;">
            </div>
            <input type="file" class="form-control" id="img" name="img" placeholder="Masukkan keterangan">
          </div>
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" name="kategori_id" id="kategori">
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}"
                        @if ($kategori->id == $galeri->kategori_id)
                            {{ 'selected' }}
                        @endif
                        >
                        {{ $kategori->nama }}
                    </option>                                            
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
