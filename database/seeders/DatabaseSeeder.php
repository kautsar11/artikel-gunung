<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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
        // User::factory()->create();
        // Post::factory(10)->create(['user_id' => 1]);

        $user = User::factory()->create([
            'username' => 'admin123',
            'password' => 'admin123',
            'email' => 'admin123@gmail.com'
        ]);

        Comment::factory(5)->create([
            'user_id' => $user->id
        ]);
    }
}
