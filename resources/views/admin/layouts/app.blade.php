@extends('admin.layouts.main')

@section('body')

<body id="page-top">

    <div id="wrapper">
        @include('admin.layouts.inc.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.layouts.inc.navbar')

                <div class="container-fluid">
                    @yield('page-title')
                    @yield('content')
                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; {{ date('Y') }} BKK SMK Negeri 1 Bojongsari.</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>
@endsection