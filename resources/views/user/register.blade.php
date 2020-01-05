@extends('layouts.dash')
@section('title', 'User')

@section('header')

@endsection


@section('judul_page','Data User Aplikasi')
@section('subjudul','')

@section('content')
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
    <form method="post" action="/user">
    @csrf
      <div class="row">
        <div class="col-xs-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#datapribadi" data-toggle="tab">Data Pribadi</a></li>
            </ul>
            
            <div class="tab-content">
              <!-- Data User -->
              <div class="tab-pane active" id="datapribadi">
                <section id="datapribadi">
                  <div class="row">

                    <div class="col-md-6">
                    <!-- form start -->
                    <form class="form-horizontal">
                      <div class="box-body">

                        <div class="form-group">
                          <label>Nama Lengkap</label>
                            <input name="name" type="name" class="form-control" placeholder="Nama Lengkap" value="{{old('name')}}">                         
                        </div>

                        <div class="form-group">
                          <label>Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" placeholder="Jabatan" value="{{old('jabatan')}}">                         
                        </div>

                        <div class="form-group">
                          <label>Email</label>
                          <input name="email" type="email" class="form-control" value="{{old('email')}}">                       
                        </div>
                        
                        <!-- <div class="form-group">
                            <label>Hak Akses</label>
                            <input name="role" type="text" class="form-control" value="{{old('role')}}">
                        </div> -->

                        <div class="form-group">
                          <label>Password</label>
                            <input name="password" type="password" class="form-control" value="{{old('password')}}">                         
                        </div>

                      </div>
                      <!-- /.box-body -->
                    </div>

                  </div>

                </section>
              </div>
              <!-- /Data User -->

            <button type="/user/create" class="btn btn-info">Simpan</button>
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
  
@endsection

@section('scriptjs')

@endsection