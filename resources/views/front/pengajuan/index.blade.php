@extends('front.layout.template')

@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-5 fw-bolder text-white mb-2">Pengajuan Surat</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Sistem Informasi Pengajuan dan Administrasi Surat Desa Kerta Jaya
                        Kabupaten Musi Banyuasin, Sumatra Selatan, 30711</p>
                    <div class="">
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
                <div class="col-8">
                    <div class="card p-3">
                        <div class="text-center">
                            <h2>Formulir Surat {{ $judul }}</h2>
                            <hr>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}, klik disini untuk melihat <a href="{{ url('home') }}">daftar surat</a> anda
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ url('pengajuan') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="tipe" value="{{ $tipe }}">

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            value="{{ old('nama', isset(auth()->user()->name) ? auth()->user()->name : null) }}">

                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin"
                                            class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                            <option value="" hidden>-- pilih --</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>

                                        @error('jenis_kelamin')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            value="{{ old('tanggal_lahir') }}">

                                        @error('tanggal_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="email">Alamat Email</label>
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email', isset(auth()->user()->email) ? auth()->user()->email : null) }}">

                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="no_telepon">No Telepon</label>
                                        <input type="number" name="no_telepon" id="no_telepon"
                                            class="form-control @error('no_telepon') is-invalid @enderror"
                                            value="{{ old('no_telepon') }}">

                                        @error('no_telepon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="alamat">Alamat/Tempat Tinggal</label>
                                        <input type="alamat" name="alamat" id="alamat"
                                            class="form-control @error('alamat') is-invalid @enderror"
                                            value="{{ old('alamat') }}">

                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="upload_kk">Upload KK (Max 3 MB)</label>
                                        <input type="file" name="upload_kk" id="upload_kk"
                                            class="form-control @error('upload_kk') is-invalid @enderror">

                                        @error('upload_kk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="berkas_pendukung">Upload Berkas Pendukung (Jika Ada)</label>
                                        <input type="file" name="berkas_pendukung" id="berkas_pendukung"
                                            class="form-control @error('berkas_pendukung') is-invalid @enderror">

                                        @error('berkas_pendukung')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="catatan">Catatan (Jika Ada)</label>
                                <textarea name="catatan" id="catatan" cols="30" rows="3"
                                    class="form-control @error('catatan') is-invalid @enderror">{{ old('catatan') }}</textarea>

                                @error('catatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="float-end">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>

                        </form>

                        <div class="card-footer mt-3">
                            <small>
                                <p>
                                    <i><b>Catatan :</b>
                                        <ul>
                                            <li>Pastikan data diisi dengan benar</li>
                                            <li>Upload file maksimal 3 MB</li>
                                            <li>Upload file berformat gambar (.jpg, .png)</li>
                                            <li>Notifikasi pengajuan akan dikirim via email</li>
                                        </ul>
                                    </i>
                                </p>
                            </small>
                        </div>

                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <h4 class="card-header">Pengajuan Surat</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="{{ url('pengajuan/belum-menikah') }}">Belum Menikah</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ url('pengajuan/ktp-domisili') }}">KTP Sementara/Domisili</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ url('pengajuan/kematian') }}">Kematian</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
