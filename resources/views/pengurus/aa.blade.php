<!-- MAIN CONTENT -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penduduk</h3>
              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
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
                <tbody>
                <?php $no = 0;?>
                @foreach ( $admin as $admin )
                <?php $no++ ;?>
                <tr>
                  <td>{{ $no }}</td>
                  <td>{{ $admin -> jabatan }}</td>
                  <td>
                  <a href="/pengurus/{{ $admin -> id }}">{{ $admin -> nik }}</a>
                  </td>
                  <td>{{ $admin -> nama }}</td>
                  <td>{{ $admin -> tlp }}</td>
                  <td>{{ $admin -> email }}</td>
                  <td>{{ $admin -> no_sk }}</td>
                  <td>{{ $admin -> jab_awal }} - {{ $admin -> jab_akhir }}</td>
                  <td>{{ $admin -> tgl_lahir }}</td>
                  <td>{{ $admin -> jenis_kel }}</td>
                  <td>{{ $admin -> alamat }}</td>
                  <td>{{ $admin -> rt }}</td>
                  <td>{{ $admin -> rw }}</td>
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