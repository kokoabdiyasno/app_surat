<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::insert(
            [
                [
                    'judul' => 'Kata Sambutan Direktur',
                    'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.',
                    'status' => 'sambutan',
                    'gambar' => 'default.jpg',
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),
                ],
                [
                    'judul' => 'Sejarah',
                    'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.',
                    'status' => 'sejarah',
                    'gambar' => 'default.jpg',
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),
                ],
                [
                    'judul' => 'Struktur Organisasi',
                    'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.',
                    'status' => 'struktur',
                    'gambar' => 'default.jpg',
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),
                ],
                [
                    'judul' => 'Visi & Misi',
                    'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.',
                    'status' => 'visi-misi',
                    'gambar' => 'default.jpg',
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),
                ]
            ]
        );
    }
}
