@extends('layouts.dash')
@section('title', 'Halaman Tes')

@section('header')

@endsection



@section('judul_page','Data')
@section('subjudul','Pengurus')

@section('content')


<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                           
    <div class="row">
        <div class="col-md-12">
    <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">        
                    <h3 class="panel-title">Data Pengurus BUMDES JAYA MAKMUR</h3>
                    @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                    </div>
                    @endif                              
                </div>
                <div class="panel-body">
                    <table class="table datatable" id="tablepengurus">
                        <thead>
                            <tr>
                              <th>Jabatan</th>
                              <th>NIK</th>
                              <th>Nama Lengkap</th>
                              <th>No. Telp</th>
                              <th>Email</th>
                              <th>No. SK</th>
                              <th>Periode Jabatan</th>
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
    $('#tablepengurus').DataTable({
        processing:true,
        serverside:true,
        ajax:"{{route('ajax.get.data.pengurus')}}",
        columns:[
            {data:'nama_link',name:'nama_link'},
            {data:'tlp',name:'tlp'},
            {data:'email',name:'email'},
            {data:'no_sk',name:'no_sk'}
        ]
    });
</script>

@endsection