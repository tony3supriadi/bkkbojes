<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bursa Kerja Khusus SMK Negeri 1 Bojongsari">
    <meta name="author" content="Toni Tri Supriadi">
    <title>@yield('title') | BKK SMK Negeri 1 Bojongsari</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/admin/css/sb-admin-2.css') }}" rel="stylesheet">
    @stack('styles')

    <script src="{{ asset('/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/admin/js/sb-admin-2.min.js')}}"></script>
    @stack('scripts')
</head>

@yield('body')

</html>