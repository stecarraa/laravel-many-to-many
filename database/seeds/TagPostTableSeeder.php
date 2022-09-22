<?php

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            $randomTags = Tag::inRandomOrder()->take(rand(1, 4))->get();
            $post->tags()->attach($randomTags);
        }
    }
}
