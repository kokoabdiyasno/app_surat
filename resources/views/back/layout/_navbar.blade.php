<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin-profil') }}">
                    <span data-feather="layers"></span>
                    Profil
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span data-feather="file"></span>
                    Daftar Pengajuan Surat
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('surat/belum-menikah') }}">Keterangan Belum Menikah</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ url('surat/ktp-domisili') }}">KTP Sementara/Domisili</a></li>
                    <li><a class="dropdown-item" href="{{ url('surat/kematian') }}">Keterangan Kematian</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('akun') }}">
                    <span data-feather="users"></span>
                    Akun
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <span data-feather="bar-chart-2"></span>
                    Keluar
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Daftar Laporan</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="minus-circle"></span>
            </a>
        </h6>

        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#laporanBelumMenikah">
                    <span data-feather="file-text"></span>
                    Keterangan Belum Menikah
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#laporanKtpDomisili">
                    <span data-feather="file-text"></span>
                    KTP Sementara/Domisili
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#laporanKematian">
                    <span data-feather="file-text"></span>
                    Keterangan Kematian
                </a>
            </li>
        </ul>
    </div>
</nav>

{{-- Laporan Belum Menikah --}}
<div class="modal fade" id="laporanBelumMenikah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="staticBackdropLabel">Download Laporan Pengajuan (Belum Menikah)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('laporan/belum-menikah') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="tanggal_awal">Tanggal Awal</label>
                        <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" required>
                    </div>

                    <p>
                        <small><b>Catatan :</b> Pilih berdasarkan rentang tanggal pengajuan</small>
                    </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>

        </div>
    </div>
</div>

{{-- Laporan KTP Domisili --}}
<div class="modal fade" id="laporanKtpDomisili" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="staticBackdropLabel">Download Laporan Pengajuan (KTP Sementara/Domisili)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('laporan/ktp-domisili') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="tanggal_awal">Tanggal Awal</label>
                        <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" required>
                    </div>

                    <p>
                        <small><b>Catatan :</b> Pilih berdasarkan rentang tanggal pengajuan</small>
                    </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>

        </div>
    </div>
</div>

{{-- Laporan KTP Domisili --}}
<div class="modal fade" id="laporanKtpDomisili" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="staticBackdropLabel">Download Laporan Pengajuan (KTP Sementara/Domisili)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('laporan/ktp-domisili') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="tanggal_awal">Tanggal Awal</label>
                        <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" required>
                    </div>

                    <p>
                        <small><b>Catatan :</b> Pilih berdasarkan rentang tanggal pengajuan</small>
                    </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>

        </div>
    </div>
</div>

{{-- Laporan Kematian --}}
<div class="modal fade" id="laporanKematian" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="staticBackdropLabel">Download Laporan Pengajuan (Kematian)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('laporan/ktp-domisili') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="tanggal_awal">Tanggal Awal</label>
                        <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" required>
                    </div>

                    <p>
                        <small><b>Catatan :</b> Pilih berdasarkan rentang tanggal pengajuan</small>
                    </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>

        </div>
    </div>
</div>

{{-- Logout --}}
<div class="modal fade" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Keluar Sistem</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('logout') }}" method="post">
                    @csrf

                    <p>
                        Jika yakin ingin keluar dari sistem, Silahkan klik tombol submit...
                    </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>

        </div>
    </div>
</div>

