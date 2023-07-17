@extends('back.layout.template')

@section('title', 'Admin - Detail Surat')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-surats-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Detail Pengajuan Surat</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Jenis Surat</th>
                    <td>
                        @if ($surat->tipe == 1)
                            Surat Belum Menikah
                        @elseif ($surat->tipe == 2)
                            Surat KTP Sementara/Domisili
                        @else
                            Surat Kematian
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $surat->nama }}</td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $surat->jenis_kelamin }}</td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ date('d/m/Y', strtotime($surat->tanggal_lahir)) }}</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>{{ $surat->alamat }}</td>
                </tr>

                <tr>
                    <th>No Telpon</th>
                    <td>{{ $surat->no_telepon }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $surat->email }}</td>
                </tr>

                <tr>
                    <th>Upload KK</th>
                    <td>
                        <a href="{{ asset('back/img/' . $surat->upload_kk) }}" target="_blank">
                            <img src="{{ asset('back/img/' . $surat->upload_kk) }}" width="400px">
                        </a>
                    </td>
                </tr>

                <tr>
                    <th>Berkas Pendukung</th>
                    <td>
                        @if ($surat->berkas_pendukung)
                            <a href="{{ asset('back/img/' . $surat->berkas_pendukung) }}" target="_blank">
                                <img src="{{ asset('back/img/' . $surat->berkas_pendukung) }}" width="400px">
                            </a>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Catatan</th>
                    <td>{{ $surat->catatan }}</td>
                </tr>

                <tr>
                    <th>Tanggal Pengajuan</th>
                    <td>{{ date('d/m/Y', strtotime($surat->created_at)) }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if ($surat->status == 0)
                            <span class="badge bg-warning">Belum Dikonfirmasi</span>
                        @elseif ($surat->status == 1)
                            <span class="badge bg-danger">Ditolak</span>
                        @elseif ($surat->status == 2)
                            <span class="badge bg-primary">Diproses</span>
                        @elseif ($surat->status == 3)
                            <span class="badge bg-success">Selesai</span>
                        @endif
                    </td>
                </tr>

                @if ($surat->status == 1)
                    <tr>
                        <th>Alasan Ditolak</th>
                        <td>{{ $surat->alasan_ditolak }}</td>
                    </tr>
                @endif

                @if ($surat->hasil_surat)
                    <tr>
                        <th>Hasil Surat</th>
                        <td><a href="{{ asset('back/pdf/'.$surat->hasil_surat) }}" target="_blank" rel="noopener noreferrer">Klik untuk melihat</a></td>
                    </tr>
                @endif

            </table>

            @if ($surat->tipe == 1)
                <div class="float-end">
                    <a href="{{ url('surat/belum-menikah') }}" class="btn btn-secondary">Kembali</a>
                </div>
            @elseif ($surat->tipe == 2)
                <div class="float-end">
                    <a href="{{ url('surat/ktp-domisili') }}" class="btn btn-secondary">Kembali</a>
                </div>
            @elseif ($surat->tipe == 3)
                <div class="float-end">
                    <a href="{{ url('surat/kematian') }}" class="btn btn-secondary">Kembali</a>
                </div>
            @endif
        </div>

        <br><br>

    </main>
@endsection
