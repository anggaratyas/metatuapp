@extends('layout.main')
@section('title', 'Tambah Pengurus')

@section('header')
 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('assets/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('assets/dist/css/skins/_all-skins.min.css')}}">


  <!-- daterange picker -->
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{url('assets/plugins/iCheck/all.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{url('assets/plugins/timepicker/bootstrap-timepicker.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{url('assets/bower_components/select2/dist/css/select2.min.css')}}">
 

  <style>
    /* FROM HTTP://WWW.GETBOOTSTRAP.COM
     * Glyphicons
     *
     * Special styles for displaying the icons and their classes in the docs.
     */

    .bs-glyphicons {
      padding-left: 0;
      padding-bottom: 1px;
      margin-bottom: 20px;
      list-style: none;
      overflow: hidden;
    }

    .bs-glyphicons li {
      float: left;
      width: 25%;
      height: 115px;
      padding: 10px;
      margin: 0 -1px -1px 0;
      font-size: 12px;
      line-height: 1.4;
      text-align: center;
      border: 1px solid #ddd;
    }

    .bs-glyphicons .glyphicon {
      margin-top: 5px;
      margin-bottom: 10px;
      font-size: 24px;
    }

    .bs-glyphicons .glyphicon-class {
      display: block;
      text-align: center;
      word-wrap: break-word; /* Help out IE10+ with class names */
    }

    .bs-glyphicons li:hover {
      background-color: rgba(86, 61, 124, .1);
    }

    @media (min-width: 768px) {
      .bs-glyphicons li {
        width: 12.5%;
      }
    }
  </style>

@endsection

@section('judul_page','Tambah Data Pengurus')
@section('subjudul','Lengkapi Data')

@section('mainpage')
<!-- MAIN CONTENT -->
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

   <!-- Main content -->
   <section class="content">

   <p>Cari Data Penduduk :</p>
	<form action="/pengurus/search" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
    </form>
    
    
    


    <form method="get" action="/pengurus">

    @foreach ( $search as $search)
      <div class="row">
        <div class="col-xs-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#datapribadi" data-toggle="tab">Data Pribadi</a></li>
              <li><a href="#alamat" data-toggle="tab">Alamat</a></li>   
            </ul>
            
            <div class="tab-content">
              <!-- Data Pribadi -->
              <div class="tab-pane active" id="datapribadi">
                <section id="datapribadi">
                  <div class="row">

                    <div class="col-md-6">
                    <!-- form start -->
                    <form class="form-horizontal">
                      <div class="box-body">

                        <div class="form-group">
                          <label>Nama Lengkap</label>
                            <input name="nama_lengkap" type="name" disabled="disabled" class="form-control" placeholder="{{$search -> nama_lengkap}}" value="{{old('nama_lengkap')}}">                         
                        </div>

                        <div class="form-group">
                          <label>Tempat Lahir</label>
                            <input name="tempat_lahir" type="name" class="form-control" placeholder="Tempat Lahir" value="{{old('tempat_lahir')}}">                         
                        </div>

                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input name="tgl_lahir" type="text" class="form-control" id="datepicker" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="{{old('tgl_lahir')}}">
                          </div>
    
                        </div>

                        <div class="form-group">
                          <label>Agama</label>
                          <select name="agama" class="form-control select2" style="width: 100%;" value="{{old('agama')}}">
                            <option>Islam</option>
                            <option>Kristen Protestan</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Buddha</option>
                            <option>Kong Hu Cu</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Pendidikan</label>
                          <select name="skul" class="form-control select2" style="width: 100%;" value="{{old('skul')}}">
                            <option>Tidak Sekolah</option>
                            <option>Sekolah Rakyat</option>
                            <option>SD/MI/Sederajat</option>
                            <option>SMP/MTS/Sederajat</option>
                            <option>SLTA/SMA/SMU/SMK/Sederajat</option>
                            <option>Diploma 1</option>
                            <option>Diploma 2</option>
                            <option>Diploma 3</option>
                            <option>Diploma 4</option>
                            <option>Strata 1</option>
                            <option>Strata 2</option>
                            <option>Strata 3</option>
                          </select>                        
                        </div>

                        <div class="form-group">
                          <label>NO Telpon</label>
                          <input name="tlp" type="text" class="form-control" data-inputmask='"mask": "99999999999999"' data-mask value="{{old('tlp')}}">                       
                        </div>

                      </div>
                      <!-- /.box-body -->
                    </div>

                    <div class="col-md-6">

                    <form class="form-horizontal">
                      <div class="box-body">

                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select name="jenis_kel" class="form-control select2" style="width: 100%;" value="{{old('jenis_kel')}}">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                          </select>                       
                        </div>

                        <div class="form-group">
                          <label>NO Identitas</label>
                          <input name="nik" type="text" class="form-control" data-inputmask='"mask": "9999999999999999"' data-mask value="{{old('nik')}}">                       
                        </div>

                        <div class="form-group">
                          <label>NO. Kartu Keluarga</label>
                          <input name="kk" type="text" class="form-control" data-inputmask='"mask": "9999999999999999"' data-mask value="{{old('kk')}}">                                                  
                        </div>

                        <div class="form-group">
                          <label>Nama Ibu Kandung</label>
                            <input name="ibu" type="name" class="form-control" placeholder="Nama Ibu" value="{{old('ibu')}}">                         
                        </div>

                        <div class="form-group">
                          <label>Nama Ayah Kandung</label>
                            <input name="ayah" type="name" class="form-control" placeholder="Nama Ayah" value="{{old('ayah')}}">                         
                        </div>

                        <div class="form-group">
                          <label>Kewarganegaraan</label>
                          <select name="kwn" class="form-control select2" style="width: 100%;" value="{{old('kwn')}}">
                            <option>Warga Negara Indonesia (WNI)</option>
                            <option>Warga Negara Asing (WNA)</option>
                          </select>                      
                        </div>


                      </div>                    
                    </div>
                  </div>

                </section>
              </div>
              <!-- /Data Pribadi -->

              <!-- Alamat -->
              <div class="tab-pane" id="alamat">
                <section id="alamat">
                <div class="row">

                  <div class="col-md-6">
                  <!-- form start -->
                  <form class="form-horizontal">
                    <div class="box-body">

                      <div class="form-group">
                        <label>Alamat Identitas</label>
                          <input name="alamat" type="name" class="form-control" placeholder="Alamat Identitas" value="{{old('alamat')}}">                         
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-3">
                            <label>RT</label>
                            <input name="rt" type="text" class="form-control" data-inputmask='"mask": "999"' data-mask value="{{old('rt')}}">
                          </div>
                          <div class="col-xs-3">
                            <label>RW</label>
                            <input name="rw" type="text" class="form-control" data-inputmask='"mask": "999"' data-mask value="{{old('rw')}}">
                          </div>
                        </div>                  
                      </div>

                      <div class="form-group">
                        <label>Propinsi</label>
                          <select name="propinsi" class="form-control select2" style="width: 100%;" value="{{old('propinsi')}}">
                            <option>-- Silahkan Pilih Propinsi --</option>
                            <option>Data Base</option>
                          </select>                          
                      </div>
                      <div class="form-group">
                        <label>Kabupaten/Kota</label>
                          <select name="kabupaten" class="form-control select2" style="width: 100%;" value="{{old('kabupaten')}}">
                            <option>-- Silahkan Pilih Kabupaten --</option>
                            <option>Data Base</option>
                          </select>                         
                      </div>

                      <div class="form-group">
                        <label>Kecamatan</label>
                        <select name="kecamatan" class="form-control select2" style="width: 100%;" value="{{old('kecamatan')}}">
                            <option>-- Silahkan Pilih Kecamatan --</option>
                            <option>Data Base</option>
                          </select>                      
                      </div>

                      <div class="form-group">
                        <label>Desa</label>
                        <select name="desa" class="form-control select2" style="width: 100%;" value="{{old('desa')}}">
                            <option>-- Silahkan Pilih Desa --</option>
                            <option>Data Base</option>
                          </select>                       
                      </div>

                      <div class="form-group">
                        <label>KodePos</label>
                        <input name="kdpos" type="text" class="form-control" data-inputmask='"mask": "9999999"' data-mask value="{{old('kdpos')}}">                        
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                          <input name="email" type="email" class="form-control" placeholder="Email" value="{{old('email')}}">                         
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                </section>
              </div>

            <button type="/penduduk/create" class="btn btn-info">Simpan</button>
            <button type="/dashboard" class="btn btn-default">Kembali</button>
              <!-- /Alamat -->



            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      @endforeach
    </form>
    </section>
    <!-- /.content -->


<!-- END MAIN CONTENT -->      
  
@endsection

@section('scriptjs')

<!-- jQuery 3 -->
<script src="{{url('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Select2 -->
<script src="{{url('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{url('assets/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{url('assets/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- date-range-picker -->
<script src="{{url('assets/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{url('assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
<script src="{{url('assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{url('assets/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('assets/dist/js/demo.js')}}"></script>

<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

@endsection