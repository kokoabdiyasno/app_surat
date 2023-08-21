@extends('front.layout.template')

@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-5 fw-bolder text-white mb-2">Hubungi Kami</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Sistem Informasi Pengajuan dan Administrasi Surat Desa Kerta
                        Jaya Kabupaten Musi Banyuasin, Sumatera Selatan, 30711</p>
                    <div class="">
                        <a class="btn btn-primary btn-lg px-4 me-sm-1"
                            href="{{ url('pengajuan/belum-menikah') }}">Pengajuan</a>
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
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254985.794466073!2d103.50563262353634!3d-3.053677939946859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3a7c2ddaad427d%3A0x825063ea1fbc135d!2sKerta%20Jaya%2C%20Kec.%20Sungai%20Keruh%2C%20Kabupaten%20Musi%20Banyuasin%2C%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1685884106118!5m2!1sid!2sid"
                        width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                    <h5 class="mt-3"><b>Kontak</b></h5>
                    <ul>
                        <li>Telepon : 082373379399</li>
                        <li>Email : desakertajaya2023@gmail.com</li>
                    </ul>
                </div>

                <div class="col-lg-7">
                    <h2 class="text-center">Asal Usul Desa Kerta Jaya</h2>

                    <p>
                        Kabar pada abad ke-18 kilo kulu Sungai Sake, ada empat dusun kecil. Pada zaman itu dusun kecil
                        disebut Rompok, pada zaman sekarang disebut dengan Talang. Untuk Talang paling ulu Namanya Talang
                        Tanjung, untuk Talang paling Ilo Namanya Talang Pandan, dan untuk Talang yang berada di
                        tengah-tengah Namanya Talang Sekecik dan Talang Lubuk Kucing.
                    </p>

                    <p>
                        Menurut cerita nenek puyang(moyang) atau cerita orang tua-tua dulu. Pada zaman itu dunia miskin,
                        mengambil air memakai belaleng, buah keduduk jadi makanan, pandan musang jadi campur air. Bujang mau
                        tandang kerumah Gadis, kilo kulu naik perahu.
                    </p>

                    <p>
                        Pada zaman itu juga ada satu orang yang jagoan, dia pintar bermain Kuntau, terkenal juga jago
                        Berpance, umur masih mudah sangat jagoan untuk membela kebenaran. Sudah tua menjadi Ulama dan
                        Panutan sampai sekarang jadi keramat di Desa Kertayu. Orang Kertayu menyebutnya Puyang Burung Jauh
                        dan Orang Kerta Jaya menyebutnya Puyang Ulu Dusun. Untuk nama aslinya adalah Puyang Tumak Miah.
                    </p>

                    <p>
                        Sebelum ajalnya datang, berpesanlah Puyang Tumak Miah kepada Rompok Talang yang berada di pinggiran
                        Sungai Sake. Isi dari pesannya adalah dalam waktu sebentar lagi akan banyak musuh datang, bangsa
                        dari Cina dan Belanda yang mau menjajah negeri kita. Siapkan payung sebelum hujan kalo Bersatu kita
                        teguh kalo bercerai kita runtuh.
                    </p>

                    <p>
                        Pesan dari Puyang Tumah Miah tersebut sangat berpengaruh. Sehingga empat Rompok Talang yang berada
                        di pinggiran Sungai Sake bergabung menjadi satu desa yang lebih besar, maka jadilah Desa Kerta Jaya.
                        Menurut bahasa pada zaman itu, orang menyebutnya bahasa Ulu.
                    </p>

                    <p>
                        Kerta artinya Janji, sedangkan Jaya artinya Damai. Maka dapat disimpulkan Kerta Jaya mempunyai arti
                        Perjanjian Damai.
                        Masuk pada zaman pemerintahan setiap kampung ada Pengawah, setiap Dusun/Desa ada Kriya, setiap Mergo
                        ada Pesirah. Bagitu juga dengan Desa Kerta Jaya sudah terlulis didalam sejarah.
                    </p>
                    <p>
                        Pertama sekali menjadi Kriya Namanya Kriya Jahapi, Kriya kedua Kriya Lanang, Kriya ketiga Kriya
                        Muhid, Kriya keempat Kriya Pasai, Kriya kelima Kriya Usup, Kriya keenam Kriya Semir, Kriyah ketujuh
                        Kriya Amun, Kriya kedelapan Kriya Umar, Kriya kesembilan Kriya Abdullah Ajad.
                    </p>
                    <p>
                        Nama Kriya diganti menjadi Kepala Desa yang biasa disingkat Kades. Untuk Kades Pertama Desa Kerta
                        Jaya, namanya Abdullah Ajad, Kades kedua Abdullah Ansori, Kades ketiga M. Rusli, Kades keempat M.
                        Syukur, Kades kelima Al-Aziz, Spd.i, Kades keenam atau Kades sekarang kembali lagi dipimpin oleh
                        Bapak M. Syukur.
                    </p>
                    <p>
                        Penutur: Sahibir
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
