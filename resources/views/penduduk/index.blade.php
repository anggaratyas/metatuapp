@extends('layouts.dash')
@section('title', 'Penduduk')

@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}" >

@endsection

@section('judul_page','Data')
@section('subjudul','Penduduk')

@section('content')

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                             
<div class="row">
    <div class="col-md-12">
        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading">                        
                <h3 class="panel-title">Data Penduduk Metatu</h3>

                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif                              
                </div>
                <div class="panel-body">
                    <table class="table datatable" id="tablependuduk">
                        <thead>
                        <tr>
                          <th>Nama Lengkap</th>
                          <th>No. Telp</th>
                          <th>Tempat Lahir</th>
                          <th>Tgl. Lahir</th>
                          <th>L/P</th>
                          <th>Alamat</th>
                          <th>RT</th>
                          <th>RW</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE --> 
        </div>
    </div>                                         
</div>
<!-- PAGE CONTENT WRAPPER -->  
@endsection

@section('scriptjs')
<!-- THIS PAGE PLUGINS -->
<script type="text/javascript" src="{{url('/assets/js/plugins/icheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>

<script type="text/javascript" src="{{url('/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>


<!-- END PAGE PLUGINS -->
<script >
    $('#tablependuduk').DataTable({
        processing:true,
        serverside:true,
        ajax:"{{route('ajax.get.data.penduduk')}}",
        columns:[
            {data:'nama_lengkap',name:'nama_lengkap'},
            {data:'tlp',name:'tlp'},
            {data:'tempat_lahir',name:'tempat_lahir'},
            {data:'tgl_lahir',name:'tgl_lahir'},
            {data:'jenis_kel',name:'jenis_kel'},
            {data:'alamat',name:'alamat'},
            {data:'rt',name:'rt'},
            {data:'rw',name:'rw'},
        ]
    });
</script>

@endsection