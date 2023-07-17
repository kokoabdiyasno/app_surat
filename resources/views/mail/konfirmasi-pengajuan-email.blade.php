<!DOCTYPE html>
<html>

<head>
    <title>Sistem Pengajuan Surat</title>
</head>

<body>
    <p>Hallo {{ $data['nama'] }}, pengajuan surat anda melalui sistem dengan detail sebagai berikut :</p>

    {{-- ditolak --}}
    @if ($data['status'] == 1)
        <p>Kami nyatakan <b>DITOLAK</b> dikarenakan, {{ $data['alasan_ditolak'] }}</p>
    @elseif ($data['status'] == 2)
        {{-- disetujui --}}
        <p>Kami nyatakan <b>DITERIMA</b>, Silahkan menunggu selagi admin memproses pengajuan anda</p>
    @else
        <p>Kami nyatakan <b>SELESAI</b>, Dibawah ini adalah file pengajuan surat anda</p>
    @endif

    <p>Jenis Surat : @if ($data['tipe'] == 1)
            Belum Menikah
        @elseif ($data['tipe'] == 2)
            KTP Sementara/Domisili
        @else
            Kematian
        @endif
    </p>
    <p>Nama : {{ $data['nama'] }}</p>
    <p>Jenis Kelamin : {{ $data['jenis_kelamin'] }}</p>
    <p>Tanggal Lahir : {{ date('d/m/Y', strtotime($data['tanggal_lahir'])) }}</p>
    <p>Email : {{ $data['email'] }}</p>
    <p>No Telepon : {{ $data['no_telepon'] }}</p>
    <p>Alamat/Tempat Tinggal : {{ $data['alamat'] }}</p>
    <p>Catatan : {{ $data['catatan'] }}</p>

    @if ($data['hasil_surat'] != null)
        {{ $message->embed(asset('/back/pdf/'. $data['hasil_surat'])) }}
    @endif

</body>

</html>
