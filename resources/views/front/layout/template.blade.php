<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Pengajuan Surat - Desa Kerta Jaya</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('front') }}/img/logo-muba.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('front') }}/css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('front.layout._navbar')

        @yield('content')

    </main>

    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Desa Kerta Jaya {{ date('Y') }}</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="https://facebook.com">Facebook</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="https://instagram.com">Instagram</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="https://youtube.com">Youtube</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('front') }}/js/scripts.js"></script>
</body>

</html>
