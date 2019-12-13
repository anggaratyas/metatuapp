@extends('layout.main')
@section('title', 'Halaman Tes')

@section('header')
 
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

@section('judul_page','Halaman Data Pengguna')
@section('subjudul','Lengkapi Data Pengguna')

@section('mainpage')
<!-- MAIN CONTENT -->

   <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#datapribadi" data-toggle="tab">Data Pribadi</a></li>
              <li><a href="#alamat" data-toggle="tab">Alamat</a></li>
              <li><a href="#pekerjaan" data-toggle="tab">Pekerjaan</a></li>
              <li><a href="#infolain" data-toggle="tab">Informasi Lainnya</a></li>

              <li class="pull-right">
              <button type="submit" class="btn btn-default">Kembali</button>
              <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </li>
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
                            <input type="name" class="form-control" placeholder="Nama Lengkap">                         
                        </div>

                        <div class="form-group">
                          <label>Nama Alias</label>
                            <input type="name" class="form-control" placeholder="Alias">                         
                        </div>

                        <div class="form-group">
                          <label>Tempat Lahir</label>
                            <input type="name" class="form-control" placeholder="Tempat Lahir">                         
                        </div>

                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control" id="datepicker" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                          </div>
                            
                        </div>

                        <div class="form-group">
                          <label>Gelar</label>
                            <input type="name" class="form-control" placeholder="Gelar">                         
                        </div>

                        <div class="form-group">
                          <label>Agama</label>
                          <select class="form-control select2" style="width: 100%;">
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
                          <select class="form-control select2" style="width: 100%;">
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
                          <label>Kewarganegaraan</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option>Warga Negara Indonesia (WNI)</option>
                            <option>Warga Negara Asing (WNA)</option>
                          </select>                      
                        </div>
                      </div>
                      <!-- /.box-body -->
                    </div>

                    <div class="col-md-6">

                    <form class="form-horizontal">
                      <div class="box-body">

                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                          </select>                       
                        </div>

                        <div class="form-group">
                          <label>Jenis Identitas</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option>KTP</option>
                            <option>SIM</option>
                            <option>PASPOR</option>
                          </select>                       
                        </div>

                        <div class="form-group">
                          <label>NO Identitas</label>
                          <input type="text" class="form-control" data-inputmask='"mask": "9999999999999999"' data-mask>                       
                        </div>

                        <div class="form-group">
                          <label>NO. Kartu Keluarga</label>
                          <input type="text" class="form-control" data-inputmask='"mask": "9999999999999999"' data-mask>                                                  
                        </div>

                        <div class="form-group">
                          <label>Nama Ibu Kandung</label>
                            <input type="name" class="form-control" placeholder="Nama Ibu">                         
                        </div>

                        <div class="form-group">
                          <label>Nama Ayah Kandung</label>
                            <input type="name" class="form-control" placeholder="Nama Ayah">                         
                        </div>

                        <div class="form-group">
                          <label>Nama Pasangan</label>
                            <input type="name" class="form-control" placeholder="Nama Pasangan">                         
                        </div>

                        <div class="form-group">
                          <label>Status Warga</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option>Warga Metatu</option>
                            <option>Warga Purworejo</option>
                            <option>Warga Medangan</option>
                            <option>Bukan Warga</option>
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
                          <input type="name" class="form-control" placeholder="Alamat Identitas">                         
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-3">
                            <label>RT</label>
                            <input type="text" class="form-control" data-inputmask='"mask": "999"' data-mask>
                          </div>
                          <div class="col-xs-3">
                            <label>RW</label>
                            <input type="text" class="form-control" data-inputmask='"mask": "999"' data-mask>
                          </div>
                        </div>                  
                      </div>

                      <div class="form-group">
                        <label>Propinsi</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option>-- Silahkan Pilih Propinsi --</option>
                            <option>Data Base</option>
                          </select>                          
                      </div>
                      <div class="form-group">
                        <label>Kabupaten/Kota</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option>-- Silahkan Pilih Kabupaten --</option>
                            <option>Data Base</option>
                          </select>                         
                      </div>

                      <div class="form-group">
                        <label>Kecamatan</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option>-- Silahkan Pilih Kecamatan --</option>
                            <option>Data Base</option>
                          </select>                      
                      </div>

                      <div class="form-group">
                        <label>Desa</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option>-- Silahkan Pilih Desa --</option>
                            <option>Data Base</option>
                          </select>                       
                      </div>

                      <div class="form-group">
                        <label>KodePos</label>
                        <input type="text" class="form-control" data-inputmask='"mask": "9999999"' data-mask>                        
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                          <input type="email" class="form-control" placeholder="Email">                         
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>

                  <div class="col-md-6">
                  <form class="form-horizontal">
                    <div class="box-body">

                    <div class="form-group">
                        <label>Alamat Pemasangan</label>
                          <input type="name" class="form-control" placeholder="Alamat Identitas">                         
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-3">
                            <label>RT</label>
                            <input type="text" class="form-control" data-inputmask='"mask": "999"' data-mask>
                          </div>
                          <div class="col-xs-3">
                            <label>RW</label>
                            <input type="text" class="form-control" data-inputmask='"mask": "999"' data-mask>
                          </div>
                        </div>                  
                      </div>

                      <div class="form-group">
                        <label>Propinsi</label>
                          <input type="name" class="form-control" placeholder="Jawa Timur" disabled>                         
                      </div>
                      <div class="form-group">
                        <label>Kabupaten</label>
                          <input type="name" class="form-control" placeholder="Gresik" disabled>                         
                      </div>

                      <div class="form-group">
                        <label>Kecamatan</label>
                          <input type="name" class="form-control" placeholder="Benjeng" disabled>                         
                      </div>

                      <div class="form-group">
                        <label>Desa</label>
                          <input type="name" class="form-control" placeholder="Metatu" disabled>                         
                      </div>

                      <div class="form-group">
                        <label>KodePos</label>
                        <input type="text" class="form-control" placeholder="61172" disabled>                       
                      </div>

                      <div class="form-group">
                        <label>No. Tlp/Ponsel</label>
                          <input type="text" class="form-control" data-inputmask='"mask": "+6299999999999"' data-mask>
                      </div>
                    </div>                    
                  </div>
                </div>
                </section>
              </div>
              <!-- /Alamat -->

              <!-- Pekerjaan -->
              <div class="tab-pane" id="pekerjaan">
                <section id="pekerjaan">
                  <div class="row">

                    <div class="col-md-6">
                    <!-- form start -->
                    <form class="form-horizontal">
                      <div class="box-body">

                        <div class="form-group">
                          <label>Jenis Pekerjaan</label>
                            <input type="name" class="form-control" placeholder="Jenis Pekerjaan">                         
                        </div>

                        <div class="form-group">
                          <label>Alamat Pekerjaan</label>
                            <input type="name" class="form-control" placeholder="Alamat Pekerjaan">                         
                        </div>

                        <div class="form-group">
                          <label>Kode Pos</label>
                            <input type="name" class="form-control" placeholder="Kode Pos">                         
                        </div>

                      </div>
                      <!-- /.box-body -->
                    </div>

                    <div class="col-md-6">

                    <form class="form-horizontal">
                      <div class="box-body">

                        <div class="form-group">
                          <label>No. Tlp</label>
                          <input type="text" class="form-control" data-inputmask='"mask": "+6299999999999"' data-mask>                       
                        </div>

                        <div class="form-group">
                          <label>No Fax</label>
                          <input type="text" class="form-control" data-inputmask='"mask": "+6299999999999"' data-mask>                        
                        </div>

                        <div class="form-group">
                          <label>Bekerja Sejak</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control" id="datepicker" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                          </div>                          
                        </div>

                      </div>                    
                    </div>
                  </div>

                </section>
              </div>
              <!-- /Pekerjaan -->

              <!-- Informasi Lainnya -->
              <div class="tab-pane" id="infolain">
                <section id="infolain">
                  <div class="row">

                    <div class="col-md-6">
                    <!-- form start -->
                    <form class="form-horizontal">
                      <div class="box-body">

                        <div class="form-group">
                          <label>Resiko Pelanggan</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option>Tinggi</option>
                            <option>Sedang</option>
                            <option>Rendah</option>
                          </select>                        
                        </div>

                        <div class="form-group">
                          <label>Status Pelanggan</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option>Baik</option>
                            <option>Buruk</option>
                          </select>                      
                        </div>

                        <div class="form-group">
                          <label>Status Blokir</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option>Tidak</option>
                            <option>Ya</option>
                          </select>                     
                        </div>

                      </div>
                      <!-- /.box-body -->
                    </div>

                    <div class="col-md-6">

                    <form class="form-horizontal">
                      <div class="box-body">

                        <div class="form-group">
                          <label>Unggah Foto Rumah</label>
                          <div class="form-group">
                            <div class="btn btn-default btn-file">
                              <i class="fa fa-paperclip"></i> Foto Rumah
                              <input type="file" name="attachment">
                            </div>
                            <p class="help-block">Max. 32MB</p>
                          </div>                                                 
                        </div>

                        <div class="form-group">
                          <label>Unggah Foto Pelanggan</label>
                          <div class="form-group">
                            <div class="btn btn-default btn-file">
                              <i class="fa fa-paperclip"></i> Foto Profil
                              <input type="file" name="attachment">
                            </div>
                            <p class="help-block">Max. 32MB</p>
                          </div>                     
                        </div>

                      </div>                    
                    </div>
                  </div>

                </section>
              </div>
              <!-- /Informasi Lainnya -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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