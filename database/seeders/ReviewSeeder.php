<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([

            'id' => 1,
            'movie_id' => 1,
            'user'=> 'Danish',
            'rating'=> '5/10',
            'date' => '20 May 2024',
        ]);

        Review::create([

            'id' => 2,
            'movie_id' => 2,
            'user'=> 'Danish',
            'rating'=> '5/10',
            'date' => '20 May 2024',
        ]);

    Review::create([

            'id' => 3,
            'movie_id' => 3,
            'user'=> 'Danish',
            'rating'=> '5/10',
            'date' => '20 May 2024',
    
        ]);

        Review::create([

            'id' => 4,
            'movie_id' => 4,
            'user'=> 'Danish',
            'rating'=> '5/10',
            'date' => '20 May 2024',
    
        ]);

        Review::create([

            'id' => 5,
            'movie_id' => 5,
            'user'=> 'Danish',
            'rating'=> '5/10',
            'date' => '20 May 2024',
    
        ]);
        
    }
}
