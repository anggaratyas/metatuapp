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
    <form method="post" action="/penduduk">
    @csrf
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
                            <input name="nama_lengkap" type="name" class="form-control" placeholder="Nama Lengkap" value="{{old('nama_lengkap')}}">                         
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
    </form>
    </section>
    <!-- /.content -->


<!-- END MAIN CONTENT -->      