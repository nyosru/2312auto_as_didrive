<?php

namespace Database\Seeders;


use App\Models\Didrive\Shop\v1\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::factory(500)->create();
    }
}
