@extends('layouts.app')

@section('style')

<!-- DataTables -->
<link rel="stylesheet" href="{{ asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
<link rel="stylesheet" href="{{ asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">

<style>
  thead {
      background-color: #585858;
  }
  thead tr th {
      text-align: center;
      color: #fff;
  }
  table tr td {
      text-align: center;
  }
</style>

@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Galeri</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><a href="{{ route('galeri.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i></a></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Foto</th>
                <th>Kategori</th>
                <th>#</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($galeris as $key => $galeri)
                  <tr>
                      <td>{{ $key + 1 }}</td>
                      <td class="text-left">{{ $galeri->nama }}</td>
                      <td class="text-left">{{ $galeri->keterangan }}</td>
                      <td>
                        @if ($galeri->img)
                          <img src="{{ asset('img/' . $galeri->img) }}" style="max-width: 100px;" id="img">
                        @else
                          N/A
                        @endif    
                      </td>                    
                      <td>{{ $galeri->data_kategori->nama }}</td>
                      <td>
                          <div class="btn-group">
                              <a href="{{ route('galeri.edit', [$galeri->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                              <a href="{{ route('galeri.hapus', [$galeri->id]) }}" onclick="return confirm('Yakin akan hapus?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          </div>
                      </td>
                  </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

@endsection

@section('script')

<!-- DataTables -->
<script src="{{ asset("plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ asset("plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
<script src="{{ asset("plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endsection
