@extends('layouts.admin')

@section('title', 'Show Karyawan Non Staff | PT Mustika Agro Sari')

@section('container')

     <!-- Begin Page Content -->
     <div class="container-fluid">

         <!-- Image and text -->
       <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('admin2/img/vv.png') }}" width="100" height="100" class="rounded-circle" alt="">
          <b>DATA KELOLA KARYAWAN NON STAFF PT MUSTIKA AGRO SARI</b>
        </a>
      </nav>
      <hr class="my-4">
      <p class="lead"><b>Pastikan untuk selalu memperbarui data karyawan..!</b></p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-4">
                <br>
                @if (session('status'))
                <div class="alert alert-info">
                  {{ session('status')}}
                </div>
                 @endif
                <br>
                <a href="{{ route('admin.input2.mascreate-non-staff') }}" class="btn btn-info">Kembali</a>      
                <br><br><br>
                    <div class="table-responsive">
                    <table class="table table-striped table-hover" id="example2" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                              <th>No</th>
                              <th>Nik</th>
                              <th>NPWP</th>
                              <th>Nama Lengkap</th>
                              <th>Tempat Lahir</th>
                              <th>Tanggal lahir</th>
                              <th>Umur</th>
                              <th>Gender</th>
                              <th>Status Karyawan</th>
                              <th>PKWT</th>
                              <th>PKWTT</th>
                              <th>TMK</th>
                              <th>Jabatan</th>
                              <th>Domisili</th>
                              <th>Pendidikan</th>
                              <th>Agama</th>
                              <th>Status Pernikahan</th>
                              <th>Jumlah Anak</th>
                              <th>Status Pajak WP</th>
                              <th>BPJS Kesehatan</th>
                              <th>BPJS Ketenagakerjaan</th>
                              <th>CV & KTP</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($masnon as $item)
                          <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $item->nik_mns }}</td>
                              <td>{{ $item->npwp }}</td>
                              <td>{{ $item->nama }}</td>
                              <td>{{ $item->lahir }}</td>                
                              <td>{{ $item->ttl }}</td>
                              <td>{{ $item->umur }}</td>
                              <td>{{ $item->gender }}</td>
                              <td>{{ $item->status_karyawan }}</td>
                              <td>{{ $item->pkwt }}</td>
                              <td>{{ $item->pkwtt }}</td>
                              <td>{{ $item->tmk }}</td>
                              <td>{{ $item->jabatan }}</td>
                              <td>{{ $item->domisili }}</td>
                              <td>{{ $item->pendidikan }}</td>
                              <td>{{ $item->agama }}</td>
                              <td>{{ $item->status_pernikahan }}</td>
                              <td>{{ $item->jml_anak }}</td>
                              <td>{{ $item->wp }}</td>
                              <td>{{ $item->bpjs_kesehatan }}</td>
                              <td>{{ $item->bpjs_kerja }}</td>
                              <td><a href="{{ Storage::url($item->cv) }}"> <img src="{{ asset('admin2/img/folder.png') }}" width="60" height="60" class="rounded-circle" alt=""></a></td>
                                <td class="">
                                    <a href="{{ route('admin.input2.editmas-non-staff', Crypt::encryptString($item->id)) }}" class="btn btn-warning btn-lg mb-2"><i class="bi bi-pencil-fill"></i></a> 
                  
                                    <form action="{{ route('admin.input2.showmas-non-staff.delete', $item->id) }}" method="post">
                                      @method('delete')
                                      @csrf 
                                      <button type="submit" class="btn btn-danger btn-lg mr-2"><i class="bi bi-trash"></i></button>
                                    </form>
                  
                                </td>              
                            </tr>
                            @endforeach   
                        </tbody>                                
                    </table>
                  </div>
                <br>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    @endsection
    @push('tablestyle')
    <link href="{{ asset('admin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('tablescript')
      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('admin2/vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('admin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
      <!-- Core plugin JavaScript-->
      <script src="{{ asset('admin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  
      <!-- Custom scripts for all pages-->
      <script src="{{ asset('admin2/js/sb-admin-2.min.js') }}"></script>
  
      <!-- Page level plugins -->
      <script src="{{ asset('admin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('admin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
  
      {{-- <!-- Page level custom scripts -->
      <script src="{{ asset('admin2/js/demo/datatables-demo.js') }}"></script> --}}

      <script>
        $(function () {
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "pageLength": 5,
            });
        });
    </script>

@endpush
      

