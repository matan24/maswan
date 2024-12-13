@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-4">
            <p class="alert alert-warning">
                <b>GANTI PASSWORD ADMIN</b>
            </p>
            <hr class="border border-warning">
            <div class="jumbotron jumbotron-fluid alert alert-light">
                <div class="">
                    <form action="{{ route('admin.password.edit') }}" method="POST">
                        @csrf
                
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Password Sekarang</label>
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" required>
                            @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                
                        <div class="mb-3">
                            <label for="password" class="form-label">Password Baru</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                
                        <button type="submit" class="btn btn-info btn-lg">Update</button>
                    </form>
                    
                </div>
              </div>
             
        </div>
    </div>

   
</div>
@endsection
