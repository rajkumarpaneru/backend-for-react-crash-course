<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'author' => 'Paolo Cohello',
                'body' => 'The Alchemist'
            ], [
                'author' => 'Dan Brown',
                'body' => 'The Da Vinci Code'
            ], [
                'author' => 'Jorden B. Peterson',
                'body' => '12 rules for life'
            ],

        ];

        DB::table('posts')->insert($posts);
    }
}
