@extends('front.layout.template')

@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Selamat Datang</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Sistem Informasi Pengajuan dan Administrasi
                            Surat Desa Kerta Jaya Kabupaten Musi Banyuasin, Sumatra Selatan, 30711</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-1" href="#features">Pengajuan</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="/hubungi-kami">Hubungi</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                        src="{{ asset('back') }}/img/gambar-depan.jpg" alt="..." /></div>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">Sistem Administrasi Surat</h2>

                    <p class="mt-3">
                        Merupakan sistem adminstrasi berbasis web yang bertujuan untuk mempermudah proses pengelolaan surat di lingkungan pemerintahan Desa Kerta Jaya, Musi Banyuasin, Sumatra Selatan
                    </p>
                </div>

                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-collection"></i></div>
                            <h2 class="h5">Fleksibel</h2>
                            <p class="mb-0">Sistem berbasis online sehingga dapat di akses darimanapun dan kapanpun.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-collection"></i></div>
                            <h2 class="h5">Notifikasi</h2>
                            <p class="mb-0">Sistem akan melakukan pemberitahuan atau pengingat mengenai status surat anda</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-toggles2"></i></div>
                            <h2 class="h5">Transparan</h2>
                            <p class="mb-0">Proses pengiriman data melalui sistem bersifat terbuka atau transparan, tanpa dipungut biaya pengajuan</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-toggles2"></i></div>
                            <h2 class="h5">Dokumentasi</h2>
                            <p class="mb-0">Setiap pengajuan akan otomatis masuk ke sistem dan terdokumentasi sesuai jenis surat yang di ajukan dan dapat menjadi arsip administrasi surat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Pelayanan Administrasi Surat</h2>
                        <p class="lead fw-normal text-muted mb-5">Silahkan pilih jenis surat dan Isi formulir dengan lengkap</p>
                    </div>
                </div>
            </div>

            <div class="row gx-5">
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="{{ asset('front') }}/img/icon-surat.webp" alt="..." />
                        <div class="card-body p-4">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">Layanan</div>
                            <a class="text-decoration-none link-dark stretched-link" href="{{ url('pengajuan/belum-menikah') }}">
                                <h5 class="card-title mb-3">Surat Belum Menikah</h5>
                            </a>

                            <p class="card-text mb-0">
                                Surat pernyataan belum menikah adalah dokumen yang fungsinya menyatakan bahwa seseorang belum pernah menikah atau berstatus masih lajang
                            </p>

                            <div class="float-end mt-3">
                                <a href="{{ url('pengajuan/belum-menikah') }}" class="btn btn-primary">Buat Pengajuan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="{{ asset('front') }}/img/icon-surat.webp" alt="..." />
                        <div class="card-body p-4">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">Layanan</div>
                            <a class="text-decoration-none link-dark stretched-link" href="{{ url('pengajuan/ktp-domisili') }}">
                                <h5 class="card-title mb-3">Surat KTP Sementara/Domisili</h5>
                            </a>
                            <p class="card-text mb-0">Surat keterangan Kartu Tanda Penduduk (KTP) sementara ialah pengganti identitas sebelum KTP yang sah diterbitkan dan digunakan untuk mengakses layanan dari negara</p>

                            <div class="float-end mt-3">
                                <a href="{{ url('pengajuan/ktp-domisili') }}" class="btn btn-primary">Buat Pengajuan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="{{ asset('front') }}/img/icon-surat.webp" alt="..." />
                        <div class="card-body p-4">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">Layanan</div>
                            <a class="text-decoration-none link-dark stretched-link" href="{{ url('pengajuan/kematian') }}">
                                <h5 class="card-title mb-3">Surat Kematian</h5>
                            </a>
                            <p class="card-text mb-0">Surat Akta kematian merupakan dokumen dalam pembuktian administrasi bahwasanya seseorang telah dinyatakan meninggal dunia bertujuan melindungi data-data seseorang yang sudah meninggal</p>

                            <div class="float-end mt-3">
                                <a href="{{ url('pengajuan/kematian') }}" class="btn btn-primary">Buat Pengajuan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
