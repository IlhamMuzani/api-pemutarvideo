<?php

namespace Database\Seeders;

use App\Models\Pemutarvideo;
use App\Models\Tiket;
use Illuminate\Database\Seeder;

class PemutarvideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pemutarvideo = [
            [
                'id' => '1',
                'judul' => 'One Piece',
                'kategori' => 'anime',
                'harga' => '40000',
                'deskripsi' => 'ONE PIECE adalah sebuah Manga dan Anime yang menceritakan tentang petualangan sekelompok bajak laut dalam mencari harta karun legendaris.',
                'video' => 'pemutarvideo/onepeace.mp4',
            ],
            [
                'id' => '2',
                'judul' => 'Fair Tail',
                'kategori' => 'anime',
                'harga' => '50000',
                'deskripsi' => 'Kisah Fairy Tail berlatar tempat di Earth Land yaitu sebuah dunia fantasi dengan penghuninya para penyihir yang mempunyai bermacam-macam kekuatan.',
                'video' => 'pemutarvideo/fairytail.mp4',
            ],
            [
                'id' => '3',
                'judul' => 'Gintama',
                'kategori' => 'anime',
                'harga' => '60000',
                'deskripsi' => 'Gintama bercerita tentang kehidupan sehari-hari tokoh utamanya, yaitu Sakata Gintoki, yang mendirikan usaha bernama “Yorozuya” bersama dua temannya dan satu anjing.',
                'video' => 'pemutarvideo/gintama.mp4',
            ],
            [
                'id' => '4',
                'judul' => 'Hunter X',
                'kategori' => 'anime',
                'harga' => '40000',
                'deskripsi' => 'Hunter x Hunter memiliki latar kisah di sebuah dunia dan dihuni oleh sekumpulan orang-orang yang berambisi menjadi hunter andal.',
                'video' => 'pemutarvideo/hunterx.mp4',
            ],
            [
                'id' => '5',
                'judul' => 'Naruto',
                'kategori' => 'anime',
                'harga' => '45000',
                'deskripsi' => 'Naruto adalah sebuah serial manga karya Masashi Kishimoto yang diadaptasi menjadi serial anime. Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif, periang, dan ambisius.',
                'video' => 'pemutarvideo/naruto.mp4',
            ],
        ];

        Pemutarvideo::insert($pemutarvideo);
    }
}
