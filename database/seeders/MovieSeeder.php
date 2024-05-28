<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([

            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'genre_id' => 1,
            'poster' => 'movie-01.jpg',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ]);

        Movie::create([

            'id' => 2,
            'title' => 'Noragami',
            'genre_id' => 2,
            'poster' => 'movie-02.jpg',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ]);

        Movie::create([

            'id' => 3,
            'title' => 'Wind Breaker',
            'genre_id' => 3,
            'poster' => 'movie-03.jpg',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
    
        ]);

        Movie::create([

            'id' => 4,
            'title' => 'Real Steel',
            'genre_id' => 4,
            'poster' => 'real-01.jpg',
            'synopsis' => 'Pada tahun 2020, manusia telah melakukan pergantian pertarungan tinju dengan robot. Charlie Kenton (Hugh Jackman) yang merupakan mantan petinju melatih robot bernama Ambush untuk mengikuti kejuaraan robot profesional.

            Baca artikel detikhot,Real Steel, Ketika Robot Menjadi Petarung" selengkapnya https://hot.detik.com/movie/d-1753898/real-steel-ketika-robot-menjadi-petarung.
            
            Download Apps Detikcom Sekarang https://apps.detik.com/detik/'
        ]);

        Movie::create([

            'id' => 5,
            'title' => 'Spongebob',
            'genre_id' => 5,
            'poster' => 'spg1.jpg',
            'synopsis' => 'Kisah dalam SpongeBob Squarepants berpusat pada kehidupan makhluk laut di kota Bikini Bottom, nama yang diambil dari bebatuan karang Bikini Atoll di Samudera Pasifik.'
        ]);
        
    }
}
