@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Daftar Surat</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>No Telpon</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Status</th>
                                        <th>Fungsi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($surats as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->jenis_kelamin }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->no_telepon }}</td>
                                            <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                                            <td>
                                                @if ($item->status == 0)
                                                    <span class="badge bg-warning">Belum Dikonfirmasi</span>
                                                @elseif ($item->status == 1)
                                                    <span class="badge bg-danger">Ditolak</span>
                                                @elseif ($item->status == 2)
                                                    <span class="badge bg-primary">Diproses</span>
                                                @elseif ($item->status == 3)
                                                    <span class="badge bg-success">Selesai</span>
                                                @endif
                                            </td>
                                            <td class="text-center" width="20%">
                                                <a href="{{ url('surats/detail/' . $item->id) }}"
                                                    class="btn btn-secondary btn-sm mb-1">Detail</a>

                                                @if ($item->status == 0 || $item->status == 1)
                                                    <button class="btn btn-danger btn-sm mb-1" data-bs-toggle="modal"
                                                        data-bs-target="#modalHapus{{ $item->id }}">Hapus</button>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

        $('#status').on('change', function() {
            let status = $(this).val();

            if (status == '1') {
                $('#alasan').show();
            } else {
                $('#alasan').hide();
            }
        });
    </script>
@endpush
