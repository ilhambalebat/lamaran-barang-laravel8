<?php 
    header("Content-Security-Policy: default-src 'self' 'unsafe-inline' https://fonts.googleapis.com  https://cdnjs.cloudflare.com https://code.jquery.com  https://cdn.datatables.net https://cdn.jsdelivr.net  ; object-src 'none'; img-src 'self' data:; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com https://fonts.googleapis.com data:");
    header("X-Frame-Options: SAMEORIGIN");
    header('X-Content-Type-Options: nosniff');
    header("Referrer-Policy: strict-origin-when-cross-origin");
    header("Permissions-Policy: microphone=(), camera=()");
    header("strict-transport-security: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="en">
@yield('head')
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{  asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('layouts.navbar')
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if(session()->has('danger'))
            <div class="alert alert-danger">
                <?= session('danger')."<br>" ?>
                @if(!empty($errors))
                    @foreach ($errors->all() as $error)
                        {{ "- ".$error }}<br/>
                    @endforeach
                @endif
            </div>
            @endif
            @if(session()->has('warning'))
            <div class="alert alert-warning">
                {{ session('warning')."\n" }}
                {{ @$errors }}
            </div>
            @endif
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>    
    @yield('script')
    @yield('script_tambahan')
</body>
</html>
