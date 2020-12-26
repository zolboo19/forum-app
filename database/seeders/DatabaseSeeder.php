<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Like;
use App\Models\Question;
use App\Models\Reply;
use App\Models\User;
use Database\Factories\LikeFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();
        Category::factory(10)->create();
        Question::factory(10)->create();
        Reply::factory(100)
            ->has(Like::factory()->count(3), 'likes')
            ->create();
        // create()->each(function ($reply) {
        //     return $reply->likes()->save(Like::factory(5))->make();
        // });
    }
}
