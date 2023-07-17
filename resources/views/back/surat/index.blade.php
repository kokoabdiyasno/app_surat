@extends('back.layout.template')

@section('title', 'Admin - Daftar Data Pengajuan Surat')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data {{ $judul }}</h1>
            <p><i>Daftar Data Pengajuan Surat ({{ $judul }})</i></p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                                <a href="{{ url('surat/detail/' . $item->id) }}"
                                    class="btn btn-secondary btn-sm mb-1">Detail</a>

                                @if ($item->status == 0)
                                    <button class="btn btn-success btn-sm mb-1" data-bs-toggle="modal"
                                        data-bs-target="#modalKonfirmasi{{ $item->id }}">Konfirmasi</button>
                                @elseif($item->status == 2)
                                    <button class="btn btn-success btn-sm mb-1" data-bs-toggle="modal"
                                        data-bs-target="#modalSelesai{{ $item->id }}">Selesai</button>
                                @endif

                                <button class="btn btn-danger btn-sm mb-1" data-bs-toggle="modal"
                                    data-bs-target="#modalHapus{{ $item->id }}">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    {{-- Modal Konfirmasi --}}
    @foreach ($surats as $item)
        <div class="modal fade" id="modalKonfirmasi{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Pengajuan Surat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('surat/' . $item->id) }}" method="post">
                            @method('put')
                            @csrf

                            <div class="mb-3">
                                <label for="status">Pilih Tindakan</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="" hidden>-- pilih --</option>
                                    <option value="2">Setuju</option>
                                    <option value="1">Tolak</option>
                                </select>
                            </div>

                            <div id="alasan" style="display: none">
                                <div class="mb-3">
                                    <label for="alasan_ditolak">Alasan</label>
                                    <textarea name="alasan_ditolak" id="alasan_ditolak" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>

                            <small>
                                <p><b>Catatan :</b> Data yang sudah dikonfirmasi tidak dapat diubah</p>
                            </small>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    @endforeach

    {{-- Modal Selesai --}}
    @foreach ($surats as $item)
        <div class="modal fade" id="modalSelesai{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="staticBackdropLabel">Selesaikan Pengajuan Surat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('surat/' . $item->id) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf

                            <input type="hidden" name="status" value="3">

                            <div class="mb-3">
                                <label for="hasil_surat">Upload Surat (Max 3 MB)</label>
                                <input type="file" name="hasil_surat" id="hasil_surat" class="form-control" required>
                            </div>

                            <small>
                                <p><b>Catatan :</b> Data yang sudah dikonfirmasi tidak dapat diubah</p>
                            </small>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    @endforeach

    {{-- Modal Hapus --}}
    @foreach ($surats as $item)
        <div class="modal fade" id="modalHapus{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Pengajuan Surat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('surat/' . $item->id) }}" method="post">
                            @method('delete')
                            @csrf

                            <p>Yakin data surat dengan nama : {{ $item->nama }}, Akan dihapus.?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    @endforeach
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
