@extends('back.layout.template')

@section('title', 'Admin - Profil')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Profil</h1>
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
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Status</th>
                        <th>Gambar</th>
                        <th>Fungsi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($profils as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ Str::limit(strip_tags($item->isi), 120, '...') }}</td>
                            <td>{{ $item->status }}</td>
                            <td class="text-center" width="20%">
                                <img src="{{ asset('back/img/' . $item->gambar) }}" alt="gambar" width="100%">
                            </td>
                            <td class="text-center" width="10%">
                                <button class="btn btn-secondary mb-1" data-bs-toggle="modal"
                                    data-bs-target="#modalDetail{{ $item->id }}">Detail</button>
                                <button class="btn btn-success mb-1" data-bs-toggle="modal"
                                    data-bs-target="#ubahModal{{ $item->id }}">Ubah</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <!-- Modal -->
    @foreach ($profils as $item)
        <div class="modal fade" id="ubahModal{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="staticBackdropLabel">Ubah Profil ({{ $item->status }})</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('admin-profil/' . $item->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <input type="hidden" name="gambarLama" value="{{ $item->gambar }}">
                            <input type="hidden" name="status" value="{{ $item->status }}">

                            <div class="mb-3">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control"
                                    value="{{ old('judul', $item->judul) }}">
                            </div>

                            <div class="mb-3">
                                <label for="myeditor">Isi</label>
                                <textarea name="isi" id="myeditor{{ $item->id }}" class="form-control" class="form-control">
                                    {{ old('isi', $item->isi) }}
                                </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="gambar">Gambar <small>(Max 3 MB)</small></label>
                                <input type="file" name="gambar" id="gambar{{ $item->id }}" class="form-control">

                                <div class="mt-1">
                                    <img id="img-view{{ $item->id }}" src="{{ asset('back/img/' . $item->gambar) }}"
                                        class="img-thumbnail img-preview" width="100px" alt="">
                                </div>
                            </div>

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

    <!-- Modal Detail -->
    @foreach ($profils as $item)
        <div class="modal fade" id="modalDetail{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="staticBackdropLabel">Detail Profil ({{ $item->status }})</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>Judul</td>
                                <td>{{ $item->judul }}</td>
                            </tr>

                            <tr>
                                <td>Isi</td>
                                <td>{!! $item->isi !!}</td>
                            </tr>

                            <tr>
                                <td>Gambar</td>
                                <td class="text-center">
                                    <img src="{{ asset('back/img/' . $item->gambar) }}" alt="gambar" width="100%">
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.20.1/basic/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

    @foreach ($profils as $item)
        <script>
            CKEDITOR.replace('myeditor{{ $item->id }}');
        </script>

        <script>
            $("#gambar{{ $item->id }}").change(function() {
                readURL{{ $item->id }}(this);
            });

            function readURL{{ $item->id }}(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#img-view{{ $item->id }}').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    @endforeach
@endpush
