<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">

        <img src="{{ asset('front') }}/img/logo-muba.png" alt="" width="35px"> &nbsp;&nbsp;

        <a class="navbar-brand" href="/beranda"><i><b>Sistem Administrasi Surat Desa Kerta Jaya</b></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('beranda') }}">Beranda</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        <li><a class="dropdown-item" href="{{ url('profil/sambutan') }}">Sambutan</a></li>
                        <li><a class="dropdown-item" href="{{ url('profil/sejarah') }}">Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ url('profil/struktur') }}">Struktur</a></li>
                        <li><a class="dropdown-item" href="{{ url('profil/visi-misi') }}">Visi & Misi</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Pengajuan Surat</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                        <li><a class="dropdown-item" href="{{ url('pengajuan/belum-menikah') }}">Belum Menikah</a></li>
                        <li><a class="dropdown-item" href="{{ url('pengajuan/ktp-domisili') }}">KTP Sementara/Domisili</a></li>
                        <li><a class="dropdown-item" href="{{ url('pengajuan/kematian') }}">Kematian</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ url('hubungi-kami') }}">Hubungi Kami</a></li>

                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">Login</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ url('home') }}">{{ auth()->user()->name }}</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
