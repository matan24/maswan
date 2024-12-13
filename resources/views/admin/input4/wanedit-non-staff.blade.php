@extends('layouts.admin')

@section('title', 'Update Karyawan Non Staff| PT Wanasari Nusantara')

@section('container')

       <!-- Begin Page Content -->
       <div class="container-fluid">

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('admin2/img/rr.png') }}" width="100" height="100" class="rounded-circle" alt="">
            </a>
          </nav>
        <!-- Page Heading -->
        <h5><b class="font-weight-bold">UPDATE NON STAFF PT WANASARI NUSANTARA</b></h5>
          <br>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-4">

                <form action="{{ route('admin.input4.wanedit-non-staff.update_wan_non', $wannon->id ) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <br>
                    @if (session('status'))
                        <div class="alert alert-info">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
  
                    <div class="mb-3 row">
                      <label for="nik_wns" class="col-sm-2 col-form-label">Nik Karyawan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nik_wns" id="nik_wns"
                        value="{{ $wannon->nik_wns }}">
                      </div>
                    </div>
                    
                    <div class="mb-3 row">
                      <label for="npwp" class="col-sm-2 col-form-label">NPWP</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="npwp" id="npwp"
                        value="{{ $wannon->npwp }}">
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama" id="nama"
                        value="{{ $wannon->nama }}">
                      </div>
                    </div>

                    
                    <div class="mb-3 row">
                      <label for="lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="lahir" id="lahir"
                        value="{{ $wannon->lahir }}">
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="ttl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" name="ttl" id="ttl"
                        value="{{ $wannon->ttl }}">
                      </div>
                    </div>
 
                    <div class="mb-3 row">
                      <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control" name="umur" id="umur"
                        value="{{ $wannon->umur }}">
                      </div>
                    </div>
                     
                    <div class="mb-3 row">
                      <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                      <div class="col-sm-8">
                          <select id="gender" name="gender" 
                          value="{{ $wannon->gender }}" class="form-control">
                              <option selected disabled>Pilih</option>
                              <option>
                              Male
                              </option>
                              <option>
                              Female
                              </option>   
                          </select>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="status_karyawan" class="col-sm-2 col-form-label">Status Karyawan</label>
                      <div class="col-sm-8">
                          <select id="status_karyawan" name="status_karyawan" 
                          value="{{ $wannon->status_karyawan}}" class="form-control">
                              <option selected disabled>Pilih</option>
                              <option>
                                Pekerja Waktu Tertentu | PKWT
                              </option>
                              <option>
                                Pekerja Waktu Tidak Tertentu | PKWTT
                              </option>
                          </select>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="pkwt" class="col-sm-2 col-form-label">Periode PKWT</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="pkwt" id="pkwt"
                        value="{{ $wannon->pkwt }}">
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="pkwtt" class="col-sm-2 col-form-label">Tanggal Diangkat Karyawan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="pkwtt" id="pkwtt"
                        value="{{ $wannon->pkwtt }}">
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="tmk" class="col-sm-2 col-form-label">Tanggal Mulai Bekerja</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" name="tmk" id="tmk"
                        value="{{ $wannon->tmk }}">
                      </div>
                    </div>
                    
                    <div class="mb-3 row">
                      <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="jabatan" id="jabatan"
                        value="{{ $wannon->jabatan }}">
                      </div>
                    </div>

                  <div class="mb-3 row">
                    <label for="domisili" class="col-sm-2 col-form-label">Domisili</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="domisili" id="domisili"
                      value="{{ $wannon->domisili }}">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-8">
                        <select id="pendidikan" name="pendidikan" 
                        value="{{ $wannon->pendidikan }}" class="form-control">
                            <option selected disabled>Pilih</option>
                            <option>
                              SD
                            </option>
                            <option>
                              SMP
                            </option>
                            <option>
                              SLTA
                            </option>
                            <option>
                              D3
                            </option>
                            <option>
                              S1
                            </option> 
                            <option>
                              S2
                            </option> 
                            <option>
                              S3
                            </option>    
                        </select>
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-8">
                        <select id="agama" name="agama" 
                        value="{{ $wannon->agama }}" class="form-control">
                            <option selected disabled>Pilih</option>
                            <option>
                              Islam
                            </option>
                            <option>
                              Katolik
                            </option>
                            <option>
                              Protestan
                            </option>
                            <option>
                              Budha
                            </option>
                            <option>
                              Hindu
                            </option> 
                            <option>
                              Konghucu
                            </option>  
                        </select>
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="status_pernikahan" class="col-sm-2 col-form-label">Status Pernikahan</label>
                    <div class="col-sm-8">
                        <select id="status_pernikahan" name="status_pernikahan" 
                        value="{{ $wannon->status_pernikahan}}" class="form-control">
                            <option selected disabled>Pilih</option>
                            <option>
                              Single | TK0 TK1
                            </option>
                            <option>
                              Widower | TK2 TK3
                            </option>
                            <option>
                              Married | K0 = K/1/0
                            </option>
                            <option>
                              Married | K1 = K/1/1
                            </option> 
                            <option>
                              Married | K2 = K/1/2
                            </option>
                            <option>
                              Married | K3 = K/1/3
                            </option>       
                        </select>
                    </div>
                </div>
                 
                  <div class="mb-3 row">
                    <label for="jml_anak" class="col-sm-2 col-form-label">Jumlah Anak</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="jml_anak" id="jml_anak"
                      value="{{ $wannon->jml_anak }}">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="wp" class="col-sm-2 col-form-label">Status Pajak WP</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="wp" id="wp"
                      value="{{ $wannon->wp }}">
                    </div>
                  </div>
                  
                  <div class="mb-3 row">
                    <label for="bpjs_kesehatan" class="col-sm-2 col-form-label">BPJS Kesehatan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="bpjs_kesehatan" id="bpjs_kesehatan"
                      value="{{ $wannon->bpjs_kesehatan }}">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="bpjs_kerja" class="col-sm-2 col-form-label">BPJS Ketenagakerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="bpjs_kerja" id="bpjs_kerja"
                      value="{{ $wannon->bpjs_kerja }}">
                    </div>
                  </div>

                    <div class="mb-3 row">
                      <label for="cv" class="col-sm-2 col-form-label">CV | Curiculum vitae</label>
                      <div class="col-sm-8">
                        <input type="file" class="form-control" name="cv" id="cv"
                        value="{{ $wannon->cv }}">
                      </div>
                    </div>
  
        
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>    
                </form>
                <br>
            </div>
        </div>

    </div>
@endsection
@push('ckeditor')
<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );

</script>
@endpush