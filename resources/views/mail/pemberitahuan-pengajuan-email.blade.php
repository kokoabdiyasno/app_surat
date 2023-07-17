<!DOCTYPE html>
<html>

<head>
    <title>Sistem Pengajuan Surat</title>
</head>

<body>
    <p>Hallo admin, ada pengajuan surat masuk melalui sistem dengan detail sebagai berikut :</p>

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

    <p>Silahkan login ke sistem untuk melakukan konfirmasi atau Balas pesan ke email : {{ $data['email'] }}</p>
</body>

</html>
