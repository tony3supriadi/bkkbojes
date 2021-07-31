@extends('admin.layouts.blank')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-3">
                                <div class="text-center">
                                    <img src="{{ asset('images/logo.png') }}" class="mb-2" width="80px" />
                                    <h1 class="h5 text-gray-900 mb-4">LOGIN ADMIN</h1>
                                </div>
                                <form method="post" action="{{ route('admin.auth.login') }}" class="user">
                                    @csrf

                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user @error('username') is-invalid @enderror" placeholder="Masukan username atau email" autocomplete="off" autofocus />

                                        @error('username')
                                        <small class="text-danger w-100 d-block px-3">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Masukan kata sandi">

                                        @error('password')
                                        <small class="text-danger w-100 d-block px-3">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" name="remamber_me" class="custom-control-input" id="remamber_me">
                                            <label class="custom-control-label" for="remamber_me">Selalu ingat</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <i class="fa fa-sign-in-alt mr-2"></i>Log in
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <small>Copyright &copy; {{ date('Y') }} BKK SMK Negeri 1 Bojongsari.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection