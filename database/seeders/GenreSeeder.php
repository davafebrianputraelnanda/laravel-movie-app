<?php

namespace Database\Seeders;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Shounen',
            'description' => 'Shōnen manga is an editorial category of Japanese comics targeting an audience of adolescent boys.',
        ]);
    
        Genre::create([
            'name' => 'Drama',
            'description' => 'Drama is a captivating literary genre that is brought to life through performance.',
        ]);
    
        Genre::create([
            'name' => 'School',
            'description' => ' It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.',
        ]);

        Genre::create([
            'name' => 'Fighting',
            'description' => 'Pada tahun 2020, manusia telah melakukan pergantian pertarungan tinju dengan robot. Charlie Kenton (Hugh Jackman) yang merupakan mantan petinju melatih robot bernama Ambush untuk mengikuti kejuaraan robot profesional.

            Baca artikel detikhot,Real Steel, Ketika Robot Menjadi Petarung" selengkapnya https://hot.detik.com/movie/d-1753898/real-steel-ketika-robot-menjadi-petarung.
            
            Download Apps Detikcom Sekarang https://apps.detik.com/detik/ ',
        ]);

        Genre::create([
            'name' => 'Animasi',
            'description' => 'Kisah dalam SpongeBob Squarepants berpusat pada kehidupan makhluk laut di kota Bikini Bottom, nama yang diambil dari bebatuan karang Bikini Atoll di Samudera Pasifik',
        ]);
    }
}
