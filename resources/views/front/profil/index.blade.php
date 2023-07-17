@extends('front.layout.template')

@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-5 fw-bolder text-white mb-2">{{ ucfirst($profil->status) }}</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Sistem Informasi Pengajuan dan Administrasi Surat Desa Kerta Jaya Kabupaten Musi Banyuasin, Sumatra Selatan, 30711</p>
                    <div class="">
                        <a class="btn btn-primary btn-lg px-4 me-sm-1" href="{{ url('/pengajuan/belum-menikah') }}">Pengajuan</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ url('hubungi-kami') }}">Hubungi</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <img class="img-fluid rounded-3" src="{{ asset('back/img/'.$profil->gambar) }}" alt="..." />
                </div>

                <div class="col-lg-7">
                    <h2>{{ $profil->judul }}</h2>
                    <p>{{ date('d/m/Y', strtotime($profil->created_at)) }}</p>
                        {!! $profil->isi !!}
                </div>
            </div>
        </div>
    </section>
@endsection
