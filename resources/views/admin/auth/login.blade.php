@extends('admin.layouts.blank')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-3 p-md-5">
                                <div class="text-center">
                                    <img src="{{ asset('images/logo.png') }}" class="mb-2" />
                                    <h1 class="h4 text-gray-900 mb-4">LOGIN ADMIN</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user @error('username') is-invalid @enderror" placeholder="Masukan Username atau E-Mail" autocomplete="off" autofocus />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user " placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Selalu ingat</label>
                                        </div>
                                    </div>
                                    <a href="index.html" class="btn btn-primary btn-user btn-block">
                                        <i class="fa fa-sign-in-alt mr-2"></i>Log in
                                    </a>
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