@extends('layouts.dash')
@section('title', 'Profil')

@section('header')


@endsection

@section('judul_page','Profil')
@section('subjudul', ''.$penduduk->nik.'')

@section('content')

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-4">
                            
                            <div class="panel panel-default">
                                <div class="panel-body profile" style="background: url('/assets/assets/images/gallery/music-4.jpg') center center no-repeat;">
                                    <div class="profile-image">
                                        <img src="{{url('/assets/assets/images/users/user3.jpg')}}" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">{{$penduduk->nama_lengkap}}</div>
                                        <div class="profile-data-title" style="color: #FFF;">{{$penduduk->nik}}</div>
                                    </div>                                   
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="/penduduk/{{$penduduk->id}}/edit" class="btn btn-info btn-rounded btn-block"><span class="fa fa-check"></span> Edit</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="/penduduk/{{$penduduk->id}}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-rounded btn-block"><span class="fa fa-comments"></span> Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body list-group border-bottom">
                                    <li class="list-group-item active"><span class="fa fa-bar-chart-o"></span> BIODATA</li>
                                    <li class="list-group-item"><span class="fa fa-coffee"></span> Tempat, Tgl Lahir <span class="badge">{{$penduduk->tempat_lahir}}, {{$penduduk->tgl_lahir}}</span></li>                                
                                    <li class="list-group-item"><span class="fa fa-users"></span> Jenis Kelamin<span class="badge">{{$penduduk->jenis_kel}}</span></li>
                                    <li class="list-group-item"><span class="fa fa-users"></span> Agama<span class="badge">{{$penduduk->agama}}</span></li>
                                    <li class="list-group-item"><span class="fa fa-users"></span> Nomor Telp<span class="badge">{{$penduduk->tlp}}</span></li>
                                    <li class="list-group-item"><span class="fa fa-users"></span> Email<span class="badge">{{$penduduk->email}}</span></li>
                                </div>

                            </div>                            
                            
                        </div>
                        
                        <div class="col-md-8">
                            <!-- CONTACTS -->
                            <div class="panel panel-default">
                                <div class="panel-body list-group list-group-contacts">                                
                                    <li class="list-group-item">                                    
                                        <span class="contacts-title">NAMA LENGKAP</span>
                                        <p>{{ $penduduk -> nama_lengkap }}</p>
                                    </li>                                
                                    <li class="list-group-item">                                    
                                        <span class="contacts-title">Nomor Induk Keluarga</span>
                                        <p>{{ $penduduk -> kk }}</p>
                                    </li>                                
                                    <li class="list-group-item">                                    
                                        <span class="contacts-title">ALAMAT</span>
                                        <p>{{ $penduduk -> alamat }} RT.{{ $penduduk -> rt }} RW.{{ $penduduk -> rw }}</p>
                                    </li>                                
                                    <li class="list-group-item">                                    
                                        <span class="contacts-title">PENDIDIKAN</span>
                                        <p>{{ $penduduk -> skul }}</p>
                                    </li>                                
                                    <li class="list-group-item">                                    
                                        <span class="contacts-title">STATUS</span>
                                        <p>{{ $penduduk -> status }}</p>
                                    </li>                                
                                    <li class="list-group-item">                                    
                                        <span class="contacts-title">PEKERJAAN</span>
                                        <p>{{ $penduduk -> kerja }}</p>
                                    </li>                                
                                    <li class="list-group-item">                                    
                                        <span class="contacts-title">NAMA IBU KANDUNG</span>
                                        <p>{{ $penduduk -> ibu }}</p>
                                    </li>                                
                                    <li class="list-group-item">                                    
                                        <span class="contacts-title">NAMA AYAH KANDUNG</span>
                                        <p>{{ $penduduk -> ayah }}</p>
                                    </li>                                
                                </div>
                            </div>
                            <!-- END CONTACTS -->                     
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT WRAPPER -->  
@endsection

@section('scriptjs')
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='/assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="{{url('/assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{url('/assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js')}}"></script>        
        <!-- END THIS PAGE PLUGINS--> 

@endsection