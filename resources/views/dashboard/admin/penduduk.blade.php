@extends('layout.main')
@section('title', 'Halaman Tes')

@section('header')


@endsection

@section('judul_page','Data Penduduk Metatu')
@section('subjudul','')

@section('mainpage')
<!-- MAIN CONTENT -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penduduk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Nama Lengkap</th>
                  <th>No. Telp</th>
                  <th>Tempat Lahir</th>
                  <th>Tgl. Lahir</th>
                  <th>L/P</th>
                  <th>Alamat</th>
                  <th>RT</th>
                  <th>RW</th>
                  <th>Agama</th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $warga as $wg )
                <tr>
                  <td>{{ $wg -> id }}</td>
                  <td>
                  <a href="/penduduk/{{ $wg -> nik }}">{{ $wg -> nik }}</a>
                  </td>
                  <td>{{ $wg -> nama_lengkap }}</td>
                  <td>{{ $wg -> tlp }}</td>
                  <td>{{ $wg -> tempat_lahir }}</td>
                  <td>{{ $wg -> tgl_lahir }}</td>
                  <td>{{ $wg -> jenis_kel }}</td>
                  <td>{{ $wg -> alamat }}</td>
                  <td>{{ $wg -> rt }}</td>
                  <td>{{ $wg -> rw }}</td>
                  <td>{{ $wg -> agama }}</td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->



<!-- END MAIN CONTENT -->      
  
@endsection

@section('scriptjs')

<!-- DataTables -->
<script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection