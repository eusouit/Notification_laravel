<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => 3,
            'title' => 'teste',
            'body' => 'apenas um teste'
        ]);
        Post::create([
            'user_id' => 3,
            'title' => 'amongus!',
            'body' => 'voce é o impostor'
        ]);
        Post::create([
            'user_id' => 1,
            'title' => 'meteu essa ??',
            'body' => 'uuuuiiiii'
        ]);
    }
}
