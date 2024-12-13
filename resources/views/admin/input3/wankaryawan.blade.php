@extends('layouts.admin')

@section('title', 'Karyawan | PT Wanasari Nusantara')

@section('container')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Image and text -->
          <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('admin2/img/user.png') }}" width="100" height="100" class="rounded-circle" alt="">
              <b>DATA KELOLA KARYAWAN STAFF & NON STAFF PT WANASARI NUSANTARA</b>
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
                <a href="{{ route('admin.input3.wancreate-staff') }}" class="btn btn-outline-info btn-lg"><i class="bi bi-person-fill-add"></i>  ADD STAFF</a>
                <a href="{{ route('admin.input4.wancreate-non-staff') }}" class="btn btn-outline-success btn-lg"><i class="bi bi-person-fill-add"></i>  ADD NON STAFF</a>  
                <a href="{{ route('admin.input3.wanshow-staff') }}" class="btn btn-outline-info btn-lg"><i class="bi bi-filetype-doc"></i> SHOW DATA STAFF</a>
                <a href="{{ route('admin.input4.wanshow-non-staff') }}" class="btn btn-outline-success btn-lg"><i class="bi bi-filetype-doc"></i> SHOW DATA NON STAFF</a>      
                <br><br><br>
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

      {{-- <script>
        <script src="{{ asset('admin2/js/sb-admin-2.min.js') }}"></script>
        $(function(){
            let buttonEdit = $("button[name*='editButton']")
            let myModal = $("div#myModal")


            buttonEdit.on("click",function(){
              let id = $(this).attr('data-id');
              let row = $(this).closest("tr");
              let nama = row.find("td[name*='nama']").html();
              let jabatan = row.find("td[name*='jabatan']").html();
              let tanggal = row.find("td[name*='tanggal']").html();
              let cv = row.find("td[name*='cv']").html();
              let status_karyawan = row.find("td[name*='status_karyawan']").html();
            
              $(`input[name*='nama']`).val(nama);
              $(`select[name*='jabatan']`).val(jabatan);
              $(`input[name*='tanggal']`).val(tanggal);
              $(`input[name*='cv']`).val(cv);
              $(`select[name*='status_karyawan']`).val(status_karyawan);
              $(`input[name*='id']`).val(id);
              $(`h5[name*='nama']`).html(nama);
            });
        })
      </script>  --}}

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
      

