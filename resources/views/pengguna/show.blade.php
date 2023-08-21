@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Detail Surat</div>

                    <div class="card-body">
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
                                                <img src="{{ asset('back/img/' . $surat->berkas_pendukung) }}"
                                                    width="400px">
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
                                        <td><a href="{{ asset('back/pdf/' . $surat->hasil_surat) }}" target="_blank"
                                                rel="noopener noreferrer">Klik untuk melihat</a></td>
                                    </tr>
                                @endif

                            </table>

                            <div class="float-end">
                                <a href="{{ url('home') }}" class="btn btn-secondary mt-2">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
